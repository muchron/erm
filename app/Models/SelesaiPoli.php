<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelesaiPoli extends Model
{
    use HasFactory;
    protected $table = 'rsia_selesai_poli';
    protected $fillable = ['no_rawat', 'jam_periksa'];
    public $timestamps = false;
}
