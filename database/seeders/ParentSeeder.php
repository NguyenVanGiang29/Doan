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
        DB::table('parents')->insert([
            [
                'id' => 1,
                'job' => 'Xây Dựng',
                'address' => '260 Cầu Giấy, Hà Nội',
                'phone' => 0326333336,
                'avatar' => 'avatar.jpg',
                'user_id' => 4,
            ],
            [
                'id' => 2,
                'job' => 'Kỹ Sư',
                'address' => '80 Hồ Tùng Mậu, Hà Nội',
                'phone' => 0326333232,
                'avatar' => 'avatar.jpg',
                'user_id' => 5,
            ],
            [
                'id' => 3,
                'job' => 'Văn Phòng',
                'address' => '90 Hoàng Đạo Thúy, Hà Nội',
                'phone' => 0326711121,
                'avatar' => 'avatar.jpg',
                'user_id' => 6,
            ],
        ]);
    }
}
