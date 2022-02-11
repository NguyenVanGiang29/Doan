<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('saves')->insert(
            [
                'id' => 1,
                'post_id' => 1,
                'user_id' => 4,
            ],
            [
                'id' => 2,
                'post_id' => 1,
                'user_id' => 5,
            ],
            [
                'id' => 3,
                'post_id' => 1,
                'user_id' => 6,
            ],
        );
    }
}
