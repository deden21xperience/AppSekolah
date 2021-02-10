<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $guarded = [];
    protected $dates = ['tgl_lahir', 'tgl_masuk'];
    public function biodataable()
    {
        return $this->morphTo();
    }
}
