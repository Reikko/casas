<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('RolesDefault');
        $this->call('ValoresDefault');
        $this->call('CuotasCasa');
        $this->call('InquilinoFalso');
        $this->call('TrabajadorFalso');
        $this->call('DefaultDefectos');
        $this->call('DatosDestajos');

    }
}
