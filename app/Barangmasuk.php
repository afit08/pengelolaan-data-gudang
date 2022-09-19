<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangmasuk extends Model
{
    protected $table = "barangmasuks";
    protected $primaryKey = "id";
    protected $fillable = [
        'jlh_brg_masuk', 'penerima', 'tanggal', 'databarang_id', 'datasupplier_id'
    ];

    public function Databarang()
    {
        return $this->belongsTo(Databarang::class);
    }

    public function Datasupplier()
    {
        return $this->belongsTo(Datasupplier::class);
    }

    public function databarangs(){
    	return $this->hasMany('App\Databarang');
    }

    public function barangkeluars(){
    	return $this->hasMany('App\Barangkeluar');
    }
    
    public function Laporan()
    {
        return $this->belongsTo(Laporan::class);
    }
}
