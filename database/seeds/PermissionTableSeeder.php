<?php

use Illuminate\Database\Seeder;

use App\models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
        	[
        		'name' => 'user-list',
        		'display_name' => 'Muestra la lista de usuarios',
        		'description' => 'Ver solo la lista de usuarios'
        	],
        	[
        		'name' => 'user-create',
        		'display_name' => 'Crear un usuario',
        		'description' => 'Crea un nuevo usuario'
        	],
        	[
        		'name' => 'user-edit',
        		'display_name' => 'Editar usuario',
        		'description' => 'Edita un Usuario'
        	],
        	[
        		'name' => 'user-delete',
        		'display_name' => 'Borrar usuario',
        		'description' => 'Borra un usuario'
        	],
        	[
        		'name' => 'industria-list',
        		'display_name' => 'muestra la lista de industrias',
        		'description' => 'ver solo la lista de industrias'
        	],
        	[
        		'name' => 'industria-create',
        		'display_name' => 'crear industria',
        		'description' => 'crea una nueva industria'
        	],
        	[
        		'name' => 'industria-edit',
        		'display_name' => 'editar industria',
        		'description' => 'edita una industria'
        	],
        	[
        		'name' => 'industria-delete',
        		'display_name' => 'borrar industria',
        		'description' => 'borra una industria'
        	],
        	[
        		'name' => 'personal-list',
        		'display_name' => 'muestra la lista de personal',
        		'description' => 'ver solo la lista de personal'
        	],
        	[
        		'name' => 'personal-create',
        		'display_name' => 'crear personal',
        		'description' => 'crea un nuevo personal'
        	],
        	[
        		'name' => 'personal-edit',
        		'display_name' => 'editar personal',
        		'description' => 'edita un personal'
        	],
        	[
        		'name' => 'personal-delete',
        		'display_name' => 'borrar personal',
        		'description' => 'borra un personal'
        	],
        	[
        		'name' => 'productos-list',
        		'display_name' => 'mostrar lista de productos',
        		'description' => 'ver solo la lista de productos'
        	],
        	[
        		'name' => 'productos-create',
        		'display_name' => 'crear producto',
        		'description' => 'crea un producto'
        	],
        	[
        		'name' => 'productos-edit',
        		'display_name' => 'editar producto',
        		'description' => 'edita un producto'
        	],
        	[
        		'name' => 'productos-delete',
        		'display_name' => 'borrar producto',
        		'description' => 'borra un producto'
        	]
        ];

        foreach ($permission as $key => $value) {Permission::create($value);}
	}
}