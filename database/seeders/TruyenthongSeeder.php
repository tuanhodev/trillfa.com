<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TruyenthongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('truyenthongs')->insert([
            'topic_id'        => null,
            'group'           => 'trangChinh',
            'ordering'        => 0,
            'title'           => 'Trang chính panel 1',
            'description'     => 'Trang chinh description 1',
            'route'           => 'home',
            'image'           => 'images/truyenthong/truyenthong-default.jpg',
            'color-primary'   => 'primary',
            'color-secondary' => 'secondary',
        ]);

        DB::table('truyenthongs')->insert([
            'topic_id'        => null,
            'group'           => 'trangChinh 2',
            'ordering'        => 1,
            'title'           => 'Trang chính panel 2',
            'description'     => 'Trang chinh description 2',
            'route'           => 'home',
            'image'           => 'images/truyenthong/truyenthong-default.jpg',
            'color-primary'   => 'primary',
            'color-secondary' => 'secondary',
        ]);

        DB::table('truyenthongs')->insert([
            'topic_id'        => null,
            'group'           => 'trangChinh 3',
            'ordering'        => 2,
            'title'           => 'Trang chính panel 3',
            'description'     => 'Trang chinh description 3',
            'route'           => 'home',
            'image'           => 'images/truyenthong/truyenthong-default.jpg',
            'color-primary'   => 'primary',
            'color-secondary' => 'secondary',
        ]);

    }
}

