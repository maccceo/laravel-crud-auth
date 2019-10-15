<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cat;
use Faker\Generator as Faker;

$factory->define(Cat::class, function (Faker $faker) {
    return [
        'name' => $faker -> firstName(),
        'race' => $faker -> randomElement($array = array ('Persiano','Blu di Russia','Maine Coon', 'Siamese', 'Abissino', 'Ragdoll', 'Canadian Sphynx')),
        'cat_rfid' => $faker -> swiftBicNumber()
    ];
});
