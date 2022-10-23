<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peserta>
 */
class PesertaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'tempat_lahir' => $this->faker->city(),
            'tgl_lahir' => $this->faker->date(),
            'jk' => rand(1,2),
            'alamat' => $this->faker->city(),
            'telepon' =>$this->faker->unique()->numerify('852########'),
        ];
    }
}
