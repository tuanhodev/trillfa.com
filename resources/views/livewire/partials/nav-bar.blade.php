<header class="bg-light-base-100 text-light-primary-content body-font sticky top-0 z-100">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-extrabold items-center text-light-primary mb-4 md:mb-0">
            <img width="32px" src="{{ asset('favicon.svg') }}" alt="">
            <span class="ml-3 text-2xl">{{ config('settings.ten-thuong-hieu') ?? config('app.name')}}</span>
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-light-primary-content justify-center">
            <a class="mr-5 hover:text-light-secondary flex space-x-2 items-center">
                <x-orchid-icon path="bs.house" />
                <label for=""> Trang chính </label>
            </a>
            <a class="mr-5 hover:text-light-secondary flex space-x-2 items-center">
                <x-orchid-icon path="bs.collection" />
                <label for=""> Chuyên mục </label>
            </a>
            <a class="mr-5 hover:text-light-secondary flex space-x-2 items-center">
                <x-orchid-icon path="bs.person-vcard" />
                <label for=""> Giới thiệu </label>
            </a>
        </nav>
        <button
            <a class="mr-5 hover:text-light-secondary flex space-x-2 items-center">
                <x-orchid-icon path="bs.box-arrow-right" />
                <label for=""> Đăng nhập </label>
            </a>
        </button>
    </div>
</header>
