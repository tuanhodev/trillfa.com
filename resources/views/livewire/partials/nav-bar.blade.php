<header class="nav-bar">
    <div class="container mx-auto nav-bar-container">

        <a href="{{ route('home') }}"
            class="nav-bar-brand">
            <img src="{{ asset('images/brand/trill-studio-logo.svg') }}" alt="">
            <span class="ml-3 text-2xl">{{ config('settings.ten-thuong-hieu') ?? config('app.name')}}</span>
        </a>
        <nav class="nav-bar-menu">
            @foreach($menus as $menu)
            <a href="{{ route('home') }}" class="mr-5 hover:text-light-secondary flex space-x-2 items-center">
                <x-orchid-icon path="{{ 'bs.' . $menu->icon }}" />
                <label for=""> {{ $menu->name }} </label>
            </a>
            @endforeach
        </nav>
        <div class="nav-bar-right">
            <a class="btn-outline btn-outline-primary">
                <x-orchid-icon path="bs.box-arrow-right" />
                <span class="ml-2"> Đăng nhập </span>
            </a>
        </div>
        <div class="nav-bar-right-mobile">
            <button class="btn-outline btn-outline-primary toggle-mobile-menu">
                <x-orchid-icon path="bs.list" class="text-primary-content" />
            </button>
        </div>

    </div>
</header>
