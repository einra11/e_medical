<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $table = 'patients';

    protected $primaryKey = 'id';

    public $timestamps =true;

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);
    }
    public function medicalHistory()
    {
        return $this->hasMany(MedicalHistory::class);
    }
}
