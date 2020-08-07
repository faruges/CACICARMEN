<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class InsReinPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	///inscripcion
        Permission::create(['name' => 'view_inscripcion']);

        /////reinscripcion
        Permission::create(['name' => 'view_reinscripcion']);
    }
}
