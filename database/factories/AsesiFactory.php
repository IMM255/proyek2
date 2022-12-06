<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asesi>
 */
class AsesiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'classes_id' => $this->faker->numerify(2),
            'nisn' => $this->faker->unique()->numerify('210######'),
            'name' => $this->faker->firstName." ".$this->faker->lastName,
            'nik' =>  $this->faker->unique()->numerify('310######'),
            'phone' =>  $this->faker->unique()->numerify('08##########'),
            'house_phone' => $this->faker->unique()->numerify('08#########'),
            'tmpt_lahir' => $this->faker->city(),
            'birth_date' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['p','l ']),
            'address' => $this->faker->address(),
            'kode_pos' => $this->faker->numerify('45###'),
            'kebangsaan' => $this->faker->numerify('indonesia'),
            'kualifikasi_pendidikan'  => $this->faker->numerify('SMA'),

        ];
    }
}
