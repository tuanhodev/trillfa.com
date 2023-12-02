<?php

namespace App\Orchid\Layouts\Blog;

use App\View\Components\Platform\Blog\RenderParentTopic;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Fields\Input;
use App\Models\Blog\Topic;
use Orchid\Screen\TD;

class TopicTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'topics';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [

            TD::make('id', 'ID')
                ->sort(),

            TD::make('name', 'Tên')
                ->sort()
                ->filter(Input::make())
                ->render(function (Topic $topic) {
                    return ModalToggle::make($topic->name)
                        ->modal('modalTopicEdit')
                        ->method('createOrUpdate')
                        ->modalTitle('Chỉnh sửa chuyên muc')
                        ->asyncParameters(['topic' => $topic->id]);
                }),
            TD::make('topic_type', 'Kiểu chuyên mục')
                ->sort()
                ->filter(Input::make()),

            TD::make('Chuyên mục')
                ->component(RenderParentTopic::class),

            TD::make('Actions')
                ->alignRight()
                ->render(function (Topic $topic) {
                    return
                        DropDown::make()
                        ->icon('bs.sliders')
                        ->list([

                            ModalToggle::make('Edit')
                                ->icon('bs.pencil-square')
                                ->modal('modalTopicEdit')
                                ->method('createOrUpdate')
                                ->modalTitle('Chỉnh sửa chuyên muc')
                                ->asyncParameters([
                                    'topic' => $topic->id,
                                ]),

                            Button::make('Delete')
                                ->icon('bs.trash')
                                ->confirm('Thao tác này sẽ xóa chuyên mục và các bản ghi liên quan')
                                ->method('destroy', ['topic' => $topic->id])

                        ]);
                }),

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
}
