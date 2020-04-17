<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class smallform extends Model
{
    protected $fillable = ['blood_group','age','gender','symptoms','exposure','travel','symptoms_condition','medical_condition','symptoms_details','user_id','name','visitor'];
}
