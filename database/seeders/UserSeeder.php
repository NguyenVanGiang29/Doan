<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Nguyen Van Giang',
                'email' => 'giang.nv291198@gmail.com',
                'password' => '123456',
            ],
            [
                'id' => 2,
                'name' => 'Nguyen Van Dang',
                'email' => 'dang.nv291198@gmail.com',
                'password' => '123456',
            ],
            [
                'id' => 3,
                'name' => 'Nguyen Van Jang',
                'email' => 'jang.nv291198@gmail.com',
                'password' => '123456',
            ],
            [
                'id' => 4,
                'name' => 'Nguyen Van Yang',
                'email' => 'yang.nv291198@gmail.com',
                'password' => '123456',
            ],
            [
                'id' => 5,
                'name' => 'Nguyen Van Rang',
                'email' => 'rang.nv291198@gmail.com',
                'password' => '123456',
            ],
            [
                'id' => 6,
                'name' => 'Nguyen Van Diang',
                'email' => 'diang.nv291198@gmail.com',
                'password' => '123456',
            ],
        ]);
    }
}
