<?php

namespace App\Orchid\Layouts\MenuDesign;

// use App\View\Components\Platform\Blog\RenderParentTopic;
// use Orchid\Screen\Actions\ModalToggle;
// use Orchid\Screen\Actions\DropDown;
// use Orchid\Screen\Actions\Button;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Fields\Input;
use App\Models\MenuDesign;
use Orchid\Screen\TD;

class MenuTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'menus';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [

            TD::make('ordering', 'Ordering')
                ->sort()
                ->filter(Input::make()),

            TD::make('name', 'Tên')
                ->sort()
                ->filter(Input::make()),
                // ->render(function (Topic $topic) {
                //     return ModalToggle::make($topic->name)
                //         ->modal('modalTopicEdit')
                //         ->method('createOrUpdate')
                //         ->modalTitle('Chỉnh sửa chuyên muc')
                //         ->asyncParameters(['topic' => $topic->id]);
                // }),
            TD::make('route', 'Route')
                ->filter(Input::make()),

            TD::make('parent_id', 'Vị trí xuất hiện')
                ->filter(Input::make())
                ->render(function (MenuDesign $menu) {

                    return $menu->parentNam();
                }),

            TD::make('Actions')
                ->alignRight()
                // ->render(function (Topic $topic) {
                //     return
                //         DropDown::make()
                //         ->icon('bs.sliders')
                //         ->list([

                //             ModalToggle::make('Edit')
                //                 ->icon('bs.pencil-square')
                //                 ->modal('modalTopicEdit')
                //                 ->method('createOrUpdate')
                //                 ->modalTitle('Chỉnh sửa chuyên muc')
                //                 ->asyncParameters([
                //                     'topic' => $topic->id,
                //                 ]),

                //             Button::make('Delete')
                //                 ->icon('bs.trash')
                //                 ->confirm('Thao tác này sẽ xóa chuyên mục và các bản ghi liên quan')
                //                 ->method('destroy', ['topic' => $topic->id])

                //         ]);
                // }),

        ];
    }

    protected function textNotFound(): string
    {
        return __('Không có bản ghi nào được tìm thấy');
    }

    protected function subNotFound(): string
    {
        return '';
    }
}
