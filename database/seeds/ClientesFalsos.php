<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClientesFalsos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            $faker = Faker::create();
            \DB::table('clientes')->insert(array(
                'nombre'=>$faker->name,
                'ap_pat'=> $faker->lastName,
                'ap_mat'=>$faker->lastName,
                'tel'=>$faker->phoneNumber,
                'correo'=>$correo = $faker->email,
                'usuario'=>$user = $faker->userName,
                'contra'=> $contra = Hash::make('12345'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));
/*for ($i=0;$i<50;$i++)
        {
            \DB::table('users')->insert(array(
                'name'=> $user,
                'email'=>$correo,
                'password' =>$contra,
                'remember_token' => str_random(50),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));
        }*/

        $faker = Faker::create();

        \DB::table('usuarios')->insert(array(
            'name'=> 'reikko',
            'email'=>$faker->email,
            'password' => Hash::make('zavala_09'),
            'remember_token' => str_random(80),
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        /*\DB::table('users')->insert(array(
            'name'=>'administrador',
            'email'=> $faker->email,
            'password'=> Hash::make('zavala_09'),
            'remember_token' => str_random(30),
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));*/
    }
}
