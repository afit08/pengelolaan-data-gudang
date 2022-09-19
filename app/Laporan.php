<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    public function barangmasuks(){
    	return $this->hasMany('App\Barangmasuk');
    }

    public function barangkeluars(){
    	return $this->hasMany('App\Barangkeluar');
    }

    public function databarangs(){
    	return $this->hasMany('App\Databarang');
    }

}
