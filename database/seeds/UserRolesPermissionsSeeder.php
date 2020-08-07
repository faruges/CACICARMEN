<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class UserRolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //roles
        Permission::create(['name' => 'view_roles']);
        Permission::create(['name' => 'edit_roles']);
        Permission::create(['name' => 'delete_roles']);
        Permission::create(['name' => 'create_roles']);
        
        Permission::create(['name' => 'view_inscripcion']);
        Permission::create(['name' => 'edit_inscripcion']);
        Permission::create(['name' => 'delete_inscripcion']);
        Permission::create(['name' => 'create_inscripcion']);

        Permission::create(['name' => 'view_reinscripcion']);
        Permission::create(['name' => 'edit_reinscripcion']);
        Permission::create(['name' => 'delete_reinscripcion']);
        Permission::create(['name' => 'create_reinscripcion']);

        //users
        /* Permission::create(['name' => 'view_users']);
        Permission::create(['name' => 'create_users']);
        Permission::create(['name' => 'edit_users']);
        Permission::create(['name' => 'delete_users']); */
    }
}
