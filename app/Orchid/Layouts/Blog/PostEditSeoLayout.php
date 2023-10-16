<?php

namespace App\Orchid\Layouts\Blog;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class PostEditSeoLayout extends Rows
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

            Input::make('post.meta_keywords')
                ->tabindex(7)
                ->placeholder('Meta keywords'),

            TextArea::make('post.meta_description')
                ->tabindex(8)
                ->placeholder('Meta description'),

        ];
    }
}
