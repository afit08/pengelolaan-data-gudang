<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Databarang extends Model
{
    protected $table = "databarangs";
    protected $primaryKey = "id";
    protected $fillable = ['kode_barang', 'nama_barang', 'stok', 'jlh_brg_masuk'];

    public function barangmasuks(){
    	return $this->hasMany('App\Barangmasuk');
    }

    public function barangkeluars(){
    	return $this->hasMany('App\Barangkeluar');
    }

    public function Barangmasuk()
    {
        return $this->belongsTo(Barangmasuk::class);
    }

    public function Laporan()
    {
        return $this->belongsTo(Laporan::class);
    }
}
