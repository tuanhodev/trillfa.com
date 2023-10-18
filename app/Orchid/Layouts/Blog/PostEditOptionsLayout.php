<?php

namespace App\Orchid\Layouts\Blog;

use App\Models\Blog\Tag;
use Orchid\Screen\Field;
use App\Models\Blog\Topic;
use Orchid\Screen\Fields\RadioButtons;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class PostEditOptionsLayout extends Rows
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

            Select::make('post.post_type')
                ->tabindex(5)
                ->title('Kiểu xuất bản')
                ->options([
                    'post' => 'Kiểu bài viêt',
                    'project' => 'Kiểu dự án',
                    'page'    => 'Kiểu trang',
                ]),

            Select::make('topic.')
                ->multiple()
                ->tabindex(5)
                ->help('Nhập để tìm kiếm')
                // ->style('margin-top: 3rem;')
                ->fromQuery(Topic::where('parent_id', '!=', '')->where('status', true), 'name')
                ->placeholder('Chọn chuyên mục')
                ->help('Nhập để tìm kiếm')
                ->title('Chuyên muc'),

            Select::make('tag.')
                ->tabindex(6)
                ->multiple()
                ->style('margin-top: 3rem;')
                ->fromQuery(Tag::where('type', '=', 'post'), 'name')
                ->placeholder('Gắn thẻ tag')
                ->help('Nhập để tìm kiếm')
                ->title('Thẻ tag'),

        ];
    }
}
