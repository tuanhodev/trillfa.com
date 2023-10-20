<header class="nav-bar">
    <div class="nav-bar-container">
        <a href="{{ route('home') }}"
            class="cursor-default flex font-extrabold items-center text-primary-content">
            <img width="32px" src="{{ asset('favicon.svg') }}" alt="">
            <span class="ml-3 text-2xl">{{ config('settings.ten-thuong-hieu') ?? config('app.name')}}</span>
        </a>
        <nav class="nav-bar-menu">
            @foreach($menus as $menu)
            <a href="{{ route('home') }}" class="mr-5 hover:text-secondary flex space-x-2 items-center">
                <x-orchid-icon path="{{ 'bs.' . $menu->icon }}" />
                <label for=""> {{ $menu->name }} </label>
            </a>
            @endforeach
        </nav>
        <div class="hidden tablet:flex justify-end items-center space-x-3">
            <a class="btn-primary">
                <x-orchid-icon path="bs.box-arrow-right" />
                <span class="ml-2"> Đăng nhập </span>
            </a>
        </div>

    </div>
</header>
