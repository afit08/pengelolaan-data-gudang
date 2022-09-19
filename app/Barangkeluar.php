<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangkeluar extends Model
{
    protected $table = "barangkeluars";
    protected $primaryKey = "id";
    protected $fillable = [
        'jlh_brg_keluar', 'tujuan', 'tanggal_keluar', 'operator', 'databarang_id'
    ];

    public function Databarang()
    {
        return $this->belongsTo(Databarang::class);
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
