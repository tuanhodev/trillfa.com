<?php

namespace App\Orchid\Layouts\Blog;

use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Select;
use App\Models\Blog\Topic;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Switcher;

class ModalTopicEdit extends Rows
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

            Input::make('topic.id')
                ->type('hidden'),

            Select::make('topic.parent_id')
                ->tabindex(1)
                ->empty('Chọn một danh mục cha mẹ', '')
                ->fromQuery(Topic::where('parent_id', null)->where('status', '=', 1), 'name')
                ->title('Thuộc về chuyên mục'),

            Input::make('topic.name')
                ->autofocus()
                ->tabindex(2)
                ->placeholder('Nhập tên chuyên mục')
                ->title('Tên'),

            Switcher::make('topic.status')
                ->tabindex(3)
                ->value(1)
                ->sendTrueOrFalse()
                ->title('Hiển thị')
                ->placeholder('Hiển thị danh mục'),

        ];
    }
}
