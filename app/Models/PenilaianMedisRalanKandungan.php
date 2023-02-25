<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianMedisRalanKandungan extends Model
{
    use HasFactory;
    protected $table = 'penilaian_medis_ralan_kandungan';

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'kd_dokter', 'kd_dokter');
    }
    public function regPeriksa()
    {
        return $this->belongsTo(RegPeriksa::class, 'no_rawat', 'no_rawat');
    }
    public function semua()
    {
        return $this->with(['dokter', 'regPeriksa']);
    }
}
