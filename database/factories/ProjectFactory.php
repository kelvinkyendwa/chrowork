<?php

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'project' => $faker->name,
        'client' =>$faker->name,
        'company' =>'the Chrowork',
    ];
});
