<?php

use Illuminate\Database\Seeder;

use App\Sol_Mat;

class SolmatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('solmat')->delete();

        $s1 = Sol_Mat::create ([
        	'industrias_id' => '4',
        	'materias_id' => '1',
        	'productos_id' => '1',
        	'criticidad_producto'=> 'true',
        	'capacidad'=> '500',
        	'solicitud' => '400'

        	]);
        $s2 = Sol_Mat::create ([
        	'industrias_id' => '4',
        	'materias_id' => '3',
        	'productos_id' => '2',
        	'criticidad_producto'=> 'true',
        	'capacidad'=> '180',
        	'solicitud' => '170'

        	]);
        $s3 = Sol_Mat::create ([
        	'industrias_id' => '5',
        	'materias_id' => '1',
        	'productos_id' => '4',
        	'criticidad_producto'=> 'false',
        	'capacidad'=> '200',
        	'solicitud' => '150'

        	]);
        $s4 = Sol_Mat::create ([
        	'industrias_id' => '5',
        	'materias_id' => '3',
        	'productos_id' => '2',
        	'criticidad_producto'=> 'true',
        	'capacidad'=> '1000',
        	'solicitud' => '900'

        	]);
        $s5 = Sol_Mat::create ([
        	'industrias_id' => '6',
        	'materias_id' => '4',
        	'productos_id' => '4',
        	'criticidad_producto'=> 'false',
        	'capacidad'=> '50000',
        	'solicitud' => '475000'

        	]);
        $s6 = Sol_Mat::create ([
        	'industrias_id' => '6',
        	'materias_id' => '2',
        	'productos_id' => '2',
        	'criticidad_producto'=> 'false',
        	'capacidad'=> '25',
        	'solicitud' => '15'

        	]);

    }
}
