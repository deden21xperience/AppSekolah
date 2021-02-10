<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TataUsaha;
use Faker\Generator as Faker;

$factory->define(TataUsaha::class, function (Faker $faker) {
    return [
        // 'jabatan' => $faker->jobTitle, //diambil dari database indonesia
        'tgl_masuk' => date('ymd'),
    ];
});
