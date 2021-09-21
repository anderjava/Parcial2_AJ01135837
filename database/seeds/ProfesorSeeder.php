<?php

use App\Profesor;
use Faker\Factory;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Profesor::class,18)->create();
       /* DB::table('profesor')->insert([
            'id_profesor'=> '1',
            'name'=> 'Edgar',
            'apellido'=> 'Moran',
            'dui'=> '000934-8727',
            'telefono'=> '76365268',
            'email'=> 'edgarmoran1999@gmail.com',
            'password'=> bcrypt('profe123')
        ]);*/
    }
}
