<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable = ['blood_group','operative_history','weight','height','is_physically_challenged','medicine','insulin','age','gender','temp','symptoms','exposure','travel','symptoms_condition','medical_condition','symptoms_details','data_id','family_name'];
}
