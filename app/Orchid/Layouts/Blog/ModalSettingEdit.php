<?php

namespace App\Orchid\Layouts\Blog;

use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Input;

class ModalSettingEdit extends Rows
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

            Input::make('setting.id')
                ->type('hidden'),

            Input::make('setting.label')
                ->required()
                ->autofocus()
                ->tabindex(1)
                ->placeholder('Nhập tên khóa cài đặt')
                ->title('Tên khóa cài đặt'),

            Input::make('setting.key')
                ->required()
                ->tabindex(2)
                ->placeholder('Nhập khóa')
                ->title('Khóa cài đặt'),

            Input::make('setting.value')
                ->required()
                ->tabindex(3)
                ->placeholder('Nhập giá trị')
                ->title('Giá trị'),

            Input::make('setting.attributes')
                ->tabindex(4)
                ->placeholder('Nhập thuộc tính')
                ->title('Thuộc tính'),

        ];
    }
}
