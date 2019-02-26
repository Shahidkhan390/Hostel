<?php

use Faker\Generator as Faker;
Use App\Room;

$factory->define(App\People::class, function (Faker $faker) {
    $room1 = Room::find(1)->id;
    $room2 = Room::find(2)->id;
    return [
        'name'=>$faker->name,
        'city'=>$faker->city,
        'phone'=>$faker->phoneNumber,
        'room_id'=>$faker->randomElement([$room1,$room2]),


    ];
});
