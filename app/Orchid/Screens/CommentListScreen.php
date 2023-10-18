<?php

namespace App\Orchid\Screens;

use App\Orchid\Layouts\CommentTable;
use App\Orchid\Layouts\ModalCommentStatus;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentListScreen extends Screen
{

    public $comment;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Comment $comment): iterable
    {
        return [

            'comments' => Comment::filters()->defaultSort('id')->paginate(10),
            'comment'  => $comment,

        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Quản lý bình luận';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [

            Link::make('Trang chính')
                ->icon('bs.arrow-left-circle')
                ->route('platform.index'),

        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [

            CommentTable::class,

            Layout::modal('modalCommentStatus', [
                ModalCommentStatus::class,
            ])->async('asyncGetComment'),

        ];
    }

    public function asyncGetComment(Comment $comment)
    {
        return [
            'comment' => $comment,
        ];
    }

    public function update(Request $request, Comment $comment)
    {

        $status = false;

        if ($request->has('visible')) {

            $status = $request->get('visible');

        }

        $comment->update([
            'visible' => $status,
        ]);

        Toast::info('Cập nhật thành công');
    }
}
