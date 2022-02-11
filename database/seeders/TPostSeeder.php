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
                'post_id' => 1,
                'tutor_id' => 1,
                'subject' => 'Toán, Lý',
                'class' => '10, 11',
                'achievement' => 'Giải nhất Toán Tỉnh Cấp 3',
                'method' => 'online',
                'price' => '150',
                'desc' => 'Dạy học với cả tâm huyết của mình, mong muốn các em có được kết quả học tập tốt hơn.'
            ],
            [
                'id' => 2,
                'post_id' => 2,
                'tutor_id' => 2,
                'subject' => 'Văn',
                'class' => '10, 11',
                'achievement' => 'Giải nhất Văn Tỉnh Cấp 3',
                'method' => 'offline',
                'price' => '200',
                'desc' => 'Dạy học với cả tâm huyết của mình, mong muốn các em có được kết quả học tập tốt hơn.'
            ],
        );
    }
}
