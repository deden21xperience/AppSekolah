<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public function attendanceable() {
        return $this->morphTo();
    }
}
