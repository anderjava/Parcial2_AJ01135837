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
            'name'=> 'Esau',
            'apellido'=> 'Zelaya',
            'fecha_nacimiento'=> '16/01/2001',
            'direccion'=> 'Colonia San luis',
            'genero'=> 'M',
            'apellido'=> 'Zelaya',
            'telefono'=> '72814956',
            'email'=> 'esaumoran199@gmail.com',
            'password'=> bcrypt('esau123')
            
             ]
        );*/
    }
}
