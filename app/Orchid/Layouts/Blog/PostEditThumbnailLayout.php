<?php

namespace App\Orchid\Layouts\Blog;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Layouts\Rows;

class PostEditThumbnailLayout extends Rows
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

            Picture::make('post.thumbnail')
                ->groups('posts')
                ->tabindex(11)
                ->placeholder('Ảnh bìa bài viết'),

        ];
    }
}
