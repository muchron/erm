<?php

namespace App\Http\Controllers;

use App\Models\PermintaanRadiologi;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PermintaanRadiologiController extends Controller
{
    protected $track;
    protected $radiologi;

    public function __construct()
    {
        $this->radiologi = new PermintaanRadiologi();
        $this->track = new TrackerSqlController();
    }

    function view()
    {
        return view('content.radiologi.radiologi');
    }
    function index()
    {
        $radiologi = $this->radiologi->where([
            'tgl_permintaan' => date('Y-m-d'),
            'tgl_hasil' => date('Y-m-d')
        ])->with(['regPeriksa.pasien', 'dokterRujuk', 'periksaRadiologi.jnsPerawatan', 'hasilRadiologi', 'regPeriksa.pasien'])->get();

        return $radiologi;
    }
    public function getByNoRawat(Request $request)
    {

        $radiologi = $this->radiologi->with(['regPeriksa.pasien', 'dokterRujuk', 'periksaRadiologi.jnsPerawatan', 'hasilRadiologi', 'gambarRadiologi', 'permintaanPemeriksaan.jnsPemeriksaan']);

        if ($request->tgl_permintaan && $request->jam_permintaan) {
            $radiologi = $radiologi->where([
                'no_rawat', $request->no_rawat,
                'tgl_permintaan', $request->tgl_permintaan,
                'jam_permintaan', $request->jam_permintaan,
            ])->first();
        } else {
            $radiologi = $radiologi->where('no_rawat', $request->no_rawat)->get();
        }
        return $radiologi;
    }
    function getParameter(Request $request)
    {
        $radiologi = $this->radiologi;
        if ($request->tgl_awal) {
            $radiologi = $radiologi->whereBetween('tgl_hasil', [$request->tgl_awal, $request->tgl_akhir]);
        }
        if ($request->spesialis) {
            $radiologi = $radiologi->whereHas('dokterRujuk.spesialis', function ($query) use ($request) {
                $query->where('kd_sps', $request->spesialis);
            });
        }
        if ($request->status) {
            $radiologi = $radiologi->where('status', $request->status);
        }
        return $radiologi->with(['regPeriksa.pasien', 'dokterRujuk', 'periksaRadiologi.jnsPerawatan', 'hasilRadiologi', 'permintaanPemeriksaan.jnsPemeriksaan'])->get();
    }
    function getTableIndex(Request $request)
    {
        // return;
        if ($request->tgl_awal || $request->spesialis || $request->status) {
            $permintaanRadiologi = $this->getParameter($request);
        } else {
            $permintaanRadiologi = $this->index();
        }
        return DataTables::of($permintaanRadiologi)->make(true);
    }
    public function updateDateTime($clause = [], $data = [])
    {
        $update = $this->radiologi->where($clause)->update($data);
        if ($update) {
            $this->track->updateSql($this->radiologi, $data, $clause);
        }
    }
}
