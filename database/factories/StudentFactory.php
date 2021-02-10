<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;



$factory->define(Student::class, function (Faker $faker) {
    $jurusan = ['tkj', 'tkr', 'tbsm', 'otkp', 'ak'];
    return [
        'tgl_masuk' => date('2018/02/07'),
        'nisn' => $faker->randomDigitNotNull,
        'nis' => $faker->randomDigitNotNull,
        'status' => rand(0, 2), //0 = keluar, 1 = masih aktif dan 3 = lulus
        'nama_ayah' => $faker->name('male'), //diambil dari table biodadata
        'nama_ibu' => $faker->name('female'), //diambil dari table biodadata
        'nama_wali' => $faker->name, //diambil dari table biodadata
        'no_pendaftaran' => 'PPDB0001',
        'jurusan' => $jurusan[rand(0, 4)]
    ];
});
