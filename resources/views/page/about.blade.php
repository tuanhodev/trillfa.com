{{-- ------- page: /views/pages/about ---------- --}}

<x-layouts.app>

    <x-slot name="pageTitle">
        {{ config('settings.ten-thuong-hieu') . ' | ' . 'Giới thiệu' }}
    </x-slot>


    <article class="about-container container mx-auto">

        <x-breadcrumbs blog="true" collection="true" current="Giới thiệu về trill studio" />

        <header class="cover">

            <div class="img">
                <img src="{{ asset('images/truyenthong/about-cover.jpeg') }}" alt="">
            </div>

            <div class="summary-container">
                <div class="summary">

                    <h2>Trill Studio - Nơi Hòa Quyện Nét Đẹp và Phong Cách</h2>
                    <br />
                    <br />

                    <h3>Trill Studio có phải là một thương hiệu thời trang ?</h3>
                    <p>
                        Đúng vậy! Trill là một thương hiệu thời trang độc đáo và tinh tế,
                        ra đời vào năm 2020 với sứ mệnh mang đến sự tự tin và phong cách cho phái đẹp.
                        Chúng tôi tự hào là nguồn cảm hứng cho những người phụ nữ hiện đại,
                        đề cao vẻ đẹp tự nhiên và sự tự tin trong từng bước di chuyển.
                    </p>
                </div>
            </div>

        </header>

        <div class="about-content-container">

            <div class="about-content">
                <div class="about">

                    <br />
                    <div class="red-trillium">
                        <img src="{{ asset('images/brand/red_trillium.png') }}" alt="">
                    </div>

                    <br />

                    <h3>Tên Thương Hiệu và Biểu Tượng</h3>

                    <p>
                        Tên thương hiệu "Trill Studio" được lấy từ "Trillium Fashion Studio"
                        một loại hoa được biết đến với vẻ đẹp tinh khôi và thanh lịch.
                        Biểu tượng của chúng tôi là một bông hoa Trillium,
                        thể hiện sự tinh tế, nữ tính và sức sống.
                        Mỗi sản phẩm của Trill Studio được thiết kế
                        để phản ánh vẻ đẹp tự nhiên và
                        sức sống của bông hoa này.
                    </p>

                    <br />

                    <h3>Phong Cách Thiết Kế</h3>
                    <p>
                        Chúng tôi tự hào với phong cách thiết kế thanh lịch, nổi bật với sự đơn giản, tinh tế và sang
                        trọng. Mỗi chi tiết của sản phẩm được chọn lựa và chăm chút, tạo nên những bộ trang phục và phụ
                        kiện không chỉ là sản phẩm thời trang mà còn là tác phẩm nghệ thuật. Chúng tôi đặt sự chú trọng
                        vào đường cắt, chất liệu và màu sắc để tạo ra những thiết kế mang đậm phong cách và đẳng cấp.
                    </p>

                    <br />

                    <h3>Duyên Linh - Người Sáng Lập</h3>
                    <p>
                        Duyên Linh (tên thật là Kính Đinh), người sáng lập Trill Studio, là một chuyên gia thời trang
                        tài năng.
                        Cô ấy đã tốt nghiệp chuyên ngành thiết kế thời trang và tích lũy được 12 năm kinh nghiệm quý báu
                        trong ngành. Duyên
                        Linh không chỉ là người sáng tạo mà còn là chuyên gia có nhiều năm kinh nghiệm tư vấn cho nhiều
                        nhà sản xuất thời trang ở TPHCM. Với sự am hiểu chuyên sâu và vững chắc về sản xuất thời
                        trang, Duyên Linh đã định hình nên những ý tưởng độc đáo và chất lượng tại Trill Studio.
                    </p>

                    <br />

                    <h3>Hướng tới Cộng Đồng</h3>
                    <p>
                        Trill Studio không chỉ là một thương hiệu thời trang, mà còn là người bạn đồng hành của cộng
                        đồng. Chúng tôi cam kết dành thời gian tổng hợp xu hướng thời trang và xuất bản nhiều bài viết
                        hữu ích. Chúng tôi mong muốn chia sẻ kiến thức và động viên cộng đồng, giúp mọi người hiểu rõ
                        hơn về thế giới thời trang và phát huy vẻ đẹp tự nhiên của bản thân.
                    </p>

                    <br />

                    <h3>Sứ Mệnh</h3>
                    <p>
                        Chúng tôi tin rằng mỗi người phụ nữ đều là một tác phẩm nghệ thuật và đáng được tôn trọng. Trill
                        Studio cam kết tạo ra những thiết kế thời trang không chỉ là trang phục, mà còn là biểu tượng
                        của sự tự tin và phong cách cá nhân. Chúng tôi hy vọng rằng mỗi sản phẩm của mình có thể giúp
                        phái đẹp tỏa sáng và tỏa ra vẻ đẹp riêng của mình.
                    </p>

                    <br />

                    <h3>Sản Phẩm</h3>
                    <p>
                        Dòng sản phẩm của chúng tôi bao gồm những bộ trang phục, phụ kiện và giày dép, được thiết kế với
                        tình yêu và sự tỉ mỉ. Chúng tôi liên tục cập nhật xu hướng thời trang và sử dụng những chất liệu
                        chất lượng cao để mang đến cho khách hàng những trải nghiệm mua sắm không thể quên.
                    </p>

                    <br />

                    <h3>Hãy Đồng Hành cùng Trill Studio</h3>
                    <p>
                        Nếu bạn đang tìm kiếm sự độc đáo và phong cách trong thế giới thời trang, hãy đến với Trill
                        Studio. Chúng tôi cam kết đưa đến cho bạn những sản phẩm tuyệt vời nhất để bạn luôn tỏa sáng và
                        tự tin mỗi ngày.
                    </p>

                    <br />

                    <p>
                        Trill Studio - Nét Đẹp Tự Tin, Phong Cách Cá Nhân, và Sự Kết Hợp Tuyệt Vời của Văn Hóa Việt Nam!
                    </p>
                </div>
            </div>

            <div class="contact-container">
                <div class="contact">
                    <div class="contact-item">
                        <x-orchid-icon path="bs.geo-alt" />
                        <p>Địa chỉ: {{ config('settings.dia-chi') }}</p>
                    </div>
                    <div class="contact-item">
                        <x-orchid-icon path="bs.envelope" />
                        <p>Email: {{ config('settings.email') }}</p>
                    </div>
                    <div class="contact-item">
                        <x-orchid-icon path="bs.telephone" />
                        <p>SĐT: {{ config('settings.so-dien-thoai') }}</p>
                    </div>
                    <div class="contact-item">
                        <div class="zalo-icon">ZL</div>
                        <p>{{ config('settings.so-dien-thoai') }}</p>
                    </div>
                </div>
            </div>
        </div>

    </article>

    <div class="footer-header"> </div>

</x-layouts.app>
