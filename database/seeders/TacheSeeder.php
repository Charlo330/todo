<?php

namespace Database\Seeders;

use App\Models\Tache;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TacheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tache::factory()
            ->count(20)
            ->create();
    }
}
