<?php

namespace App\Orchid\Layouts\Blog;

use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;

class ModalTagEdit extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [

            Input::make('tag.id')
                ->type('hidden'),

            Select::make('tag.type')
            ->options([
                'post'    => 'Kiểu bài viết',
                'product' => 'Kiểu sản phẩm',
                'project' => 'Kiểu dự án',
            ])
                // ->empty('Chọn một kiểu', 'post')
                ->title('Kiểu thẻ tag'),

            Input::make('tag.name')
                ->autofocus()
                ->tabindex(1)
                ->placeholder('Nhập tên chuyên mục')
                ->title('Tên thẻ tang'),

        ];
    }
}
