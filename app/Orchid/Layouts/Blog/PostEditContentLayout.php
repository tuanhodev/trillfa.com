<?php

namespace App\Orchid\Layouts\Blog;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\SimpleMDE;
use Orchid\Screen\Layouts\Rows;
use Illuminate\Http\Request;
use Orchid\Screen\Layouts\Listener;
use Orchid\Screen\Repository;
use Orchid\Support\Facades\Layout;

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
                ->class('form-control'),

            SimpleMDE::make('post.content')
                ->tabindex(2)
                ->autocomplete()
                ->placeholder('Nội dung chính'),

        ];
    }
}
