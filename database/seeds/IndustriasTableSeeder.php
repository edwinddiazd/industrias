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

        $fake1 = Industrias::create([
        		'industria' => 'Empresas role Dios',
        		'rif_industria' => 'obviamente el rif',
        		'telefono1_industria' => '0424-555-5555',
        		'telefono2_industria' => '0212-555-5555',
        		'direccion_industria' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc vitae augue egestas pellentesque ut et dui. Quisque in sodales eros. Sed id arcu bibendum, lobortis libero in, bibendum magna. Curabitur ac facilisis lorem. Cras id pellentesque lorem.',
        		'tipo_industria' => 'Automotriz',
        	]);
    	$fake2 = Industrias::create([
        		'industria' => 'Empresas role Visor',
        		'rif_industria' => 'obviamente el rif',
        		'telefono1_industria' => '0424-555-5555',
        		'telefono2_industria' => '0424-555-5555',
        		'direccion_industria' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc vitae augue egestas pellentesque ut et dui. Quisque in sodales eros. Sed id arcu bibendum, lobortis libero in, bibendum magna. Curabitur ac facilisis lorem. Cras id pellentesque lorem.',
        		'tipo_industria' => 'Automotriz',
        	]);

        $fake3 = Industrias::create([
                'industria' => 'Empresas role registro',
                'rif_industria' => 'obviamente el rif',
                'telefono1_industria' => '0424-555-5555',
                'telefono2_industria' => '0424-555-5555',
                'direccion_industria' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc vitae augue egestas pellentesque ut et dui. Quisque in sodales eros. Sed id arcu bibendum, lobortis libero in, bibendum magna. Curabitur ac facilisis lorem. Cras id pellentesque lorem.',
                'tipo_industria' => 'Automotriz',
            ]);

        $chery = Industrias::create([
        		'industria' => 'Chery de Venezuela, C.A.',
        		'rif_industria' => 'J123456789',
        		'telefono1_industria' => '0424-555-5555',
        		'telefono2_industria' => '0424-555-5555',
        		'direccion_industria' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc vitae augue egestas pellentesque ut et dui. Quisque in sodales eros. Sed id arcu bibendum, lobortis libero in, bibendum magna. Curabitur ac facilisis lorem. Cras id pellentesque lorem.',
        		'tipo_industria' => 'Automotriz',
        	]);    
        $briqven = Industrias::create([
                'industria' => 'BRIQUETERA DE VENEZUELA, C.A.',
                'rif_industria' => 'J123456789',
                'telefono1_industria' => '0424-555-5555',
                'telefono2_industria' => '0424-555-5555',
                'direccion_industria' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc vitae augue egestas pellentesque ut et dui. Quisque in sodales eros. Sed id arcu bibendum, lobortis libero in, bibendum magna. Curabitur ac facilisis lorem. Cras id pellentesque lorem.',
                'tipo_industria' => 'Ferrominera',
            ]);
        $alunasa = Industrias::create([
                'industria' => 'CVG ALUMINIOS NACIONALES, S. A.',
                'rif_industria' => 'J123456789',
                'telefono1_industria' => '0424-555-5555',
                'telefono2_industria' => '0424-555-5555',
                'direccion_industria' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc vitae augue egestas pellentesque ut et dui. Quisque in sodales eros. Sed id arcu bibendum, lobortis libero in, bibendum magna. Curabitur ac facilisis lorem. Cras id pellentesque lorem.',
                'tipo_industria' => 'Ferrominera',
            ]);
        $ferroco = Industrias::create([
                'industria' => 'CVG FERROMINERA ORINOCO, C. A.',
                'rif_industria' => 'J123456789',
                'telefono1_industria' => '0424-555-5555',
                'telefono2_industria' => '0424-555-5555',
                'direccion_industria' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc vitae augue egestas pellentesque ut et dui. Quisque in sodales eros. Sed id arcu bibendum, lobortis libero in, bibendum magna. Curabitur ac facilisis lorem. Cras id pellentesque lorem.',
                'tipo_industria' => 'Ferrominera',
            ]);
        $alcroni = Industrias::create([
                'industria' => 'CVG ALUMINIO DEL CARONI',
                'rif_industria' => 'J123456789',
                'telefono1_industria' => '0424-555-5555',
                'telefono2_industria' => '0424-555-5555',
                'direccion_industria' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc vitae augue egestas pellentesque ut et dui. Quisque in sodales eros. Sed id arcu bibendum, lobortis libero in, bibendum magna. Curabitur ac facilisis lorem. Cras id pellentesque lorem.',
                'tipo_industria' => 'Ferrominera',
            ]);
        $conacal = Industrias::create([
                'industria' => 'CVGCOMPAÍA NACIONAL DE CAL, S.A.',
                'rif_industria' => 'J123456789',
                'telefono1_industria' => '0424-555-5555',
                'telefono2_industria' => '0424-555-5555',
                'direccion_industria' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc vitae augue egestas pellentesque ut et dui. Quisque in sodales eros. Sed id arcu bibendum, lobortis libero in, bibendum magna. Curabitur ac facilisis lorem. Cras id pellentesque lorem.',
                'tipo_industria' => 'Ferrominera',
            ]);
        $vnzlprod = Industrias::create([
                'industria' => 'EMPRESA DE DISTRIBUCIÓN DE PRODUCTOS E INSUMOS VENEZUELA PRODUCTIVA, C.A.',
                'rif_industria' => 'J123456789',
                'telefono1_industria' => '0424-555-5555',
                'telefono2_industria' => '0424-555-5555',
                'direccion_industria' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc vitae augue egestas pellentesque ut et dui. Quisque in sodales eros. Sed id arcu bibendum, lobortis libero in, bibendum magna. Curabitur ac facilisis lorem. Cras id pellentesque lorem.',
                'tipo_industria' => 'Manufactura Electrónica',
            ]);
        $serlaca = Industrias::create([
                'industria' => 'EMPRESA DE PRODUCCIÓN SOCIAL DE SERVICIO DE LAMINACIÓN DE ALUMINIO, C.A.',
                'rif_industria' => 'J123456789',
                'telefono1_industria' => '0424-555-5555',
                'telefono2_industria' => '0424-555-5555',
                'direccion_industria' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc vitae augue egestas pellentesque ut et dui. Quisque in sodales eros. Sed id arcu bibendum, lobortis libero in, bibendum magna. Curabitur ac facilisis lorem. Cras id pellentesque lorem.',
                'tipo_industria' => 'Ferrominera',
            ]);
        $orinoq = Industrias::create([
                'industria' => 'INDUSTRIA ELECTRÓNICA ORINOQUIA, S.A.',
                'rif_industria' => 'J123456789',
                'telefono1_industria' => '0424-555-5555',
                'telefono2_industria' => '0424-555-5555',
                'direccion_industria' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc vitae augue egestas pellentesque ut et dui. Quisque in sodales eros. Sed id arcu bibendum, lobortis libero in, bibendum magna. Curabitur ac facilisis lorem. Cras id pellentesque lorem.',
                'tipo_industria' => 'Manufactura Electrónica',
            ]);
        $invetex = Industrias::create([
                'industria' => 'INDUSTRIA VENEZOLANA ENDÓGENA TEXTIL, S.A.',
                'rif_industria' => 'J123456789',
                'telefono1_industria' => '0424-555-5555',
                'telefono2_industria' => '0424-555-5555',
                'direccion_industria' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc vitae augue egestas pellentesque ut et dui. Quisque in sodales eros. Sed id arcu bibendum, lobortis libero in, bibendum magna. Curabitur ac facilisis lorem. Cras id pellentesque lorem.',
                'tipo_industria' => 'Manufactura Textil',
            ]);
    }
}
