<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('p_posts')->insert(
            [
               'id' => 1,
               'post_id' => 3,
               'parent_id' => 1,
               'subject' => 'Toán',
               'class' => '12',
               'location' => '260 Cầu Giấy',
               'method' => 'offline',
               'price' => 200,
               'time' => 'chiều 2, chiều 5',
               'session' => '',
               'desc' => 'Ưu tiên sinh viên Bách Khoa, Quốc Gia'
            ],
            [
                'id' => 2,
                'post_id' => 4,
                'parent_id' => 2,
                'subject' => 'Anh',
                'class' => '10',
                'location' => '66 Hồ Tùng Mậu',
                'method' => 'online',
                'price' => 300,
                'time' => 'chiều 3, tối 5',
                'session' => '',
                'desc' => 'Ưu tiên sinh viên Ngoại ngữ, Đh Hà Nội'
             ],
        );
    }
}
