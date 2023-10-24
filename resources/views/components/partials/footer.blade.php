<footer class="footer text-base-content">
    <div class="footer-container container mx-auto">

        <div class="footer-body">
            <div class="footer-body-container">

                <div class="search">

                    <div class="input-group relative">
                        <input type="text" name="footer-search" placeholder="Nhập email">
                        <button class="absolute btn-primary">Đăng ký</button>
                    </div>

                    <p class="text-base-content">
                        Đăng ký thành viên để nhận tin khuyến mại từ trill.
                    </p>

                </div>

                <div class="social">
                    <a href="{{ config('settings.youtube') }}" class="text-base-content">
                        <x-orchid-icon path="bs.youtube" width="24px" />
                    </a>
                    <a href="{{ config('settings.facebook') }}" class="text-base-content">
                        <x-orchid-icon path="bs.facebook" width="22px" />
                    </a>
                    <a href="{{ config('settings.pinterest') }}" class="text-base-content">
                        <x-orchid-icon path="bs.pinterest" width="22px" />
                    </a>
                </div>

            </div>
        </div>

        <div class="footer-bar bg-primary">
            <div class="footer-bar-container container mx-auto">
                <p class="text-base-content text-sm text-center">© 2020 {{
                    config('settings.ten-thuong-hieu') }} —
                    <a href="https://github.com/tuanhodev" class="text-base-content" target="_blank"
                        rel="noopener noreferrer">@Anh Tuan Dev
                    </a>
                </p>
            </div>
        </div>

</footer>
