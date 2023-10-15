<?php

namespace App\Orchid\Layouts\Blog;

use App\Models\Blog\Tag;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class TagTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'tags';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [

            TD::make('id', 'ID')
                ->sort(),

            TD::make('type', 'Kiểu thẻ tag')
                ->sort()
                ->filter(Input::make()),

            TD::make('name', 'Tên')
                ->sort()
                ->filter(Input::make()),

            TD::make('slug', 'Seo url')
                ->sort()
                ->filter(Input::make()),

            TD::make('Actions')
                ->alignRight()
                ->render(function (Tag $tag) {
                    return
                        DropDown::make()
                        ->icon('bs.sliders')
                        ->list([

                            ModalToggle::make('Edit')
                                ->icon('bs.pencil-square')
                                // ->class('btn btn-primary rounded')
                                ->modal('modalTagEdit')
                                ->method('createOrUpdate')
                                ->modalTitle('Thêm chuyên muc')
                                ->asyncParameters([
                                    'tag' => $tag->id,
                                ]),

                            Button::make('Delete')
                                ->icon('bs.trash')
                                ->confirm('Thao tác này sẽ xóa chuyên mục và các bản ghi liên quan')
                                ->method('destroy', ['tag' => $tag->id])

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
