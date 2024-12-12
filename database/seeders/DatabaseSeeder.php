<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create();

        $this->call([
            DriverUserSeeder::class,
            DriverAddressSeeder::class,
            DriverExperienceSeeder::class,
            DriverDocumentsSeeder::class,
            DriverChildrenSeeder::class,
            LanguagesSeeder::class,
            DriverLanguagesSeeder::class
        ]);
    }
}
