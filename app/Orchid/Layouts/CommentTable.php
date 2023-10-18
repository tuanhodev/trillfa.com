<?php

namespace App\Orchid\Layouts;

use App\Models\Comment;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CommentTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'comments';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [

            TD::make('User')
                ->render(function (Comment $comment) {
                    return $comment->user->find($comment->user_id)->name;
                }),

            TD::make('content', 'Nội dung'),

            TD::make('visible')
                ->width('120px')
                ->render(fn (Comment $comment) => Switcher::make('visible')
                    ->value($comment->visible)
                    ->disabled()),

            TD::make('Trạng thái')
                ->alignRight()
                ->render(
                    fn (Comment $comment) =>
                    ModalToggle::make('Đổi trạng thái')
                        ->icon('bs.toggles')
                        ->modal('modalCommentStatus')
                        ->method('update')
                        ->modalTitle('Trạng thái hiển thị bình luận')
                        ->asyncParameters(['comment' => $comment->id]),
                ),

        ];
    }

    protected function textNotFound(): string
    {
        return __('Không có danh mục nào được tìm thấy');
    }

    protected function subNotFound(): string
    {
        return '';
    }

    public function allowedComment()
    {
    }

    public function disabledComment()
    {
    }
}
