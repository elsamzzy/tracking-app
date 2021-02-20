<?php

namespace Database\Seeders;

use App\Models\track;
use Illuminate\Database\Seeder;

class TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        track::factory()
            ->count(10)
            ->create();
    }
}
