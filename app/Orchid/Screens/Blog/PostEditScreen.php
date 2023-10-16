<?php

namespace App\Orchid\Screens\Blog;

use App\Models\Blog\Post;
use App\Orchid\Layouts\Blog\PostEditContentLayout;
use App\Orchid\Layouts\Blog\PostEditOptionsLayout;
use App\Orchid\Layouts\Blog\PostEditSeoLayout;
use App\Orchid\Layouts\Blog\PostEditThumbnailLayout;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Screen;

class PostEditScreen extends Screen
{

    public $post;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Post $post): iterable
    {
        return [

            'post' => $post,

        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->post->exists ? 'Thêm' : 'Chỉnh sửa';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {

        return [

            Button::make(__('Remove'))
                ->icon('bs.trash3')
                ->confirm(__('Đang thực hiện xóa bài viết?'))
                ->method('remove')
                ->canSee($this->post->exists),

            Button::make(__('Save'))
                ->icon('bs.check-circle')
                ->method('save'),
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

            Layout::wrapper('platform.template.content-container', [

                'mainContent' => [
                    PostEditContentLayout::class,
                    PostEditThumbnailLayout::class,
                ],
                'rightBar' => [
                    Layout::rows([
                        Switcher::make('post.status')
                            ->tabindex(3)
                            ->title('Trạng thái')
                            ->value(1)
                            ->sendTrueOrFalse()
                            ->placeholder('Xuất bản'),
                        DateTimer::make('post.published_at')
                            ->tabindex(4)
                            ->allowInput()
                            ->format('d-m-Y')
                            ->title('Ngày xuất bản'),
                    ]),
                    PostEditOptionsLayout::class,
                    PostEditSeoLayout::class,

                ]

            ])

        ];
    }
}
