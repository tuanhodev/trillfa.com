<?php

namespace App\Orchid\Screens\Blog;

use App\Orchid\Layouts\Blog\ModalTopicEdit;
use App\Http\Requests\Blog\TopicRequest;
use App\Orchid\Layouts\Blog\TopicTable;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use App\Models\Blog\Topic;
use Orchid\Screen\Screen;

class TopicListScreen extends Screen
{

    public $topic;

    public $modalActionName;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Topic $topic): iterable
    {
        return [
            'topics' => Topic::filters()->defaultSort('id')->paginate(10),
            'topic'  => $topic,
        ];
    }

    public function __construct(Topic $topic)
    {

        $this->modalActionName = $topic->exists ? 'Chỉnh sửa' : 'Thêm';

    }


    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Quản lý chuyên mục';
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
                ->modal('modalTopicEdit')
                ->method('createOrUpdate'),
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

            TopicTable::class,

            Layout::modal(
                'modalTopicEdit',
                ModalTopicEdit::class
            )
                ->withoutCloseButton()
                ->title($this->modalActionName . ' chuyên mục')
                ->applyButton('Được')
                ->async('asyncGetTopic')

        ];
    }

    public function asyncGetTopic(Topic $topic): array
    {

        return  [
            'topic' => $topic,
        ];
    }

    public function createOrUpdate(TopicRequest $request)
    {

        $validated = $request->validated();

        $id = $request->input('topic.id');

        $slug = $validated['slug'];

        $topicData = array_merge(
            $validated['topic'],
            [
                'slug' => $slug,
            ]
        );

        Topic::updateOrCreate([ 'id' => $id ], $topicData );

        Toast::info('Thành công');

    }

    public function destroy (Topic $topic)
    {

        $topic->delete();

        Toast::info('Xóa thành công');

    }
 }
