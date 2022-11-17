<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name(),
        'apellido'=>$faker->name(),
        'telefono'=>$faker->phoneNumber(),
        'dni'=>$faker->numerify(),
        'id_categoria'=>$faker->numberBetween(1,2),
    ];
});
