<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Entity\Region;
use Faker\Generator as Faker;



$factory->define(Region::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->city,
        'slag' => $faker->unique()->slug(2),
        'parent_id' => null,
    ];

});
