<?php

use Illuminate\Database\Seeder;

use App\Personal;

class PersonalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personal')->delete();
        $pp = Personal::create ([
        	'industrias_id' => '4',
        	'cargo_personal' => 'Presidente',
        	'nombre_personal' => 'Kyle',
        	'apellido_personal' => 'Katarn',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'jcanseco@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']);

        $p1 = Personal::create ([
        	'industrias_id' => '4',
        	'cargo_personal' => 'Encargado Ventas',
        	'nombre_personal' => 'Master',
        	'apellido_personal' => 'Yoda',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'myoda@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p2 = Personal::create ([
        	'industrias_id' => '4',
        	'cargo_personal' => 'Encargado Compras',
        	'nombre_personal' => 'Syfo',
        	'apellido_personal' => 'Dyas',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'sdyas@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p3 = Personal::create ([
        	'industrias_id' => '4',
        	'cargo_personal' => 'Encargado Juridico',
        	'nombre_personal' => 'Qui-Gon',
        	'apellido_personal' => 'Jin',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'qjin@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p4 = Personal::create ([
        	'industrias_id' => '4',
        	'cargo_personal' => 'Encargado Operaciones',
        	'nombre_personal' => 'Ashoka',
        	'apellido_personal' => 'Tano',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'atano@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p5 = Personal::create ([
        	'industrias_id' => '4',
        	'cargo_personal' => 'Encargado Seguridad Integral',
        	'nombre_personal' => 'Obi-Wan',
        	'apellido_personal' => 'Kenobi',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'okenobi@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p6 = Personal::create ([
        	'industrias_id' => '4',
        	'cargo_personal' => 'Encargado Seguridad Industrial',
        	'nombre_personal' => 'Anakin',
        	'apellido_personal' => 'Skywalker',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'askywalker@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p7 = Personal::create ([
        	'industrias_id' => '4',
        	'cargo_personal' => 'Encargado Bienes',
        	'nombre_personal' => 'Luke',
        	'apellido_personal' => 'Skywalker',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'lskywalker@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p8 = Personal::create ([
        	'industrias_id' => '4',
        	'cargo_personal' => 'Encargado Gestión Humana',
        	'nombre_personal' => 'Leia',
        	'apellido_personal' => 'Organa',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'lorgana@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p9 = Personal::create ([
        	'industrias_id' => '4',
        	'cargo_personal' => 'Encargado Tecnología',
        	'nombre_personal' => 'Jar-Jar',
        	'apellido_personal' => 'Binks',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'jbinks@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p10 = Personal::create ([
        	'industrias_id' => '4',
        	'cargo_personal' => 'Encargado Comunicaciones',
        	'nombre_personal' => 'Mace',
        	'apellido_personal' => 'Windu',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'mwindu@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $pp2 = Personal::create ([
        	'industrias_id' => '5',
        	'cargo_personal' => 'Presidente',
        	'nombre_personal' => 'Kyle',
        	'apellido_personal' => 'Katarn',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'kkatarn@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']);

        $p11 = Personal::create ([
        	'industrias_id' => '5',
        	'cargo_personal' => 'Encargado Ventas',
        	'nombre_personal' => 'Master',
        	'apellido_personal' => 'Yoda',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'myoda@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p12 = Personal::create ([
        	'industrias_id' => '5',
        	'cargo_personal' => 'Encargado Compras',
        	'nombre_personal' => 'Syfo',
        	'apellido_personal' => 'Dyas',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'sdyas@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p13 = Personal::create ([
        	'industrias_id' => '5',
        	'cargo_personal' => 'Encargado Juridico',
        	'nombre_personal' => 'Qui-Gon',
        	'apellido_personal' => 'Jin',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'qjin@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p14 = Personal::create ([
        	'industrias_id' => '5',
        	'cargo_personal' => 'Encargado Operaciones',
        	'nombre_personal' => 'Ashoka',
        	'apellido_personal' => 'Tano',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'atano@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p15 = Personal::create ([
        	'industrias_id' => '5',
        	'cargo_personal' => 'Encargado Seguridad Integral',
        	'nombre_personal' => 'Obi-Wan',
        	'apellido_personal' => 'Kenobi',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'okenobi@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p16 = Personal::create ([
        	'industrias_id' => '5',
        	'cargo_personal' => 'Encargado Seguridad Industrial',
        	'nombre_personal' => 'Anakin',
        	'apellido_personal' => 'Skywalker',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'askywalker@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p17 = Personal::create ([
        	'industrias_id' => '5',
        	'cargo_personal' => 'Encargado Bienes',
        	'nombre_personal' => 'Luke',
        	'apellido_personal' => 'Skywalker',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'lskywalker@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p18 = Personal::create ([
        	'industrias_id' => '5',
        	'cargo_personal' => 'Encargado Gestión Humana',
        	'nombre_personal' => 'Leia',
        	'apellido_personal' => 'Organa',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'lorgana@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p19 = Personal::create ([
        	'industrias_id' => '5',
        	'cargo_personal' => 'Encargado Tecnología',
        	'nombre_personal' => 'Jar-Jar',
        	'apellido_personal' => 'Binks',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'jbinks@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p20 = Personal::create ([
        	'industrias_id' => '5',
        	'cargo_personal' => 'Encargado Comunicaciones',
        	'nombre_personal' => 'Mace',
        	'apellido_personal' => 'Windu',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'mwindu@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']);
        $pp3 = Personal::create ([
        	'industrias_id' => '6',
        	'cargo_personal' => 'Presidente',
        	'nombre_personal' => 'Kyle',
        	'apellido_personal' => 'Katarn',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'kkatar@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']);

        $p21 = Personal::create ([
        	'industrias_id' => '6',
        	'cargo_personal' => 'Encargado Ventas',
        	'nombre_personal' => 'Master',
        	'apellido_personal' => 'Yoda',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'myoda@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p22 = Personal::create ([
        	'industrias_id' => '6',
        	'cargo_personal' => 'Encargado Compras',
        	'nombre_personal' => 'Syfo',
        	'apellido_personal' => 'Dyas',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'sdyas@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p23 = Personal::create ([
        	'industrias_id' => '6',
        	'cargo_personal' => 'Encargado Juridico',
        	'nombre_personal' => 'Qui-Gon',
        	'apellido_personal' => 'Jin',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'qjin@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p24 = Personal::create ([
        	'industrias_id' => '6',
        	'cargo_personal' => 'Encargado Operaciones',
        	'nombre_personal' => 'Ashoka',
        	'apellido_personal' => 'Tano',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'atano@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p25 = Personal::create ([
        	'industrias_id' => '6',
        	'cargo_personal' => 'Encargado Seguridad Integral',
        	'nombre_personal' => 'Obi-Wan',
        	'apellido_personal' => 'Kenobi',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'okenobi@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p26 = Personal::create ([
        	'industrias_id' => '6',
        	'cargo_personal' => 'Encargado Seguridad Industrial',
        	'nombre_personal' => 'Anakin',
        	'apellido_personal' => 'Skywalker',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'askywalker@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p27 = Personal::create ([
        	'industrias_id' => '6',
        	'cargo_personal' => 'Encargado Bienes',
        	'nombre_personal' => 'Luke',
        	'apellido_personal' => 'Skywalker',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'lskywalker@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p28 = Personal::create ([
        	'industrias_id' => '6',
        	'cargo_personal' => 'Encargado Gestión Humana',
        	'nombre_personal' => 'Leia',
        	'apellido_personal' => 'Organa',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'lorgana@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p29 = Personal::create ([
        	'industrias_id' => '6',
        	'cargo_personal' => 'Encargado Tecnología',
        	'nombre_personal' => 'Jar-Jar',
        	'apellido_personal' => 'Binks',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'jbinks@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']

        	);
        $p30 = Personal::create ([
        	'industrias_id' => '6',
        	'cargo_personal' => 'Encargado Comunicaciones',
        	'nombre_personal' => 'Mace',
        	'apellido_personal' => 'Windu',
        	'cedula_personal' => '00000001',
        	'email_personal'=> 'mwindu@123.com',
        	'telefono1_personal' => '02120000000',
        	'telefono2_personal' => '02120000000',
        	'direccion_personal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nunc id nunc ultrices, pellentesque pretium tortor scelerisque. Cras dolor quam, pellentesque ac ex eget, pulvinar vestibulum sapien. Sed sit amet vehicula purus. Mauris imperdiet eros ut facilisis accumsan. Nullam eget ligula sit amet orci accumsan tristique at et arcu. Curabitur hendrerit ut nisi nec mollis. Sed quis est quis.']);


    }
}
