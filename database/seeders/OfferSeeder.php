<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offers')->insert(
            [
                'id' => 1,
                'post_id' => 1,
                'user_id' => 1,
            ],
            [
                'id' => 2,
                'post_id' => 1,
                'user_id' => 2,
            ],
            [
                'id' => 3,
                'post_id' => 1,
                'user_id' => 3,
            ],
        );
    }
}
