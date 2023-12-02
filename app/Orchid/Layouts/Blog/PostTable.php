<?php

namespace App\Orchid\Layouts\Blog;

use Orchid\Screen\Components\Cells\DateTimeSplit;
use Illuminate\Support\Facades\Auth;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\Link;
use App\Models\Blog\Post;
use Orchid\Screen\TD;

class PostTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'posts';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [

            TD::make('id', 'Id')
                ->width('132px')
                ->sort()
                ->render(fn (Post $post) => view('components.platform.render-image-in-table', ['post' => $post])),

            TD::make('title')
                ->sort()
                ->filter()
                ->render(fn (Post $post) => Link::make($post->title)->route('blog.posts.edit', $post)),

            TD::make('post_type', 'Kiểu')
                ->alignCenter()
                ->width('120px')
                ->filter(),

            TD::make('published_at', 'Ngày phát hành')
                ->usingComponent(
                    DateTimeSplit::class,
                    upperFormat: 'd-m-Y',
                    lowerFormat: 'H:i:s',
                    timeZone: 'Asia/Ho_Chi_Minh'
                )
                ->width('200px')
                ->alignRight()
                ->filter()
                ->sort(),

            TD::make('Thao tác')
                ->width('120px')
                ->alignRight()
                ->render(function (Post $post) {
                    return
                        DropDown::make()
                        ->canSee(Auth::user()->id == $post->user_id)
                        ->icon('bs.sliders')
                        ->list([

                            Link::make('Chỉnh sửa')
                                // ->canSee(Auth::user()->id == $post->user_id)
                                ->route('blog.posts.edit', $post)
                                ->icon('bs.pencil-square'),

                            Button::make('Xóa')
                                ->confirm('Thao tác này sẽ xóa ' . $post->title)
                                // ->canSee(Auth::user()->id == $post->user_id)
                                ->method('destroy', ['post' => $post->id])
                                ->icon('bs.trash'),

                        ]);
                }),

        ];
    }

    protected function textNotFound(): string
    {
        return __('Không có danh mục nào được tìm thấy');
    }

    protected function subNotFound(): string
    {
        return '';
    }
}
