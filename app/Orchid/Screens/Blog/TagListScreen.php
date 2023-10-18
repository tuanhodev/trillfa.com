<?php

namespace App\Orchid\Screens\Blog;

use Orchid\Screen\Screen;
use App\Orchid\Layouts\Blog\ModalTagEdit;
use App\Http\Requests\Blog\TagRequest;
use Orchid\Screen\Actions\ModalToggle;
use App\Orchid\Layouts\Blog\TagTable;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use App\Models\Blog\Tag;

class TagListScreen extends Screen
{


    public $tag;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Tag $tag): iterable
    {
        return [

            'tags' => Tag::filters()->defaultSort('id')->paginate(10),
            'tag'  => $tag,

        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Quản lý thẻ tag';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [

            ModalToggle::make('Thêm')
                ->icon('bs.plus-circle')
                ->modal('modalTagEdit')
                ->method('createOrUpdate')
                ->modalTitle('Thêm thẻ tag'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {

        return [

            TagTable::class,

            Layout::modal(
                'modalTagEdit',
                ModalTagEdit::class,
            )
                ->async('asyncGetTag')
                ->title('Thêm thẻ tag')
                ->withoutCloseButton()
                ->applyButton('Lưu'),

        ];
    }

    public function asyncGetTag(Tag $tag)
    {
        return [

            'tag' => $tag,

        ];
    }

    public function createOrUpdate(TagRequest $request)
    {

        $validated = $request->validated();

        $id = $request->input('tag.id');

        $slug = $validated['slug'];

        $tagData = array_merge(
            $validated['tag'],
            [
                'slug' => $slug,
            ]
        );

        Tag::updateOrCreate([ 'id' => $id ], $tagData );

        Toast::info('Thành công');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        Toast::info('Xóa thành công');
    }
}
