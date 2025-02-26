<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DtPenjualan;

class DTPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DtPenjualan::factory(10)->create();
    }
}
