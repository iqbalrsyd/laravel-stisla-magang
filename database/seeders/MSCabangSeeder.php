<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MsCabang;

class MSCabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MsCabang::factory(10)->create();
    }
}
