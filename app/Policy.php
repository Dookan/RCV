<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Policy extends Model
{
	use SoftDeletes;

    protected $table = "vehicles";

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'damage_things', 'premium1', 'damage_people','premium2','disability','premium3','legal_assistance','premium4','death','premium5','medical_expenses','premium6','crane'
    ];

    public function users(){
        return $this->belongsToMany('App\User');
    }

}
