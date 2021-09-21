<?php

use App\Alumnos;
use Faker\Generator as Faker;

$factory->define(Alumnos::class, function (Faker $faker) {
    return [
        'name' => 'Ander',
        'apellido' => 'Argueta',
        'fecha_nacimiento' => '23/10/2000',
        'direccion' => 'col. el chaparral',
        'genero' => 'Masculino',
        'telefono' => '74088488',
        'email' => 'ander@gmail.com',
        'password' => bcrypt('ander23')
    ];
});
