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
        
        $superAdmin = Role::create(['name' => 'super_admin']);
        $superAdmin->syncPermissions($permissions_array);
		//$caciRole = Role::create(['name' => 'caci']);
		//$caciRole->givePermissionTo($viewBooksPermission);
        
        $caciLuz = Role::create(['name' => 'caciluz']);
        $caciLuz->givePermissionTo($permissions_array_caci);
        
        $caciEva = Role::create(['name' => 'cacieva']);
        $caciEva->givePermissionTo($permissions_array_caci);
        
        $caciBertha = Role::create(['name' => 'cacibertha']);
        $caciBertha->givePermissionTo($permissions_array_caci);
        
        $caciCarolina = Role::create(['name' => 'cacicarolina']);
        $caciCarolina->givePermissionTo($permissions_array_caci);
        
        $caciCarmen = Role::create(['name' => 'cacicarmen']);
		$caciCarmen->givePermissionTo($permissions_array_caci);

        $userSuperCaci = User::create([
            'name' => 'superadmin',
            'email' => 'caciadministracion@finanzas.cdmx.gob.mx',
            'password' => Hash::make('superadmin123.,'),
            'status' => '1',
        ]);
        /////////////////////////////////////
        $userSuperCaci->assignRole('super_admin');

		$userSuperCaci = User::create([
            'name' => 'supercaci',
            'email' => 'caciadministracion@finanzas.cdmx.gob.mx',
            'password' => Hash::make('supercaci123.,'),
            'status' => '1',
        ]);
        /////////////////////////////////////
        $userSuperCaci->assignRole('super_caci');

        /////////Create User
       /*  $userCaci = User::create([
            'name' => 'caci',
            'email' => 'caci@gmail.com',
            'password' => Hash::make('caci123.,'),
        ]); */
        ///////////////////////////////////
        //$userCaci->assignRole('caci');
        
        $userCaciLuz = User::create([
            'name' => 'caciluz',
            'email' => 'caciluzmariagomez@finanzas.cdmx.gob.mx',
            'password' => Hash::make('caciluz123.,'),
            'status' => '1',
        ]);
        ///////////////////////////////////
        $userCaciLuz->assignRole('caciluz');

        $userCaciEva = User::create([
            'name' => 'cacieva',
            'email' => 'cacievamoreno@finanzas.cdmx.gob.mx',
            'password' => Hash::make('cacieva123.,'),
            'status' => '1',
        ]);
        ///////////////////////////////////
        $userCaciEva->assignRole('cacieva');

        $userCaciBertha = User::create([
            'name' => 'cacibertha',
            'email' => 'caciberthavonglumer@finanzas.cdmx.gob.mx',
            'password' => Hash::make('cacibertha123.,'),
            'status' => '1',
        ]);
        ///////////////////////////////////
        $userCaciBertha->assignRole('cacibertha');

        $userCaciCarolina = User::create([
            'name' => 'cacicarolina',
            'email' => 'cacicarolinaagazzi@finanzas.cdmx.gob.mx',
            'password' => Hash::make('cacicarolina123.,'),
            'status' => '1',
        ]);
        ///////////////////////////////////
        $userCaciCarolina->assignRole('cacicarolina');
        
        $userCaciCarmen = User::create([
            'name' => 'cacicarmen',
            'email' => 'cacicarmenserdan@finanzas.cdmx.gob.mx',
            'password' => Hash::make('cacicarmen123.,'),
            'status' => '1',
        ]);
        ///////////////////////////////////
        $userCaciCarmen->assignRole('cacicarmen');

        ///////////Create User
        User::create([
            'name' => 'guest',
            'email' => 'guest@gmail.com',
            'password' => Hash::make('guest123.,'),
            'status' => '1',
        ]);


    }
}
