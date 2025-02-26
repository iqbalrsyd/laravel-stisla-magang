<?php

namespace Database\Factories;

use App\Models\MsCabang;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DT_Penjualan>
 */
class DtPenjualanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'refid_cabang' => MsCabang::inRandomOrder()->first()->id ?? MsCabang::factory(),
            'nominal' => $this->faker->randomFloat(2, 10000, 1000000),
        ];
    }
}
