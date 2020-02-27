<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
     protected $table = "perusahaan";
     protected $fillable = [
        'nama', 'alamat', 'deskripsi','job_deskripsi','status','no_hp'
    ];
    public function loker(){
    	return $this->hasMany('App\Loker');
    }
    public function lamaran(){
    	return $this->hasMany('App\Lamaran');
    }
}
