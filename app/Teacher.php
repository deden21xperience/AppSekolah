<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function classroomable()
    {
        return $this->morphOne(Classroom::class, 'classroomable');
    }
    public function biodata()
    {
        return $this->morphOne(Biodata::class, 'biodataable');
    }
}
