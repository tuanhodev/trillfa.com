<?php

namespace App\Orchid\Layouts\Blog;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Layouts\Rows;

class PostEditStatusLayout extends Rows
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
                ->value(1)
                ->sendTrueOrFalse()
                ->placeholder('Xuất bản'),

            DateTimer::make('post.published_at')
                ->placeholder('Đặt ngày xuất bản')
                ->tabindex(4)
                ->allowInput()
                // ->format('d-m-Y'),
        ];
    }
}
