<?php

use Faker\Generator as Faker;
use App\Timesheet;
use App\Project;

$factory->define(Timesheet::class, function (Faker $faker) {
    return [
        'project_id' => factory(Project::class)->create()->id,
        'user_id' => 1,
        'date' => $faker->date,
        'hours' => 4,
        'description' => $faker->sentence,
        'authorised' => 0,
    ];
});
