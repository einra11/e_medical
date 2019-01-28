<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Patient::class, function (Faker $faker) {
    return [
        'firstname' => $faker->name,
        'lastname' => $faker->name,
        'middlename' => $faker->name,
        'age' => $faker->numberBetween($min = 1, $max = 100),
        'sex' => $faker->randomElement($array = array ('m','f')),
        'phone_number' => $faker->randomDigit,
        'address' => $faker->name,
        'email_address' => $faker->unique()->safeEmail,
        'occupation' => $faker->word,
        'birth_date' => $faker->word
    ];
});


$factory->define(App\Prescription::class, function (Faker $faker) {
    return [
        'generic' =>  $faker->word,
        'brand' =>  $faker->word,
        'strength' => $faker->randomDigit,
        'form' => $faker->word,
        'patient_id' => App\Patient::all()->random()->id,
    ];
});
