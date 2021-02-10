<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Biodata;
use Faker\Generator as Faker;

$factory->define(Biodata::class, function (Faker $faker) {
    $intGender = rand(1, 2);
    if ($intGender == 1) {
        $jk = 'male';
        $jki = 'L';
    } else {
        $jk = 'female';
        $jki  = 'P';
    }
    return [
        'nama' => $faker->firstName($jk) . " " . $faker->lastName($jk),
        'jk' => $jki,
        'tpt_lahir' => $faker->city,
        'tgl_lahir' => $faker->date(),
        'alamat' => $faker->address, //diisi kampung/dusun, rt, rw
        'rt' => '11', //diisi kampung/dusun, rt, rw
        'rw' => '12', //diisi kampung/dusun, rt, rw
        'prov' => 'Jawa Barat', //rand(11, 94), //dari database indonesia
        'kab' => $faker->city, //dari database indonesia
        'kec' => 'Cimanggung', //dari database indonesia
        'desa' => 'Sindangpakuon', //dari database indonesia
        'kodepos' => $faker->randomDigit, //dari database indonesia
        'nik' => $faker->nik(),
        'agama' => '', //dari database indonesia
        'pekerjaan' => rand(1, 88), //dari database indonesia
        'sekolah' => $faker->randomDigit, //diisi sekolah terakhir diambil dari database indonesia
        'foto' => $jki === "L" ? 'img/no_image_m.svg' : 'img/no_image_f.png',  //
    ];
});
