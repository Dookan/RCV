<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = "vehicles";

    protected $fillable = ['modelo', 'marca'];

    public function user(){
    	return $this->belongsTo('App\User', 'id');
    }
}
