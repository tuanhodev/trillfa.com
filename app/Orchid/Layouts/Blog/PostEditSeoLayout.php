<?php

namespace App\Orchid\Layouts\Blog;

use Orchid\Screen\Field;
// use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Matrix;
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

            TextArea::make('post.meta_keywords')
                ->tabindex(2)
                ->placeholder('Nhập keywords')
                ->title('Meta Keywords')
                ->rows(3),

            TextArea::make('post.meta_description')
                ->rows(5)
                ->tabindex(8)
                ->placeholder('Meta description'),

            Matrix::make('post.anchor_link')
                ->columns([
                    'Tên điểm neo' => 'anchor_name',
                    'Điểm neo' => 'anchor_id',
                ])
                ->title("Tạo anchor link"),

        ];
    }
}
