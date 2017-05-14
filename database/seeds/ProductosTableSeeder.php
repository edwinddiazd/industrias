<?php

use Illuminate\Database\Seeder;

use App\Productos;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->delete();

        $prod1 = Productos::create([
        	'producto' => 'Lavaplatos',
        	'tipo_producto' => 'Semi-Terminado',
        	'unidad_producto' => 'cajas 24 unidades',
        	'descripcion_producto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc vitae augue egestas pellentesque ut et dui. Quisque in sodales eros. Sed id arcu bibendum, lobortis libero in, bibendum magna. Curabitur ac facilisis lorem. Cras id pellentesque lorem. Aliquam erat volutpat. Donec nec viverra felis. Phasellus faucibus erat eget tortor eleifend, vel bibendum libero sagittis. Sed tellus enim, accumsan ac convallis vel, facilisis vitae massa. Cras consequat aliquam odio non viverra. Morbi commodo est ante, eu scelerisque neque faucibus sed. Pellentesque ipsum turpis, pellentesque sagittis porttitor sed, pretium vitae justo. Donec rutrum nibh ac erat ullamcorper feugiat. Etiam iaculis tortor a euismod tincidunt. Etiam convallis vitae erat nec luctus. Nullam eleifend ante eget diam ornare euismod. Aliquam aliquam ac mi nec malesuada. Suspendisse rhoncus nisi dolor, at lobortis enim condimentum eget. Duis non metus laoreet, cursus ex in, semper enim. Duis malesuada congue volutpat. Maecenas fermentum turpis eu iaculis congue. Curabitur erat neque, laoreet ut orci ut, pharetra egestas massa. Aenean imperdiet nibh nec mollis laoreet. Fusce tempor lorem quam, in sodales velit ullamcorper eget. ',
        	]);
        $prod2 = Productos::create([
        	'producto' => 'Servilletas',
        	'tipo_producto' => 'Terminado',
        	'unidad_producto' => 'cajas 24 unidades',
        	'descripcion_producto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc vitae augue egestas pellentesque ut et dui. Quisque in sodales eros. Sed id arcu bibendum, lobortis libero in, bibendum magna. Curabitur ac facilisis lorem. Cras id pellentesque lorem. Aliquam erat volutpat. Donec nec viverra felis. Phasellus faucibus erat eget tortor eleifend, vel bibendum libero sagittis. Sed tellus enim, accumsan ac convallis vel, facilisis vitae massa. Cras consequat aliquam odio non viverra. Morbi commodo est ante, eu scelerisque neque faucibus sed. Pellentesque ipsum turpis, pellentesque sagittis porttitor sed, pretium vitae justo. Donec rutrum nibh ac erat ullamcorper feugiat. Etiam iaculis tortor a euismod tincidunt. Etiam convallis vitae erat nec luctus. Nullam eleifend ante eget diam ornare euismod. Aliquam aliquam ac mi nec malesuada. Suspendisse rhoncus nisi dolor, at lobortis enim condimentum eget. Duis non metus laoreet, cursus ex in, semper enim. Duis malesuada congue volutpat. Maecenas fermentum turpis eu iaculis congue. Curabitur erat neque, laoreet ut orci ut, pharetra egestas massa. Aenean imperdiet nibh nec mollis laoreet. Fusce tempor lorem quam, in sodales velit ullamcorper eget. ',
        	]);
            $prod3 = Productos::create([
        	'producto' => 'Sillas de Madera',
        	'tipo_producto' => 'Sub-Producto',
        	'unidad_producto' => '4 unidades',
        	'descripcion_producto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc vitae augue egestas pellentesque ut et dui. Quisque in sodales eros. Sed id arcu bibendum, lobortis libero in, bibendum magna. Curabitur ac facilisis lorem. Cras id pellentesque lorem. Aliquam erat volutpat. Donec nec viverra felis. Phasellus faucibus erat eget tortor eleifend, vel bibendum libero sagittis. Sed tellus enim, accumsan ac convallis vel, facilisis vitae massa. Cras consequat aliquam odio non viverra. Morbi commodo est ante, eu scelerisque neque faucibus sed. Pellentesque ipsum turpis, pellentesque sagittis porttitor sed, pretium vitae justo. Donec rutrum nibh ac erat ullamcorper feugiat. Etiam iaculis tortor a euismod tincidunt. Etiam convallis vitae erat nec luctus. Nullam eleifend ante eget diam ornare euismod. Aliquam aliquam ac mi nec malesuada. Suspendisse rhoncus nisi dolor, at lobortis enim condimentum eget. Duis non metus laoreet, cursus ex in, semper enim. Duis malesuada congue volutpat. Maecenas fermentum turpis eu iaculis congue. Curabitur erat neque, laoreet ut orci ut, pharetra egestas massa. Aenean imperdiet nibh nec mollis laoreet. Fusce tempor lorem quam, in sodales velit ullamcorper eget. ',
        	]);
        	$prod4 = Productos::create([
        	'producto' => 'Uniformes',
        	'tipo_producto' => 'Semi-Terminado',
        	'unidad_producto' => '3 piezas',
        	'descripcion_producto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc vitae augue egestas pellentesque ut et dui. Quisque in sodales eros. Sed id arcu bibendum, lobortis libero in, bibendum magna. Curabitur ac facilisis lorem. Cras id pellentesque lorem. Aliquam erat volutpat. Donec nec viverra felis. Phasellus faucibus erat eget tortor eleifend, vel bibendum libero sagittis. Sed tellus enim, accumsan ac convallis vel, facilisis vitae massa. Cras consequat aliquam odio non viverra. Morbi commodo est ante, eu scelerisque neque faucibus sed. Pellentesque ipsum turpis, pellentesque sagittis porttitor sed, pretium vitae justo. Donec rutrum nibh ac erat ullamcorper feugiat. Etiam iaculis tortor a euismod tincidunt. Etiam convallis vitae erat nec luctus. Nullam eleifend ante eget diam ornare euismod. Aliquam aliquam ac mi nec malesuada. Suspendisse rhoncus nisi dolor, at lobortis enim condimentum eget. Duis non metus laoreet, cursus ex in, semper enim. Duis malesuada congue volutpat. Maecenas fermentum turpis eu iaculis congue. Curabitur erat neque, laoreet ut orci ut, pharetra egestas massa. Aenean imperdiet nibh nec mollis laoreet. Fusce tempor lorem quam, in sodales velit ullamcorper eget. ',
        	]);
    }
}
