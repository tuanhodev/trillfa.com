<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Fields\RadioButtons;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Field;

class ModalCommentStatus extends Rows
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
        $comment = $this->query->get('comment');

        return [
            RadioButtons::make('visible')
                ->options([
                    1 => 'Hiển thị',
                    0 => 'Ẩn'
                ])
                ->value($comment->visible ?? '')
                ->title('Trạng thái hiển thị'),
        ];
    }
}
