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
        DB::table('tutors')->insert(
            [
                'id' => 1,
                'user_id' => 1,
                'sex' => 'Nam',
                'birthday' => '20/11/1999',
                'phone' => '0326889993',
                'address' => 'số 20 Cầu Giấy, Hà Nội',
                'job' => 'Sinh viên',
                'avatar' => 'avatar.jpg',
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'sex' => 'Nữ',
                'birthday' => '20/11/2000',
                'phone' => '0326885593',
                'address' => 'số 23 Huỳnh Thúc Kháng, Hà Nội',
                'job' => 'Sinh viên',
                'avatar' => 'avatar.jpg',
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'sex' => 'Nữ',
                'birthday' => '03/08/1995',
                'phone' => '0326889993',
                'address' => 'số 33 Phạm Văn Đồng, Hà Nội',
                'job' => 'Giáo viên',
                'avatar' => 'avatar.jpg',
            ],
        );
    }
}
