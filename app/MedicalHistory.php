<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalHistory extends Model
{
    //
    protected $table = 'medical_histories';

    protected $primaryKey = 'id';

    public $timestamps =true;

    protected $fillable = ['patient_id','disease','hospital','date_admitted'];

    public function patients()
    {

        return $this->belongsTo(Patient::class);
    }
}
