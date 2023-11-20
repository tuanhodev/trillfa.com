<?php

namespace App\Orchid\Layouts\Banners;

use Illuminate\Support\Facades\Auth;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\Link;
use App\Models\Truyenthong;
use Orchid\Screen\TD;

class TruyenthongTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'truyenthongs';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [

            TD::make('ordering', 'Sắp xếp')
                ->width('132px')
                ->sort()
                ->render(fn (Truyenthong $truyenthong) => view('components.platform.render-image-in-table', ['post' => $truyenthong])),

            TD::make('title', 'Tiêu Đề')
                ->filter()
                ->render(fn (Truyenthong $truyenthong) => Link::make($truyenthong->title)->route('truyenthong.edit', $truyenthong)),

            TD::make('group', 'Group')
                ->filter()
                ->sort(),

            TD::make('route', 'Route')
                ->filter(),

            TD::make('Thao tác')
                ->width('120px')
                ->alignRight()
                ->render(function (Truyenthong $truyenthong) {
                    return
                        DropDown::make()
                        ->icon('bs.sliders')
                        ->list([

                            Link::make('Chỉnh sửa')
                                ->route('truyenthong.edit', $truyenthong)
                                ->icon('bs.pencil-square'),

                            Button::make('Xóa')
                                ->confirm('Thao tác này sẽ xóa ' . $truyenthong->title)
                                ->method('destroy', ['truyenthong' => $truyenthong->id])
                                ->icon('bs.trash'),

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
