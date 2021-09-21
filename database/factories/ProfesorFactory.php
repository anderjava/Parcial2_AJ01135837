<?php

use App\Profesor;
use Faker\Generator as Faker;

$factory->define(Profesor::class, function (Faker $faker) {
    return [
        'name' => 'Jorge',
        'apellido' => 'coto',
        'dui' => '0995555-1',
        'telefono' => '7076473736',
        'email'=> 'z.c 44@gmail.com',
        'password'=> bcrypt('zelaco222')
    ];
});
