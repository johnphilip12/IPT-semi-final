<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'lname' => $faker->lastname,
        'fname' => $faker->firstname,
        'position' => $faker->word(),
        'salary' => $faker->numberBetween(1,20000)
        ];
});
