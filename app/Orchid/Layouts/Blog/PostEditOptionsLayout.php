<?php

namespace App\Orchid\Layouts\Blog;

use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;
use App\Models\Blog\Topic;
use App\Models\Blog\Tag;
use Orchid\Screen\Field;

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
        $queryType = $this->query->get('post')->topics->first();

        $topic_type = $queryType ? $queryType->topic_type : '';

        return [

            Select::make('post.post_type')
                ->tabindex(5)
                ->title('Kiểu xuất bản')
                ->empty('Chọn kiểu xuất bản', 'post')
                ->options([
                    'collection' => '-- Kiểu bộ sưu tập',
                    'post'       => '-- Kiểu bài viêt',
                    'project'    => '-- Kiểu dự án',
                    'page'       => '-- Kiểu trang',
                ]),

            Select::make('topic.')
                ->canSee($topic_type != 'collection')
                ->multiple()
                ->tabindex(5)
                ->help('Nhập để tìm kiếm')
                ->fromQuery(Topic::where('parent_id', '!=', '')->where('topic_type', 'post')->where('status', true), 'name')
                ->placeholder('Chọn chuyên mục')
                ->help('Nhập để tìm kiếm')
                ->title('Chuyên muc'),

            Select::make('collection')
                ->canSee($topic_type == '' | $topic_type == 'collection')
                ->tabindex(5)
                ->help('Nhập để tìm kiếm')
                ->fromQuery(Topic::where('topic_type', 'collection')->where('status', true), 'name')
                ->empty('Chọn bộ sưu tập', '')
                ->help('Chọn bộ sưu tập thi không chọn chuyên mục')
                ->title('Bộ sưu tập'),

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
