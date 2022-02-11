<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parents')->insert(
            [
                'id' => 1,
                'user_id' => 4,
                'phone' => '0326333336',
                'address' => '260 Cầu Giấy, Hà Nội',
                'job' => 'Văn Phòng',
                'avatar' => 'avatar.jpg',
            ],
            [
                'id' => 2,
                'user_id' => 5,
                'phone' => '0326333238',
                'address' => '80 Hồ Tùng Mậu, Hà Nội',
                'job' => 'Kỹ sư',
                'avatar' => 'avatar.jpg',
            ],
            [
                'id' => 3,
                'user_id' => 6,
                'phone' => '0326388336',
                'address' => '90 Hoàng Đạo Thúy, Hà Nội',
                'job' => 'Kinh doanh',
                'avatar' => 'avatar.jpg',
            ],
        );
    }
}
