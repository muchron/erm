<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RsiaAmbilBerkas;
use App\Http\Controllers\JadwalController;

class RsiaAmbilBerkasController extends Controller
{
    protected $jadwal;
    protected $berkas;

    public function __construct()
    {
        $this->jadwal = new JadwalController();
        $this->berkas = new RsiaAmbilBerkas();
    }

    public function create($data = [])
    {
        $jadwal = $this->jadwal->getJadwal($data['kd_dokter'], $data['kd_poli']);
        $data = [
            'no_rawat' => $data['no_rawat'],
            'no_rkm_medis' => $data['no_rkm_medis'],
            'waktu' => date('Y-m-d H:i:s'),
            'jam_praktek' => date('Y-m-d') . ' ' . $jadwal->jam_mulai,
        ];
        $create = $this->berkas->create($data);
        return response()->json($create);
    }

    function updateWaktu($no_rawat)
    {
        $data = [
            'waktu' => date('Y-m-d H:i:s'),
        ];
        $update = $this->berkas->where('no_rawat', $no_rawat)->update($data);
        return response()->json($update);
    }

    function isAvailable($no_rawat)
    {
        $berkas = $this->berkas->where('no_rawat', $no_rawat)->first();
        return $isAvailable = $berkas ? true : false;
    }
}
