<?php

use App\Alumnos;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Alumnos::class,18)->create();
       /* Alumnos::create(
            [
            'id_alumno'=> '1',
            'name'=> 'Ander',
            'apellido'=> 'Argueta',
            'fecha_nacimiento'=> '23/10/2000',
            'direccion'=> 'col. el chaparral',
            'genero'=> 'M',
            'apellido'=> 'Argueta',
            'telefono'=> '740884888',
            'email'=> 'ander@gmail.com',
            'password'=> bcrypt('ander23')
            
             ]
        );*/
    }
}
