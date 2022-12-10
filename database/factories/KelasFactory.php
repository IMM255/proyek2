<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classes>
 */
class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nama_kelas = [
            "XII RPL A",
            "XII RPL B"
        ];

        return [
            'nama_kelas' => $this->faker->unique()->randomElement($nama_kelas),
            'jumlah_siswa' => 30,

        ];
    }
}
