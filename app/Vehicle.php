<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
	use SoftDeletes;

    protected $table = "vehicles";

    protected $fillable = ['modelo', 'marca'];

    protected $dates = ['deleted_at'];

    public function user(){
    	return $this->belongsTo('App\User', 'id');
    }

    public function admin(){
    	return $this->belongsTo('App\Admin', 'id');
    }
}
