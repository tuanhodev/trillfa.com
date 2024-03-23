<?php

namespace App\Orchid\Layouts\Blog;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\TextArea;
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

            Input::make('topic.ordering')
                ->type('float')
                ->tabindex(1)
                ->placeholder('Nhập thứ tự')
                ->title('Thứ tự'),

            Input::make('topic.icon')
                ->tabindex(1)
                ->placeholder('Nhập từ khóa icon')
                ->title('Icon'),

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

            TextArea::make('topic.meta_keywords')
                ->tabindex(2)
                ->placeholder('Nhập keywords')
                ->title('Meta Keywords')
                ->rows(3),

            TextArea::make('topic.meta_description')
                ->tabindex(2)
                ->placeholder('Nhập mô tả')
                ->title('Meta Description')
                ->rows(3),

            Switcher::make('topic.status')
                ->tabindex(3)
                ->value(1)
                ->sendTrueOrFalse()
                ->title('Hiển thị')
                ->placeholder('Hiển thị danh mục'),

            Select::make('topic.topic_type')
                ->tabindex(5)
                ->title('Kiểu xuất bản')
                ->options([
                    'collection' => '-- Kiểu bộ sưu tập',
                    'post'       => '-- Kiểu bài viêt',
                    'project'    => '-- Kiểu dự án',
                    'page'       => '-- Kiểu trang',
                ]),

        ];
    }
}
