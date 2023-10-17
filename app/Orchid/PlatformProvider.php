<?php

declare(strict_types=1);

namespace App\Orchid;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;
use Orchid\Support\Color;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param Dashboard $dashboard
     *
     * @return void
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * Register the application menu.
     *
     * @return Menu[]
     */
    public function menu(): array
    {
        return [

            //Topics
            Menu::make(__('Chuyên mục'))
                ->icon('bs.collection')
                ->route('blog.topics')
                ->title(__('Bài viết')),

            //Topics
            Menu::make(__('Thẻ tag'))
                ->icon('bs.tags')
                ->route('blog.tags'),

            // Posts
            Menu::make(__('Bài viết'))
                ->icon('bs.newspaper')
                ->route('blog.posts'),

            // Users
            Menu::make(__('Users'))
                ->icon('bs.people')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('Access Controls')),

            Menu::make(__('Roles'))
                ->icon('bs.shield')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles')
                ->divider(),

            //settings
            Menu::make('Cài đặt')
                ->icon('bs.gear')
                ->route('atd.settings')
                // ->permission('platform.systems.users')
                ->title(__('Cài đặt')),

            Menu::make('Version')
                ->icon('bs.box-arrow-up-right')
                ->badge(fn () => Dashboard::version(), Color::DARK),


        ];
    }

    /**
     * Register permissions for the application.
     *
     * @return ItemPermission[]
     */
    public function permissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }
}
