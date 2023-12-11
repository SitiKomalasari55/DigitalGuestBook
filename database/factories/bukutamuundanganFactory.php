<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BukuTamuUndangan>
 */
class bukutamuundanganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'   => $this->faker->name(),
            'notelepon'  => $this->faker->phoneNumber(),
            'alamat' => $this->faker->streetAddress(100),
            'email' => $this->faker->email(100)
        ];
    }
}
