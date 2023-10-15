<?php

namespace App\Orchid\Screens\Blog;

use App\Orchid\Layouts\Blog\PostTable;
use Orchid\Support\Facades\Toast;
use App\Models\Blog\Post;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class PostListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Post $post): iterable
    {
        return [

            'posts' => Post::filters()->defaultSort('id')->paginate(10),

            'post'  => $post,

        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Quản lý bài viết';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [

            Link::make('Thêm')
                ->icon('bs.plus-circle')
                ->route('blog.posts.create'),

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

            PostTable::class,

        ];
    }

    public function destroy(Post $post)
    {

        $post->delete();

        Toast::info('Xóa thành công');
    }
}
