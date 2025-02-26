<?php

namespace Database\Factories;

use App\Models\MsCabang;
use Illuminate\Database\Eloquent\Factories\Factory;

class MsCabangFactory extends Factory
{
    protected $model = MsCabang::class;

    public function definition(): array
    {
        return [
            'nama_cabang' => $this->faker->company,
            'alamat' => $this->faker->address,
        ];
    }
}
