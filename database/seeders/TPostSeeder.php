<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_posts')->insert(
            [
                'id' => 1,
                'phone' => 0326700006,
                'method' => 'online',
                'subject' => 'Toán',
                'topic' => 'Ôn học sinh giỏi',
                'class' => '10',
                'price' => '150',
                'time_teaching' => 'Chiều 2, Tối 4',
                'desc' => 'Dạy học với cả tâm huyết của mình, mong muốn các em có được kết quả học tập tốt hơn.',
                'achievement' => 'Giải nhất Toán Tỉnh Cấp 3',
                'experience' => 'Dạy 5 năm ôn thi hsg',
                'tutor_id' => 1,
            ],
            [
                'id' => 2,
                'phone' => 0326611116,
                'method' => 'offline',
                'subject' => 'Văn',
                'topic' => 'Ôn học sinh giỏi',
                'class' => '10',
                'price' => '150',
                'time_teaching' => 'Chiều 2, Tối 4',
                'desc' => 'Dạy học với cả tâm huyết của mình, mong muốn các em có được kết quả học tập tốt hơn.',
                'achievement' => 'Giải nhất Văn Tỉnh Cấp 3',
                'experience' => 'Dạy 5 năm ôn thi hsg môn văn',
                'tutor_id' => 1,
            ],
            [
                'id' => 3,
                'phone' => 0326661116,
                'method' => 'offline',
                'subject' => 'Anh',
                'topic' => 'Chương trình trên lớp',
                'class' => '10',
                'price' => '250',
                'time_teaching' => 'Chiều 5, Tối 7',
                'desc' => 'Dạy học với cả tâm huyết của mình, mong muốn các em có được kết quả học tập tốt hơn.',
                'achievement' => 'Giải nhất Anh Tỉnh Cấp 3',
                'experience' => 'Dạy 5 năm ôn thi hsg môn Anh',
                'tutor_id' => 2,
            ],
            [
                'id' => 4,
                'phone' => 0326661113,
                'method' => 'online',
                'subject' => 'Anh',
                'topic' => 'Chương trình trên lớp',
                'class' => '12',
                'price' => '500',
                'time_teaching' => 'Chiều 5, Sáng 7',
                'desc' => 'Dạy học với cả tâm huyết của mình, mong muốn các em có được kết quả học tập tốt hơn.',
                'achievement' => 'Giải nhất Anh Tỉnh Cấp 3',
                'experience' => 'Dạy 5 năm ôn thi hsg môn Anh',
                'tutor_id' => 3,
            ],
        );
    }
}
