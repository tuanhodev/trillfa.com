<div x-data="navBar()">
    <nav class="navbar">
        <div class="relative container-lg nav-container">
            <!-- Logo -->
            <div class="nav-left">
                <a href="{{ route('home') }}" class="relative nav-brand">
                    <img src="{{ asset('images/brand/trill-studio-logo.svg') }}" alt="">
                    <h1>{{ config('settings.ten-thuong-hieu') ?? config('app.name')}}</h1>
                </a>
                <button x-cloak x-show="!show" x-transition:enter="rotate-center" @click.prevent="toggle('open')"
                    class="nav-open">
                    <x-orchid-icon path="bs.list" width="1.5rem" />
                </button>
                <button x-cloak x-show="show" x-transition:enter="rotate-center" @click.prevent="toggle('close')"
                    class="nav-open">
                    <x-orchid-icon path="bs.x-lg" width="1.35rem" />
                </button>
            </div>
            <!-- Navbar menu center -->
            <div class="nav-menu-desktop">
                <div class="menu-desktop-container">
                    @foreach($menus as $menu)
                    @if($menu->route == 'blog.topic')
                        <x-nav-link :icon="$menu->icon" :active="Request::is('blog/topic/*')" class="relative"> {{ $menu->name }} </x-nav-link>
                    @else
                    <x-nav-link class="relative" href="{{ route($menu->route) }}" :icon="$menu->icon" :active="request()->routeIs($menu->route)">
                        {{ $menu->name }}
                    </x-nav-link>
                    @endif
                    @endforeach

                </div> 
            </div>
            <!-- Slide bar mobile -->
            <div class="nav-menu-mobile" x-cloak x-show="show" @click.outside="toggle('close')"
                x-transition:enter="slide-to-right" x-transition:leave="slide-to-right-leave">
                <div class="nav-menu-container">
                    @foreach($menus as $menu)
                    @if($menu->route == 'blog.topic')
                    <div class="menu-dropdown">
                        <x-nav-link :icon="$menu->icon" :active="Request::is('blog/topic/*')" class="relative"> {{ $menu->name }} </x-nav-link>
                        <div class="sub-menu rounded-lg">
                            @foreach($topics as $key => $item)
                            @if($item->children->count())
                            <x-sub-menu :parentTopic="$item" />
                            @endif
                            @endforeach
                        </div>
                    </div>
                    @else
                    <x-nav-link class="relative" href="{{ route($menu->route) }}" :icon="$menu->icon" :active="request()->routeIs($menu->route)">
                        {{ $menu->name }}
                    </x-nav-link>
                    @endif
                    @endforeach
                </div>
            </div>
            <!-- Right navbar -->
            @auth
            <div class="nav-right">
                <div class="profile relative">
                    <a @click.prevent="showProfile = !showProfile" class="user-avatar">
                        <img src="{{ asset('images/avatar/avatar-default.svg') }}" alt="">
                    </a>
                    <div x-cloak x-show="showProfile" x-transition.duration.300ms.ease-in-out class="user-info">
                        <span class="text">Xin chào: Uer name</span>
                        <span class="text">Số điện thoại : 0909989898</span>
                        <span class="text">Email: user@email.com</span>
                        <button class="profile-action btn btn-primary fs-base">Đăng xuất<button>
                    </div>
                </div>
            </div>
            @else
            <div class="nav-right">
                <a class="text-primary hover:text-primary">
                    <x-orchid-icon path="bs.box-arrow-right" />
                    <span> Đăng nhập </span>
                </a>
            </div>
            @endguest
            <!-- End right nabbar -->
        </div>
        <!-- End navbar container -->
    </nav>
</div>
