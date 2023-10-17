<?php

namespace App\Orchid\Layouts\Blog;

use App\Models\Setting;
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

            TD::make('id', 'ID')
                ->sort(),

            TD::make('Cài đặt')
                ->sort()
                ->filter(Input::make())
                ->render(
                    fn (Setting $setting) => ModalToggle::make($setting->label)
                        ->modal('modalSettingEdit')
                        ->method('createOrUpdate')
                        ->modalTitle($setting->label)
                        ->asyncParameters([
                            'setting' => $setting->id,
                        ]),
                ),

            TD::make('Khóa cài đặt')
                ->sort()
                ->filter(Input::make())
                ->render(
                    fn (Setting $setting) => ModalToggle::make($setting->key)
                        ->modal('modalSettingEdit')
                        ->method('createOrUpdate')
                        ->modalTitle($setting->key)
                        ->asyncParameters([
                            'setting' => $setting->id,
                        ]),
                ),

            TD::make('Giá trị')
                ->sort()
                ->filter(Input::make())
                ->render(
                    fn (Setting $setting) => ModalToggle::make($setting->value)
                        ->modal('modalSettingEdit')
                        ->method('createOrUpdate')
                        ->modalTitle($setting->label)
                        ->asyncParameters([
                            'setting' => $setting->id,
                        ]),
                ),

            TD::make('attributes', 'Thuộc tính mở rộng')
            ->defaultHidden(),

            TD::make('Actions')
                ->alignRight()
                ->render(function (Setting $setting) {
                    return
                        DropDown::make()
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
