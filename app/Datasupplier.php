<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datasupplier extends Model
{
    protected $table = "datasuppliers";
    protected $primaryKey = "id";
    protected $fillable = ['kode_supplier', 'nama_supplier', 'alamat', 'email', 'no_tlp'];

    public function Barangmasuk(){
        return $this->hasMany(Barangmasuk::class);
    }

    public function barangkeluars(){
    	return $this->belongsTo('App\Barangkeluar');
    }
}
