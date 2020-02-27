<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    protected $table = "lamaran";
    public function perusahaan(){
    	return $this->belongsTo('App\Perusahaan');
    }
    public function loker(){
    	return $this->belongsTo('App\Loker');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
    
}
