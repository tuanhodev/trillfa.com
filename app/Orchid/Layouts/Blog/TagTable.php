<?php

namespace App\Orchid\Layouts\Blog;

use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use App\Models\Tag;

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

            TD::make('Kiểu thẻ tag')
                ->sort()
                ->filter(Input::make())
                ->render( fn (Tag $tag) => ModalToggle::make($tag->type)
                        ->modal('modalTagEdit')
                        ->method('createOrUpdate')
                        ->modalTitle($tag->name)
                        ->asyncParameters([
                            'tag' => $tag->id,
                        ]),
                ),

            TD::make('name', 'Tên')
                ->sort()
                ->filter(Input::make())
                ->render( fn (Tag $tag) => ModalToggle::make($tag->name)
                        // ->icon('bs.pencil-square')
                        ->modal('modalTagEdit')
                        ->method('createOrUpdate')
                        ->modalTitle($tag->name)
                        ->asyncParameters([
                            'tag' => $tag->id,
                        ]),
                ),
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

                            ModalToggle::make('Chỉnh sửa')
                                ->icon('bs.pencil-square')
                                ->modal('modalTagEdit')
                                ->method('createOrUpdate')
                                ->modalTitle($tag->name)
                                ->asyncParameters([
                                    'tag' => $tag->id,
                                ]),

                            Button::make('Xóa')
                                ->icon('bs.trash')
                                ->confirm('Thao tác này sẽ xóa ' . '('. $tag->name . ')')
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
