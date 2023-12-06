<?php

namespace App\Orchid\Layouts\Blog;

use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class SettingTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'settings';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [

            TD::make('label', 'Cài đặt')
                ->sort()
                ->filter(Input::make()),

            TD::make('key', 'Khóa cài đặt')
                ->sort()
                ->filter(Input::make()),

            TD::make('value', 'Giá trị')
                ->width('260px')
                ->sort()
                ->filter(Input::make()),

            TD::make('attributes', 'Thuộc tính mở rộng')
                ->width('200px')
                ->defaultHidden(),

            TD::make('Actions')
                ->alignRight()
                ->render(function (Setting $setting) {
                    return
                        DropDown::make()
                        ->canSee(Auth::user()->id == 1)
                        ->icon('bs.sliders')
                        ->list([
                            ModalToggle::make('Chỉnh sửa')
                                ->icon('bs.pencil-square')
                                ->modal('modalSettingEdit')
                                ->method('createOrUpdate')
                                ->modalTitle($setting->label)
                                ->asyncParameters([
                                    'setting' => $setting->id,
                                ]),
                            Button::make('Xóa')
                                ->icon('bs.trash')
                                ->confirm('Thao tác này sẽ xóa ' . '(' . $setting->label . ')')
                                ->method('destroy', ['setting' => $setting->id])
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
