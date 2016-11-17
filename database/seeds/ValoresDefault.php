<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ValoresDefault extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('estados')->insert(array(
            'nom_edo'=>'Seleccione un estado',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        \DB::table('ciudads')->insert(array(
            'id_edo'=>'1',
            'nom_cdad'=>'Seleccione una ciudad',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        \DB::table('trabajadors')->insert(array(
            'nom_trab' => 'Sin Asignar',
            'ap_pat' => 'Paterno',
            'ap_mat' => 'Materno',
            'edo_civil' => '1',
            'sexo' => '0',
            'alias' => 'Sin Asignar',
            'fecha_nac' =>date('Y-m-d'),
            'lug_nac' => 'Sin lugar',
            'calle' => 'Sin calle',
            'num_ext' => '000',
            'num_int' => '000',
            'colonia' => 'Sin asignar',
            'estado' => '1',
            'municipio' => 'Sin Municipio',
            'puesto' => 'No Asignado',
            'estatus' => '0',
            'rfc' =>'XXXXXXXXXXXXXXXXX',
            'num_seguro' => '0000000000',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        \DB::table('desarrollos')->insert(array(
            'id_cdad'=>'1',
            'nom_des'=>'Sin calle',
            'tipo'=>'0',
            'unidades'=>'0',
            'responsable'=>'1',
            'editar'=>'0',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        \DB::table('calles')->insert(array(
            'id_des'=>'1',
            'nom_calle'=>'Calle aun no asignada',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        $faker = Faker::create();

        \DB::table('clientes')->insert(array(
            'nombre'=>'Sin Cliente',
            'ap_pat'=> 'Sin Apellido',
            'ap_mat'=> 'Sin Apellido',
            'tel'=> $faker->phoneNumber,
            'correo'=> $faker->email,
            'contra'=> Hash::make('12345'),
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));


        \DB::table('users')->insert(array(
            'name'=>'administrador',
            'email'=> $faker->email,
            'password'=> Hash::make('zavala_09'),
            'remember_token' => str_random(30),
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

    }
}
