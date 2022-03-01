<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tutors')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'sex' => 'Nam',
                'birthday' => '1999-11-20',
                'phone' => '0326333232',
                'address' => 'số 20 Cầu Giấy, Hà Nội',
                'job' => 'Sinh Viên',
                'avatar' => 'avatar.jpg',
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'sex' => 'Nữ',
                'birthday' => '2000-11-20',
                'phone' => '0326318888',
                'address' => 'số 23 Huỳnh Thúc Kháng, Hà Nội',
                'job' => 'Sinh Viên',
                'avatar' => 'avatar.jpg',
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'sex' => 'Nữ',
                'birthday' => '1995-08-03',
                'phone' => '0326288883',
                'address' => 'số 33 Phạm Văn Đồng, Hà Nội',
                'job' => 'Giáo Viên',
                'avatar' => 'avatar.jpg',
            ],
        ]);
    }
}
