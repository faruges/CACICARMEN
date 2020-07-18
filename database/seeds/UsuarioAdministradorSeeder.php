<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            'usuario' => 'caci_admin',
            'nombre' => 'Copernico',
            'email' => 'prueba@prueba.com',
            'password' => bcrypt('segura123'),
            'rol_id' => 1,
        ]);
        DB::table('usuario')->insert([
            'usuario' => 'rat',
            'nombre' => 'Roosvelt',
            'email' => 'prueba2@prueba.com',
            'password' => bcrypt('segura123'),
            'rol_id' => 2,
        ]);
    }
}
