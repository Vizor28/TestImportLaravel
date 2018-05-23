<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];

    public function model(){

        return $this->hasMany('App\CarModel');

    }

}
