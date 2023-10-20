<footer class="text-base-content">
    <div class="container px-5 py-24 mx-auto">

        <div class="border-t border-gray-200">
            <div class="container px-5 py-8 flex flex-wrap mx-auto items-center">
                <div class="flex md:flex-nowrap flex-wrap justify-center items-end md:justify-start">
                    <div class="relative sm:w-64 w-40 sm:mr-4 mr-2">
                        <input type="text" id="footer-field" name="footer-field"
                            class="w-full bg-base bg-opacity-50 rounded border border-gray-300 focus:ring-2 focus:bg-transparent focus:ring-yellow-200 focus:border-yellow-500 text-base outline-none text-base-content py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <button class="btn-primary">Button</button>
                    <p class="text-base-content text-sm md:ml-6 md:mt-0 mt-2 sm:text-left text-center">
                        Đừng bỏ lỡ tin mới tư Trill Studio
                        <br class="lg:block hidden">Đăng ký thành viên để nhận tin sớm.
                    </p>
                </div>
                <span
                    class="inline-flex space-x-6 lg:ml-auto lg:mt-0 mt-6 w-full justify-center md:justify-start md:w-auto">
                    <a href="{{ config('settings.youtube') }}" class="text-base-content">
                        <x-orchid-icon path="bs.youtube" width="24px" />
                    </a>
                    <a href="{{ config('settings.facebook') }}" class="text-base-content">
                        <x-orchid-icon path="bs.facebook" width="22px" />
                    </a>
                    <a href="{{ config('settings.pinterest') }}" class="text-base-content">
                        <x-orchid-icon path="bs.pinterest" width="22px" />
                    </a>
                </span>
            </div>
        </div>
        <div class="bg-base">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-base-content text-sm text-center sm:text-left">© 2020 {{
                    config('settings.ten-thuong-hieu') }} —
                    <a href="https://github.com/tuanhodev" class="text-base-content ml-1" target="_blank"
                        rel="noopener noreferrer">@Anh Tuan Dev
                    </a>
                </p>
            </div>
        </div>
</footer>
