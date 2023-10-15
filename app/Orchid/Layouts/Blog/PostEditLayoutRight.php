<?php

namespace App\Orchid\Layouts\Blog;

use App\Models\Blog\Tag;
use App\Models\Blog\Topic;
use App\Orchid\Fields\TextField;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class PostEditLayoutRight extends Rows
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

            Switcher::make('post.status')
                ->tabindex(3)
                ->title('Trạng thái')
                ->value(1)
                ->sendTrueOrFalse()
                ->placeholder('Xuất bản'),

            DateTimer::make('post.published_at')
                ->tabindex(4)
                ->allowInput()
                ->format('d-m-Y')
                ->title('Ngày xuất bản'),

            // header
            TextField::make('')
                ->title('Tùy chọn'),

            Select::make('post.category')
                ->tabindex(5)
                ->help('Nhập để tìm kiếm')
                ->style('margin-top: 3rem;')
                ->fromQuery(Topic::where('parent_id', '!=', '')->where('status', true), 'name')
                ->title('Chuyên muc'),

            Select::make('post.tag.')
                ->tabindex(6)
                ->allowAdd()
                ->multiple()
                ->style('margin-top: 3rem;')
                ->fromQuery(Tag::where('type', '=', 'post'), 'name')
                ->placeholder('Gắn thẻ tag')
                ->help('Nhập để tìm kiếm')
                ->title('Thẻ tag'),

            // header
            TextField::make('')
                ->title('Thiết lập seo'),

            Input::make('meta.url')
                ->tabindex(7)
                ->placeholder('Meta url'),

            Input::make('meta.title')
                ->tabindex(8)
                ->placeholder('Meta title'),

            Input::make('meta.keywords')
                ->tabindex(9)
                ->placeholder('Meta keywords'),

            TextArea::make('meta.description')
                ->tabindex(10)
                ->placeholder('Meta description'),

            Picture::make('post.thumbnail')
                ->tabindex(11)
                ->placeholder('Ảnh bìa bài viết'),

        ];
    }
}
