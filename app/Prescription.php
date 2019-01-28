<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    //
    protected $table = 'prescription';

    protected $primaryKey = 'id';

    public $timestamps =true;

    protected $fillable = ['patient_id', 'generic', 'brand', 'strength', 'form'];

    public function patients()
    {

        return $this->belongsTo(Patient::class);
    }
}
