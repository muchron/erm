<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\RegPeriksa;
use Illuminate\Http\Request;
use App\Models\PemeriksaanRalan;

class PemeriksaanRalanController extends Controller
{
    private $tanggal;
    private $berkas;
    public function __construct()
    {
        $this->tanggal = new Carbon();
        $this->berkas = new RsiaAmbilBerkasController();
    }
    public function ambil(Request $request)
    {
        $pemeriksaan = PemeriksaanRalan::where('no_rawat', $request->no_rawat)
            ->with('regPeriksa', function ($q) {
                $q->with('pasien');
            })->with('pegawai')->first();

        if ($pemeriksaan) {
            return response()->json($pemeriksaan, 200);
        } else {
            $regPeriksa = RegPeriksa::where('no_rawat', $request->no_rawat)
                ->with('pasien')->first();
            return response()->json($regPeriksa, 200);
        }
    }
    public function simpan(Request $request)
    {
        $pemeriksaan = PemeriksaanRalan::where('no_rawat', $request->no_rawat)->first();

        $data = [
            'suhu_tubuh' => $request->suhu_tubuh,
            'tensi' => $request->tensi,
            'nadi' => $request->nadi,
            'respirasi' => $request->respirasi,
            'tinggi' => $request->tinggi,
            'berat' => $request->berat,
            'spo2' => $request->spo2,
            'gcs' => $request->gcs,
            'kesadaran' => $request->kesadaran,
            'keluhan' => $request->keluhan,
            'pemeriksaan' => $request->pemeriksaan,
            'alergi' => $request->alergi,
            'rtl' => $request->rtl ? $request->rtl : '',
            'penilaian' => $request->penilaian,
            'instruksi' => $request->instruksi,
            'evaluasi' => $request->evaluasi,
            'lingkar_perut' => '-',
        ];

        if ($pemeriksaan) {
            $update = PemeriksaanRalan::where('no_rawat', $request->no_rawat)->update(
                $data
            );
        } else {

            $dataTambah = [
                'nip' => $request->nip,
                'no_rawat' => $request->no_rawat,
                'tgl_perawatan' => $this->tanggal->now()->toDateString(),
                'jam_rawat' => date('H:i:s'),
            ];

            $create = array_merge($data, $dataTambah);
            if ($this->berkas->isAvailable($request->no_rawat)) {
                $this->berkas->updateWaktu($request->no_rawat);
            } else {
                $this->berkas->create(
                    [
                        'kd_dokter' => $request->kd_dokter,
                        'kd_poli' => $request->kd_poli,
                        'no_rawat' => $request->no_rawat,
                        'no_rkm_medis' => $request->no_rkm_medis,
                        'waktu_soap' => date('Y-m-d H:i:s'),
                    ]
                );
            }

            $update = PemeriksaanRalan::create($create);
        }
        return response()->json(['Berhasil', $update], 200);
    }
}
