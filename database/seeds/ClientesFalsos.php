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
            'ap_pat'=>$faker->lastName,
            'ap_mat'=>$faker->lastName,
            'tel'=>$faker->phoneNumber,
            'correo'=>$faker->email,
            'usuario'=>$faker->userName,
            'contra'=> Hash::make('12345'),
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
    }
}
