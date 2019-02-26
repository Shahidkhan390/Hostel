<?php

use Faker\Generator as Faker;
use App\People;

$factory->define(App\Room::class, function (Faker $faker) {

    $People1 = People::find(1)->id;
    $People2 = People::find(2)->id;

    return [

        'name' => $faker->name,
        'capacity'=>$faker->capacity,
        'has_ac'=>$faker->has_ac,
        'ststus'=>$faker->ststus,
    ];
});
