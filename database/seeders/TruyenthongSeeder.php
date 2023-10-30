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
            'group'           => 'home-banners-1',
            'ordering'        => 10,
            'title'           => 'Trill Studio có những gì',
            'description'     => "
                Trill tập trung cung cấp nhiều dịch vụ chuyên sâu trong lĩnh vực thời trang bao gồm : <br>
                Thiết kế - Sản xuất mẫu theo yêu cầu - Sản xuất theo đơn hàng chất lượng cao - Cấu hình phòng thiết kế mẫu giúp doanh nghiệp giảm gánh nặng vận hành",
            'route'           => 'collections',
            'image'           => 'images/truyenthong/banners-img-default.jpg',
            'color-primary'   => 'primary',
            'color-secondary' => 'secondary',
        ]);
    }
}
