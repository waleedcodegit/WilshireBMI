<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';

    public  function slot(){
       return $this->belongsTo(Slot::class,'slot_id');
    }
}
