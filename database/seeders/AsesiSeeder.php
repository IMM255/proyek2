<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Asesi;
use Faker\Factory as Faker;


class AsesiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Asesi::Factory()->count(30)->create();


        // $faker = Faker::create('id_ID');

        // for ($i=0; $i < 30; $i++) {
        // Asesi::create([
        //     'class_id' => $faker->numerify(1),
        //     'nisn' => $faker->unique()->numerify('210######'),
        //     'name' => $faker->firstName." ".$faker->lastName,
        //     'nik' =>  $faker->unique()->numerify('310######'),
        //     'phone' =>  $faker->unique()->numerify('08##########'),
        //     'house_phone' => $faker->unique()->numerify('08#########'),
        //     'tmpt_lahir' => $faker->city(),
        //     'birth_date' => $faker->date(),
        //     'gender' => $faker->randomElement(['p','l ']),
        //     'address' => $faker->address(),
        //     'kode_pos' => $faker->numerify('45###'),
        //     'kebangsaan' => $faker->numerify('indonesia'),
        //     'kualifikasi_pendidikan'  => $faker->numerify('SMA'),
        //         ]
        //     );
        }
    }
// }
