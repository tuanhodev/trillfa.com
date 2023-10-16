<?php

namespace App\Orchid\Layouts\Blog;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\SimpleMDE;
use Orchid\Screen\Layouts\Rows;

class PostEditContentLayout extends Rows
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

            Input::make('post.title')
                ->autofocus()
                ->tabindex(1)
                ->placeholder('Tiêu đề bài viết')
                ->class('container-fluid border rounded-1 py-3 px-3 my-2'),

            SimpleMDE::make('post.content')
                ->tabindex(2)
                ->autocomplete()
                ->placeholder('Nội dung chính'),

        ];
    }
}
