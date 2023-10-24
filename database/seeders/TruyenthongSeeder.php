<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Str;

class TruyenthongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('truyenthongs')->insert([
            'topic_id'        => null,
            'group'           => 'featured',
            'ordering'        => 100,
            'title'           => 'Sáng tạo trên nền tảng kinh nghiêm',
            'description'     => 'Trill Studio với hơn 10 năm kinh nghiệm thiết kế cho nhiều thương hiệu thời trang, cho ra đời nhiều mẫu mã bán chạy sẽ mang đến cho bạn một dich vụ thiết kế chất lượng',
            'route'           => 'blog.topic.',
            'image'           => 'images/truyenthong/truyenthong-default.jpg',
            'color-primary'   => 'primary',
            'color-secondary' => 'secondary',
        ]);
        DB::table('truyenthongs')->insert([
            'topic_id'        => null,
            'group'           => 'featured',
            'ordering'        => 100,
            'title'           => 'Sản xuất từ sưn am hiểu thiết kế và nắm bắt tốt xu hướng',
            'description'     => 'Bạn có đang gặp khó khăn trong việc gắn kết giữa hai mảng Thiết kế và Sản xuất. Đúng vậy, vấn đề nhức nhối thường gặp này sẽ được cải thiện rất nhiều khi tích hợp dich vụ từ Trill Studio',
            'route'           => 'blog.topic.',
            'image'           => 'images/truyenthong/truyenthong-default.jpg',
            'color-primary'   => 'primary',
            'color-secondary' => 'secondary',
        ]);
        DB::table('truyenthongs')->insert([
            'topic_id'        => null,
            'group'           => 'featured',
            'ordering'        => 100,
            'title'           => 'Truyền cảm hứng',
            'description'     => 'Ngoài thời gian tập trung vào chuyên môn thiết kế và nâng cao chất lượng sản xuất để đáp ứng tốt nhu cầu từ khách hàng, Trill còn dành thời gian tổng hợp xu hướng và xuất bản nhiều bài viết về thời trang',
            'route'           => 'blog.topic.',
            'image'           => 'images/truyenthong/truyenthong-default.jpg',
            'color-primary'   => 'primary',
            'color-secondary' => 'secondary',
        ]);

    }
}

