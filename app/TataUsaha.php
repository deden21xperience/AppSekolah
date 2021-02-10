<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TataUsaha extends Model
{
    // protected $table = "tatausaha";

    public function user()
    {
        return $this->morphOne(\App\User::class, 'userable');
    }

    public function biodata()
    {
        return $this->morphOne(\App\Biodata::class, 'biodataable');
    }
}
