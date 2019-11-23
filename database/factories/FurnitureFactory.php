<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Furniture;
use Faker\Generator as Faker;

$factory->define(Furniture::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->sentence(10),
        'state' => $faker->randomElement(['Abia State', 'Adamawa State', 'Akwa Ibom State', 'Anambra State', 'Bauchi State', 'Bayelsa State', 'Benue State', 'Borno State', 'Cross River State', 'Delta State', 'Ebonyi State', 'Edo State', 'Ekiti State', 'Enugu State', 'Gombe State', '	Imo State', 'Jigawa State', 'Kaduna State', 'Kano State', 'Katsina State', 'Kebbi State', 'Kogi State', 'Kwara State', 'Lagos State', '	Nasarawa State', 'Niger State', 'Ogun State', '	Ondo State', '	Osun State', 'Oyo State', 'Plateau State', 'Rivers State', 'Sokoto State', 'Taraba State', 'Yobe State', 'Zamfara State']),
        'typeintervention' => $faker->randomElement(['Government', 'EU', 'World Bank', 'IMF', 'NGO']),
        'year' => $faker->randomElement(['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020']),
        'quality' => $faker->randomElement(['Good', 'Manageable', 'Poor']),
        'totalcost' => $faker->numberBetween($min = 1000000, $max = 20000000),
        'actualcost' => $faker->numberBetween($min = 6000000, $max = 25000000),

    ];
});
