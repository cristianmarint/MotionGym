<?php

namespace Database\Seeders;

use App\Models\humans;
use Illuminate\Database\Seeder;

class HumansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Humans::factory()->count(10)->create();
    }
}
