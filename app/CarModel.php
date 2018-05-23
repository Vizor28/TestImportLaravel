<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    public $timestamps = false;
    public $table = 'models';

    protected $fillable = ['name'];

    public function make(){

        return $this->belongsTo('App\Make');

    }
}
