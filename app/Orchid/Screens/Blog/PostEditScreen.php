<?php

namespace App\Orchid\Screens\Blog;

use App\Models\Blog\Post;
use App\Orchid\Layouts\Blog\PostEditLayoutLeft;
use App\Orchid\Layouts\Blog\PostEditLayoutRight;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
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

            Layout::view('platform.template.post-title'),

            Layout::split([
                PostEditLayoutLeft::class,
                // Right content
                PostEditLayoutRight::class,
            ])->ratio('60/40'),

        ];
    }
}
