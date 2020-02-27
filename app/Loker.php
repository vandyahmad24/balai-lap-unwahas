<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
     protected $table = "loker";
     protected $fillable = [
        'perusahaan_id', 'job_dec', 'end_time'
    ];
    public function perusahaan(){
    	return $this->belongsTo('App\Perusahaan');
    }
    public function lamaran()
    {
    	return $this->hasMany('App\Lamaran');
    }
}
