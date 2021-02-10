<?php

use App\Classroom;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            "TKR",
            "TSM A",
            "TSM B",
            "TKJ A",
            "TKJ B",
            "TKJ C",
            "TKJ D",
            "OTKP",
            "AK",
        ];
        // $subject = [
        //     "matematika",
        //     "bahasa indonesia",
        //     "bahasa inggris",
        //     "ppkn",
        //     "agama",

        // ];

        $classroom_type = ['App\Student', 'App\Teacher'];
        for ($j = 10; $j <= 12; $j++) {
            # code...
            for ($i = 0; $i < count($kelas); $i++) {
                # code...
                Classroom::insert([
                    'classroom' => $kelas[$i],
                    'degree' => $j,
                    'classroomable_type' => $classroom_type[rand(0, 1)]
                ]);
            }
            // factory(\App\Classroom::class, 2)->create();
        }
    }
}
