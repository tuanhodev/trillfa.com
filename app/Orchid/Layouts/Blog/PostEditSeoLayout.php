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

        ];
    }
}
