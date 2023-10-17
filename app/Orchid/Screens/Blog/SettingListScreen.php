<?php

namespace App\Orchid\Screens\Blog;

use App\Http\Requests\SettingRequest;
use Orchid\Screen\Screen;
use App\Orchid\Layouts\Blog\ModalSettingEdit;
use App\Orchid\Layouts\Blog\SettingTable;
use Orchid\Screen\Actions\ModalToggle;
use Illuminate\Support\Facades\Auth;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use App\Models\Setting;

class SettingListScreen extends Screen
{


    public $setting;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Setting $setting): iterable
    {
        return [

            'settings' => Setting::filters()->defaultSort('id')->paginate(10),
            'setting'  => $setting,

        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Trang cài đặt';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [

            ModalToggle::make('Thêm')
                ->canSee(Auth::user()->id = 1)
                ->icon('bs.plus-circle')
                ->modal('modalSettingEdit')
                ->method('createOrUpdate')
                ->modalTitle('Thêm thẻ setting'),
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

            SettingTable::class,

            Layout::modal(
                'modalSettingEdit',
                ModalSettingEdit::class,
            )
                ->async('asyncGetSetting')
                ->title('Thêm cài đặt')
                ->withoutCloseButton()
                ->applyButton('Lưu'),

        ];
    }

    public function asyncGetSetting(Setting $setting)
    {
        return [

            'setting' => $setting,

        ];
    }

    public function createOrUpdate(SettingRequest $request)
    {

        $validated = $request->validated('setting');

        $id = $request->input('setting.id');

        Setting::updateOrCreate(['id' => $id], $validated);

        Toast::info('Thành công');

    }

    public function destroy(Setting $setting)
    {
        $setting->delete();

        Toast::info('Xóa thành công');

    }
}
