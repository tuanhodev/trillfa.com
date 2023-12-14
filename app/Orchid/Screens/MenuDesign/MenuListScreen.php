<?php

namespace App\Orchid\Screens\MenuDesign;

// use App\Orchid\Layouts\MenuDesign\ModaliMenuEdit;
// use App\Http\Requests\Blog\MenuRequest;
use App\Orchid\Layouts\MenuDesign\MenuTable;
// use Orchid\Screen\Actions\ModalToggle;
// use Orchid\Support\Facades\Layout;
// use Orchid\Support\Facades\Toast;
use Orchid\Screen\Screen;
use App\Models\MenuDesign;

class MenuListScreen extends Screen
{

    public $menu;

    public $modalActionName;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(MenuDesign $menu): iterable
    {
        return [
            'menus' => MenuDesign::filters()->defaultSort('ordering')->paginate(10),
            'menu'  => $menu,
        ];
    }

    public function __construct(MenuDesign $menu)
    {

        $this->modalActionName = $menu->exists ? 'Chỉnh sửa' : 'Thêm';

    }


    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Quản lý menu';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [

            // ModalToggle::make('Thêm')
            //     ->icon('bs.plus-circle')
            //     ->modal('modalMenuEdit')
            //     ->method('createOrUpdate'),
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

            MenuTable::class,

            // Layout::modal(
            //     'modalMenuEdit',
            //     ModalMenuEdit::class
            // )
            //     ->withoutCloseButton()
            //     ->title($this->modalActionName . ' chuyên mục')
            //     ->applyButton('Được')
            //     ->async('asyncGetMenu')

        ];
    }

    public function asyncGetMenuDesign(MenuDesign $menu): array
    {

        return  [
            'topic' => $menu,
        ];
    }

    // public function createOrUpdate(MenuDesignRequest $request)
    // {

    //     $validated = $request->validated();

    //     $id = $request->input('topic.id');

    //     $slug = $validated['slug'];

    //     $menuData = array_merge(
    //         $validated['topic'],
    //         [
    //             'slug' => $slug,
    //         ]
    //     );

    //     MenuDesign::updateOrCreate([ 'id' => $id ], $menuData );

    //     Toast::info('Thành công');

    // }

    // public function destroy (MenuDesign $menu)
    // {

    //     $menu->delete();

    //     Toast::info('Xóa thành công');

    // }
 }
