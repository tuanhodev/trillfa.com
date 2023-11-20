<?php

namespace App\Orchid\Screens\Banners;

use App\Orchid\Layouts\Banners\TruyenthongTable;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Link;
use App\Models\Truyenthong;
use Orchid\Screen\Screen;
// use Orchid\Support\Facades\Layout;

class TruyenthongListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [

            'truyenthongs' => Truyenthong::filters()->defaultSort('group')->paginate(10),

        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Quản lý banners';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [

            Link::make('Thêm')
                ->icon('bs.plus-circle')
                ->route('truyenthong.create'),

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

            TruyenthongTable::class,

        ];
    }

    public function destroy(Truyenthong $truyenthong)
    {

        $truyenthong->delete();

        Toast::info('Xóa thành công');
    }

}
