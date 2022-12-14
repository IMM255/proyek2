<?php



namespace Database\Seeders;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use App\Models\User;



class CreateUsersSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        $users = [
            [

               'name'=>'Asesor User',

               'email'=>'asesor@gmail.com',

               'type'=>1,

               'password'=> bcrypt('123456'),

            ],
            [

               'name'=>'admin User',

               'email'=>'admin@gmail.com',

               'type'=> 2,

               'password'=> bcrypt('123456'),

            ],
            [

               'name'=>'asesi',

               'email'=>'asesi@gmail.com',

               'type'=>0,

               'password'=> bcrypt('123456'),

            ],
            [
                'name' => 'managerSertifikasi',

                'email' => 'managerSertifikasi@gmail.com',

                'type' => 3,

                'password' => bcrypt('123456'),
            ]

        ];



        foreach ($users as $key => $user) {

            User::create($user);

        }

    }

}
