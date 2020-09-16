<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    public function shift()
    {
        return $this->hasMany('\App\ApplicantShift');
    }
}
