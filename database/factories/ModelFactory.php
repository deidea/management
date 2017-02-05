<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Project::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->catchphrase,
		'customer_id' => rand(1, 10),
    ];
});

$factory->define(App\Contact::class, function (Faker\Generator $faker) {
    return [
		'customer_id' => rand(1, 10),
		'first_name' => $faker->firstName,
		'last_name' => $faker->lastName,
		'telephone' => $faker->phoneNumber,
		'fax' => $faker->phoneNumber,
		'email' => $faker->email,
		'birthday' => $faker->date,
    ];
});

$factory->define(App\Time::class, function (Faker\Generator $faker) {
    return [
		'user_id' => rand(1, 10),
		'project_id' => rand(1, 10),
		'description' => $faker->sentence,
		'start' => $faker->dateTime(),
		'end' => $faker->dateTime(),

    ];
});

$factory->define(App\Customer::class, function (Faker\Generator $faker) {
    return [
        'short' => $faker->word,
        'name' => $faker->company,
        'website' => $faker->url,
    ];
});
