<?php

namespace Database\Seeders;

use App\Models\Offer;
use App\Models\Save;
use App\Models\Tutor;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // UserSeeder::class,
            TutorSeeder::class,
            ParentSeeder::class,
            PostSeeder::class,
            TPostSeeder::class,
            PPostSeeder::class,
            OfferSeeder::class,
            SaveSeeder::class,
        ]);
    }
}
