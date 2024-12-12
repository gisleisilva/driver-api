<?php

namespace Database\Seeders;

use App\Models\DriverLanguages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DriverLanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DriverLanguages::factory()->create();
    }
}
