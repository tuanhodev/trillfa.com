<header x-data="{show: false}" class="nav-bar">
    <div class="container relative mx-auto nav-bar-container">

        <a href="{{ route('home') }}"
            class="nav-bar-brand text-primary">
            <img src="{{ asset('images/brand/trill-studio-logo.svg') }}" alt="">
            <span class="ml-3 text-2xl">{{ config('settings.ten-thuong-hieu') ?? config('app.name')}}</span>
        </a>

        <nav class="nav-bar-menu">
            @foreach($menus as $menu)

                @if($menu->route == 'blog.topic')

                <div class="topic-container">

                    <x-nav-link
                        @click.prevent="show = !show"
                        @mouseover="show = true"
                        :icon="$menu->icon"
                        :active="Request::is('blog/topic/*')"
                        class="relative"
                        > {{ $menu->name }}
                    </x-nav-link>

                    <div
                        x-cloak
                        x-show="show"
                        @click.outside="show = false"
                        x-transition.

                        class="absolute submenu-list-container rounded-lg">
                        <div class="container mx-auto submenu-list">
                            @foreach($topics as $key => $item)
                            <x-sub-menu :parentTopic="$item" />
                            @endforeach
                        </div>
                    </div>

                </div>
                @else
                <x-nav-link class="relative" href="{{ route($menu->route) }}" :icon="$menu->icon" :active="request()->routeIs($menu->route)">
                    {{ $menu->name }}
                </x-nav-link>
                @endif
            @endforeach
        </nav>

        @auth
        <div x-data="{ showProfile: false}" class="nav-bar-right">
            <div class="profile">
                <a @click.prevent="showProfile = !showProfile"
                    class="user-avatar">
                    <img width="24px" src="{{ asset('images/avatar/avatar-default.svg') }}" alt="">
                </a>
                <div
                    x-cloak
                    x-show="showProfile"
                    x-transition
                    @click.outside="showProfile = false"
                    class="user-description absolute rounded-lg flex flex-column fs-base">
                    <span class="text">Xin chào: Uer name</span>
                    <span class="text">Số điện thoại : 0909989898</span>
                    <span class="text">Email: user@email.com</span>
                    <button class="profile-action btn btn-primary fs-base">Đăng xuất<button>
                </div>

            </div>
        </div>
        @else
        <div class="nav-bar-right">
            <a class="text-primary hover:text-primary">
                <x-orchid-icon path="bs.box-arrow-right" />
                <span> Đăng nhập </span>
            </a>
        </div>
        @endguest

        <div class="nav-bar-right-mobile">
            <button class="btn-outline btn-outline-primary toggle-mobile-menu">
                <x-orchid-icon path="bs.list" class="text-primary-content" />
            </button>
        </div>

    </div>

</header>


