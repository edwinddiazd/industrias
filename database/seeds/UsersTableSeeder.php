<?php

use Illuminate\Database\Seeder;

use App\Permission;

use App\Role;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permission::truncate();
        //Role::truncate();
        //User::truncate();
        DB::table('role_user')->delete();
        DB::table('permission_role')->delete();
//creamos un usuario          
  $made = User::create([
        'name' => 'Madeleind Reyes',
        'email' => 'madeleind.reyes@gmail.com',
        'password' => bcrypt('qwerty'),
        'industrias_id'=>'1'
            ]);
  $edwin = User::create([
        'name' => 'Edwin Diaz',
        'email' => 'edwinddiazd@gmail.com',
        'password' => bcrypt('qwerty'),
        'industrias_id'=>'3'        
            ]);
//creamos el role de admin
   $dios = Role::create([
        'name' => 'Dios',
        'display_name' => 'Dios',
        'description' => 'Only one and only admin',
            ]);
   $consulta = Role::create([
        'name' => 'Consulta',
        'display_name' => 'Consulta',
        'description' => 'Solo tiene acceso a las consultas predetermindas de la base de datos',
            ]);
   $mortal = Role::create([
        'name' => 'Mortal',
        'display_name' => 'Mortal',
        'description' => 'Es el usuario de las empresas, solo introduce sus datos y ve la informacion propia',
            ]);
//creamos el permiso del role
   $manage_users = Permission::create([
        'name' => 'manage-users-roles-and-permissions',
        'display_name' => 'Manage Users,Roles and Permissions',
        'description' => 'Can manage users,roles and permission"s',
            ]);
   $view_consultas = Permission::create([
        'name' => 'Visor de Consultas',
        'display_name' => 'Visor de consultas',
        'description' => 'Puede ver las consultas predeterminadas en la base de datos',
            ]);
   $mortals = Permission::create([
        'name' => 'Mortal',
        'display_name' => 'Mortal',
        'description' => 'Este usuario solo puede ingresar datos y ver sus propios datos',
            ]);
//Aqui se adhiere el permiso al role admin
    $dios->attachPermission($manage_users);
    $consulta->attachPermission($view_consultas);
    $mortal->attachPermission($mortals);        

//Aqui se adhiere el role al user
    $made->attachRole($dios);
    $edwin->attachRole($mortal);

    }
}
