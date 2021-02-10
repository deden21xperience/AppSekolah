<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function biodata()
    {
        return $this->morphOne(Biodata::class, 'biodataable');
    }
    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function classroom()
    {
        return $this->morphOne(Classroom::class, 'classroomable');
    }
    public function attendance()
    {
        return $this->morphOne(Attendance::class, 'attendanceable');
    }
}
