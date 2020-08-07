<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\User;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions_array=[];
        $permissions_array_caci=[];
        
    	array_push($permissions_array, Permission::create(['name' => 'create_users']));
    	array_push($permissions_array, Permission::create(['name' => 'edit_users']));
        array_push($permissions_array, Permission::create(['name' => 'delete_users']));

        array_push($permissions_array, Permission::create(['name' => 'view_roles']));
    	array_push($permissions_array, Permission::create(['name' => 'create_roles']));
    	array_push($permissions_array, Permission::create(['name' => 'edit_roles']));
        array_push($permissions_array, Permission::create(['name' => 'delete_roles']));
        
        //array_push($permissions_array,Permission::create(['name' => 'view_inscripcion']));
        array_push($permissions_array,Permission::create(['name' => 'edit_inscripcion']));
        array_push($permissions_array,Permission::create(['name' => 'delete_inscripcion']));
        array_push($permissions_array,Permission::create(['name' => 'create_inscripcion']));

        //array_push($permissions_array,Permission::create(['name' => 'view_reinscripcion']));
        array_push($permissions_array,Permission::create(['name' => 'edit_reinscripcion']));
        array_push($permissions_array,Permission::create(['name' => 'delete_reinscripcion']));
        array_push($permissions_array,Permission::create(['name' => 'create_reinscripcion']));
        //permisos caci inscr y reinsc
        array_push($permissions_array_caci,Permission::create(['name' => 'view_inscripcion']));
        array_push($permissions_array_caci,Permission::create(['name' => 'view_reinscripcion']));

    	$viewBooksPermission = Permission::create(['name' => 'view_users']);
    	array_push($permissions_array, $viewBooksPermission,$permissions_array_caci);

		$superCaciRole = Role::create(['name' => 'super_caci']);
		$superCaciRole->syncPermissions($permissions_array);

		$caciRole = Role::create(['name' => 'caci']);
		$caciRole->givePermissionTo($viewBooksPermission);
        
        $caciBasico = Role::create(['name' => 'cacibasico']);
		$caciBasico->givePermissionTo($permissions_array_caci);

		$userSuperCaci = User::create([
            'name' => 'supercaci',
            'email' => 'supercaci@gmail.com',
            'password' => Hash::make('supercaci123.,'),
        ]);
        /////////////////////////////////////
        $userSuperCaci->assignRole('super_caci');

        /////////Create User
        $userCaci = User::create([
            'name' => 'caci',
            'email' => 'caci@gmail.com',
            'password' => Hash::make('caci123.,'),
        ]);
        ///////////////////////////////////
        $userCaci->assignRole('caci');
        
        $userCaciLuz = User::create([
            'name' => 'caciluz',
            'email' => 'caciluz@gmail.com',
            'password' => Hash::make('caciluz123.,'),
        ]);
        ///////////////////////////////////
        $userCaciLuz->assignRole('cacibasico');

        $userCaciLuz = User::create([
            'name' => 'cacieva',
            'email' => 'cacieva@gmail.com',
            'password' => Hash::make('cacieva123.,'),
        ]);
        ///////////////////////////////////
        $userCaciLuz->assignRole('cacibasico');

        $userCaciLuz = User::create([
            'name' => 'cacibertha',
            'email' => 'cacibertha@gmail.com',
            'password' => Hash::make('cacibertha123.,'),
        ]);
        ///////////////////////////////////
        $userCaciLuz->assignRole('cacibasico');

        $userCaciLuz = User::create([
            'name' => 'cacicarolina',
            'email' => 'cacicarolina@gmail.com',
            'password' => Hash::make('cacicarolina123.,'),
        ]);
        ///////////////////////////////////
        $userCaciLuz->assignRole('cacibasico');
        
        $userCaciLuz = User::create([
            'name' => 'cacicarmen',
            'email' => 'cacicarmen@gmail.com',
            'password' => Hash::make('cacicarmen123.,'),
        ]);
        ///////////////////////////////////
        $userCaciLuz->assignRole('cacibasico');

        ///////////Create User
        User::create([
            'name' => 'guest',
            'email' => 'guest@gmail.com',
            'password' => Hash::make('guest123.,'),
        ]);


    }
}
