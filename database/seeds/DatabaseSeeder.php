<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     /* $this->truncateTablas([
            'rol',
            'usuario'
        ]); */
        // $this->call(UserSeeder::class);
        /* $this->call(TablaCaciSeeder::class); */
        //$this->call(TablaRolSeeder::class);
        //$this->call(UsuarioAdministradorSeeder::class);
        //$this->call(UserRolesPermissionsSeeder::class);
        $this->call(PermissionsSeeder::class);
/*         $this->call(TablaInscripcionSeeder::class);
        $this->call(TablaReinscripcionSeeder::class); */
        
    }

    /* protected function truncateTablas(array $tablas)
    {
        //deshabilita las llaves foraneas
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    } */
}
