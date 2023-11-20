<?php

namespace App\Orchid\Screens\Banners;

use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\TextArea;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Fields\Input;
use Illuminate\Http\Request;
use App\Models\Truyenthong;
use Orchid\Screen\Screen;

class TruyenthongEditScreen extends Screen
{

    public $truyenthong;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Truyenthong $truyenthong): iterable
    {
        return [

            'truyenthong' => $truyenthong,

            'truyenthong_id' => $truyenthong->id,

        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->truyenthong->title ?? 'Thêm banners';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [

            Button::make(__('Xóa'))
                ->icon('bs.trash3')
                ->confirm(__('Đang thực hiện xóa banners ?'))
                ->method('destroy')
                ->canSee($this->truyenthong->exists),

            Button::make(__('Lưu'))
                ->icon('bs.check-circle')
                ->method('createOrUpdate'),

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

            Layout::columns([


                Layout::rows([

                    Input::make('truyenthong.title')
                        ->required()
                        ->title('Tiêu đề')
                        ->placeholder('Nhập tiêu đề'),

                    Input::make('truyenthong.route')
                        ->required()
                        ->title('Tên route')
                        ->placeholder('Nhập route'),

                    TextArea::make('truyenthong.description')
                        ->required()
                        ->rows(6)
                        ->title('Mô tả')
                        ->placeholder('Nhập mô tả'),

                    Input::make('truyenthong_id')->hidden(),

                ]),

                Layout::rows([

                    Input::make('truyenthong.ordering')->title('Thứ tự sắp xếp')->required(),

                    Input::make('truyenthong.group')
                        ->required()
                        ->title('Nhóm banners')
                        ->placeholder('Nhập tên group'),

                    Input::make('truyenthon.color_primary')
                        ->title('Màu chính')
                        ->help('Không bắt buộc')
                        ->placeholder('Nhập tên màu'),

                    Input::make('truyenthon.color_sycondary')
                        ->title('Màu phụ')
                        ->help('Không bắt buộc')
                        ->placeholder('Nhập tên màu'),

                    Picture::make('truyenthong.image')
                        ->targetId()
                        ->groups('banners')
                        ->title('Hình ảnh'),

                ])


            ])
        ];
    }

    public function createOrUpdate(Request $request)
    {

        $truyenthong = $request->get('truyenthong');

        Truyenthong::updateOrCreate(['id' => $request->input('truyenthong_id')], $truyenthong);

        Toast::info('Lưu thành công');

        return redirect()->route('truyenthong');
    } 

    public function destroy(Truyenthong $truyenthong)
    {

        $truyenthong->delete();

        Toast::info('Xóa thành công');
    }

}
