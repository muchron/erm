<?php

namespace App\Http\Controllers\Bridging;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Services\Bpjs\Vclaim\BridgeVclaim;
use App\Services\Bpjs\Vclaim\ConfigVclaim;
use App\Services\Bpjs\Vclaim\ResponseVclaim;

class RencanaKontrolController extends Controller
{
    protected $config;
    protected $output;
    protected $bridge;

    public function __construct()
    {
        $this->config = new ConfigVclaim();
        $this->output = new ResponseVclaim();
        $this->bridge = new BridgeVclaim();
    }
    public function testConfig()
    {
        return $this->config->setHeader();
    }

    public function getSpesialis($jnsKontrol, $nomor, $tanggal)
    {
        $endpoint = "RencanaKontrol/ListSpesialistik/JnsKontrol/{$jnsKontrol}/nomor/{$nomor}/TglRencanaKontrol/{$tanggal}";
        $response = Http::withHeaders($this->config->setHeader())->get($this->config->setUrl() . $endpoint);
        return $this->output->responseVclaim($response, $this->config->keyDecrypt($this->config->setTimestamp()));
    }
    public function getDokterSpesialis($jnsKontrol, $kdPoli, $tanggal)
    {
        $endpoint = "RencanaKontrol/JadwalPraktekDokter/JnsKontrol/{$jnsKontrol}/KdPoli/{$kdPoli}/TglRencanaKontrol/{$tanggal}";
        $response = Http::withHeaders($this->config->setHeader())->get($this->config->setUrl() . $endpoint);
        return $this->output->responseVclaim($response, $this->config->keyDecrypt($this->config->setTimestamp()));
    }

    public function insertRencanaKontrol(Request $request)
    {
        $data = $request->all();
        $endpoint = "RencanaKontrol/insert";
        // $response = Http::withHeaders($this->config->setHeader())->post($this->config->setUrl() . $endpoint, $request);
        $response = $this->bridge->request($this->config->setUrl() . $endpoint, $this->config->setHeader(), "POST", $data);
        return $response;
        // return $this->output->responseVclaim($response, $this->config->keyDecrypt($this->config->setTimestamp()));
    }
}
