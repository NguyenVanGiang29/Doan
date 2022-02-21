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
               'subject' => 'Toán',
               'topic' => 'Cấp 3',
               'class' => '12',
               'time' => '2',
               'method' => 'offline',
               'price' => 200,
               'phone' => '0326700008',
               'location' => '260 Cầu Giấy',
               'desc' => 'Ưu tiên sinh viên Bách Khoa, Quốc Gia',
               'number_lesson' => '2',
               'time_teaching' => 'Tối thứ 2, Tối thứ 6',
               'parent_id' => 1,
            ],
            [
                'id' => 2,
                'subject' => 'Lý',
                'topic' => 'Cấp 2',
                'class' => '8',
                'time' => '1,5',
                'method' => 'online',
                'price' => 180,
                'phone' => '0326800008',
                'location' => '280 Cầu Giấy',
                'desc' => 'Ưu tiên sinh viên Bách Khoa, Quốc Gia',
                'number_lesson' => '3',
                'time_teaching' => 'Tối thứ 2, Tối thứ 6, Sáng chủ nhật',
                'parent_id' => 2,
             ],
             [
                'id' => 3,
                'subject' => 'Anh',
                'topic' => 'Cấp 3',
                'class' => '12',
                'time' => '2',
                'method' => 'online',
                'price' => 250,
                'phone' => '0336800008',
                'location' => '300 Cầu Giấy',
                'desc' => 'Ưu tiên sinh viên Ngoại ngữ',
                'number_lesson' => '3',
                'time_teaching' => 'Tối thứ 2, Tối thứ 7, Chiều chủ nhật',
                'parent_id' => 1,
             ],
             [
                'id' => 4,
                'subject' => 'Văn',
                'topic' => 'Cấp 1',
                'class' => '2',
                'time' => '2',
                'method' => 'offline',
                'price' => 200,
                'phone' => '0335800008',
                'location' => '280 Hồ Tùng Mậu',
                'desc' => 'Yêu cầu yêu thương trẻ con',
                'number_lesson' => '2',
                'time_teaching' => 'Tối thứ 3, Tối thứ 7',
                'parent_id' => 3,
             ],
            
        );
    }
}
