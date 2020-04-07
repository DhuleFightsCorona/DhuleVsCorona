<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','adress','family_count','pregnent_count','newborn_count','user_id','visitor'];

    public function information()
    {
         return $this->hasMany('App\Information');
    }
}
