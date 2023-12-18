@props(['menus', 'topics'])

<div x-data="navBar()">

    <nav :class="show ? 'right-on-show-slide' : ''" class="navbar">

        <div :class="show ? 'mr-on-show-slide-mobile' : ''" class="container-lg nav-container">

            <!-- Logo -->
            <div class="nav-left">
                <a href="{{ route('home') }}" class="nav-brand">
                    <p class="logo">TS</p>
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
            <!-- Right navbar -->
            <div x-data="{show: false}" class="nav-right">

                <form action="{{ route('search') }}" method="POST" class="search">
                    @csrf
                    <input type="text" name="search" placeholder="Tìm kiếm">
                    <button type="submit"> <x-orchid-icon path="bs.search" width="1.125rem" /> </button>
                </form>

                <div x-cloak x-show="show" class="search-mobile-container">
                    <form @click.outside="show = false" action="{{ route('search') }}" method="POST" class="search-mobile">
                        @csrf
                        <input type="text" name="search" placeholder="Tìm kiếm">
                        <button type="submit"> <x-orchid-icon path="bs.search" width="1.125rem" /> </button>
                    </form>
                </div>

                <button x-cloak x-show="!show" x-transition:enter="rotate-center" @click.prevent="show = true"
                    class="search-mobile-open">
                    <x-orchid-icon path="bs.search" width="1.35rem" />
                </button>

                <div class="switch-theme">
                    <button @click.prevent="switchTheme('dark')" :class="(themeMode == 'dark') ? 'rotate-center' : ''">
                        <x-orchid-icon path="bs.moon-fill" /> </button>
                    <button @click.prevent="switchTheme('light')"
                        :class="(themeMode == 'light') ? 'rotate-center to-sun' : ''">
                        <x-orchid-icon path="bs.sun-fill" />
                    </button>
                </div>

                {{--
                @auth
                <div class="profile relative">
                    <a @click.prevent="showProfile = !showProfile" class="user-avatar">
                        <img src="{{ asset('images/avatar/avatar-default.svg') }}" alt="">
                    </a>
                    <div x-cloak x-show="showProfile" @click.outside="showProfile = false"
                        x-transition.duration.300ms.ease-in-out class="user-info">
                        <p class="text"> <x-orchid-icon path="bs.person" width="1.125rem" /> Uer name </p>
                        <p class="text"> <x-orchid-icon path="bs.telephone" width="1.125rem" /> 0909 989 898 </p>
                        <p class="text"> <x-orchid-icon path="bs.envelope" width="1.125rem" /> user@email.com </p>
                        <button class="profile-action"> <x-orchid-icon path="bs.box-arrow-left" /> Đăng xuất </button>
                    </div>
                </div>
                @else
                <a class="text-primary hover:text-primary"> <x-orchid-icon path="bs.box-arrow-right" /> <span> Đăng nhập
                    </span> </a>
                @endguest
                --}}
            </div>
            <!-- End right nabbar -->
        </div>
        <!-- End navbar container -->
    </nav>

    <!-- Slide bar mobile -->
    <div class="nav-menu-mobile relative" x-cloak x-show="show" @click.outside="toggle('close')"
        x-transition:enter="slide-to-right" x-transition:leave="slide-to-right-leave">

        <div class="nav-open-container">
            <button x-cloak x-show="!show" x-transition:enter="rotate-center" @click.prevent="toggle('open')"
                class="nav-open">
                <x-orchid-icon path="bs.list" heigth="1.65rem" width="auto" />
            </button>
            <button x-cloak x-show="show" x-transition:enter="rotate-center" @click.prevent="toggle('close')"
                class="nav-open">
                <x-orchid-icon path="bs.x-lg" height="1.65rem" width="auto" />
            </button>
        </div>

        <div class="nav-menu-container">
            @foreach($menus as $menu)
            @if($menu->route == 'blog.topic')
            <div class="menu-dropdown">
                <x-nav-link :icon="$menu->icon" :active="Request::is('blog/topic/*')" class="relative"> {{ $menu->name
                    }} </x-nav-link>
                <div class="sub-menu rounded-lg">
                    @foreach($topics as $key => $item)
                    @if($item->children->count())
                    <x-sub-menu :parentTopic="$item" />
                    @endif
                    @endforeach
                </div>
            </div>
            @else
            <x-nav-link href="{{ route($menu->route) }}" :icon="$menu->icon" :active="request()->routeIs($menu->route)">
                {{ $menu->name }}
            </x-nav-link>
            @endif
            @endforeach
        </div>
    </div>

</div>
