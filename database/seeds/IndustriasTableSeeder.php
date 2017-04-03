<?php

use Illuminate\Database\Seeder;
use App\Industrias;

class IndustriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('industrias')->delete();

        // esta es la forma en la que vas a meter los datos de las industrias, lo ladilla va a ser las variables, trata de ponerle nombre alusivos a la industria y q sean cortos

        $chery = Industrias::create([
        		'industria' => 'Nombre de la empresa',
        		'rif_industria' => 'obviamente el rif',
        		'telefono1_industria' => 'telefono',
        		'telefono2_industria' => 'telefono',
        		'direccion_industria' => 'direccion',
        		'tipo_industria' => 'tipo de industria',
        	]);
    }
}
