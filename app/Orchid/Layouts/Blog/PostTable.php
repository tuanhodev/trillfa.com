<?php

namespace App\Orchid\Layouts\Blog;

use App\Models\Blog\Post;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
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

            TD::make('name'),

            TD::make('slug', 'Seo url')
                ->sort()
                ->filter(Input::make()),

            TD::make('Actions')
                ->alignRight()
                ->render(function (Post $post) {
                    return
                        DropDown::make()
                        ->icon('bs.sliders')
                        ->list([

                            // ModalToggle::make('Edit')
                            //     ->icon('bs.pencil-square')
                            //     ->modal('modalpostEdit')
                            //     ->method('createOrUpdate')
                            //     ->modalTitle('Thêm chuyên muc')
                            //     ->asyncParameters([
                            //         'post' => $post->id,
                            //     ]),

                            Button::make('Delete')
                                ->icon('bs.trash')
                                ->confirm('Thao tác này sẽ xóa chuyên mục và các bản ghi liên quan')
                                ->method('destroy', ['post' => $post->id])

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
