{{-- <div class="container"> --}}
{{-- <div class="accordion" id="anak_accordionExample">
    <div class="steps">
        <div class="progress" id="anak_progress">
            <div class="progress-bar bg-success" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="step-item">
            <button class="step-button text-center" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                1
            </button>
            <div class="step-title">
                First Step
            </div>
        </div>
        <div class="step-item">
            <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                2
            </button>
            <div class="step-title">
                Second Step
            </div>
        </div>
        <div class="step-item">
            <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                3
            </button>
            <div class="step-title">
                Third Step
            </div>
        </div>
    </div>

    <div class="card">
        <div id="anak_headingOne">
        </div>

        <div id="anak_collapseOne" class="collapse show" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="card-body">
                <div class="row" style="font-size: 12px">
                    <div class="mb-3 col-sm-12 col-md-12 col-lg-6">
                        <label for="keluhan">Keluhan Utama</label>
                        <textarea class="form-control" name="keluhan_utama" id="anak_keluhan_utama" cols="30" rows="5"
                            style="font-size:11px;min-height:20px;border-radius:0;resize:none" onfocus="removeZero(this)"
                            onblur="cekKosong(this)">-</textarea>
                    </div>
                    <div class="mb-3 col-sm-12 col-md-12 col-lg-6">
                        <label for="rps">Riwayat Penyakit Sekarang</label>
                        <textarea class="form-control" name="rps" id="anak_rps" cols="30" rows="5"
                            style="font-size:11px;min-height:20px;border-radius:0;resize:none" onfocus="removeZero(this)"
                            onblur="cekKosong(this)">-</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div id="anak_headingTwo">

        </div>
        <div id="anak_collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="card-body">
                your content goes here...
            </div>
        </div>
    </div>
    <div class="card">
        <div id="anak_headingThree">

        </div>
        <div id="anak_collapseThree" class="collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="card-body">
                your content goes here...
            </div>
        </div>
    </div>
</div> --}}
{{-- </div> --}}
{{-- <form action="" method="POST" class="form-soap">
    <div class="row">
        <div class="mb-3 col-sm-12 col-md-12 col-lg-6">

        </div>
    </div>
</form> --}}
<form action="" class="form-asmed-anak">
    <div class="row" style="font-size: 12px">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <label for="pasien">
                    Pasien
                </label>
                <div class="row">
                    <div class="mb-2 col-sm-12 col-md-6 col-lg-3">
                        <input type="text" class="form-control form-control-sm no_rawat" placeholder="" aria-label="" id="anak_no_rawat" readonly="" style="background-color: #e9ecef;cursor:not-allowed;">
                    </div>
                    <div class="mb-2 col-sm-12 col-md-6 col-lg-5">
                        <input type="search" style="background-color: #e9ecef;cursor:not-allowed" class="form-control form-control-sm pasien" id="anak_pasien" placeholder="" aria-label="" aria-describedby="pasien" readonly="">
                    </div>
                    <div class="mb-2 col-sm-12 col-md-6 col-lg-4">
                        <input type="search" style="background-color: #e9ecef;cursor:not-allowed" class="form-control form-control-sm anak_tgl_lahir" id="anak_tgl_lahir" placeholder="" aria-label="" aria-describedby="pasien" readonly="">
                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <label for="dokter">Dokter</label>
                <div class="row">
                    <div class="mb-2 col-sm-12 col-md-6 col-lg-3">
                        <input type="search" class="form-control form-control-sm anak_kd_dokter" placeholder="" aria-label="" id="anak_kd_dokter" readonly>
                    </div>
                    <div class="mb-2 col-sm-12 col-md-6 col-lg-4">
                        <input type="search" class="form-control form-control-sm anak_dokter" placeholder="" aria-label="" id="anak_dokter">
                        <div class="list-dokter"></div>
                    </div>
                    <div class="mb-2 col-sm-12 col-md-6 col-lg-5">
                        <div class="input-group">
                            <select class="form-select form-select-sm" id="anak_anamnesis" style="font-size: 12px">
                                <option selected disabled>Pilih Anamnessis</option>
                                <option value="Autoanamnesis">Autoanamnesis</option>
                                <option value="Alloanamnesis">Alloanamnesis</option>
                            </select>
                            <input type="search" class="form-control form-control-sm anak_hubungan" placeholder="" aria-label="" id="anak_hubungan" style="margin-left: 10px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3 col-sm-12 col-md-12 col-lg-6">
            <div class="separator m-2">1. Riwayat Kesehatan</div>
            <div class="row">
                <div class="mb-3 col-sm-12 col-md-6 col-lg-4">
                    <label for="keluhan">Keluhan Utama</label>
                    <textarea class="form-control" name="keluhan_utama" id="anak_keluhan_utama" cols="30" rows="5"
                        style="font-size:11px;min-height:20px;border-radius:0;resize:none" onfocus="removeZero(this)"
                        onblur="cekKosong(this)">-</textarea>
                </div>
                <div class="mb-3 col-sm-12 col-md-6 col-lg-4">
                    <label for="rps">Riwayat Penyakit Sekarang</label>
                    <textarea class="form-control" name="rps" id="anak_rps" cols="30" rows="5"
                        style="font-size:11px;min-height:20px;border-radius:0;resize:none" onfocus="removeZero(this)"
                        onblur="cekKosong(this)">-</textarea>
                </div>
                <div class="mb-3 col-sm-12 col-md-6 col-lg-4">
                    <label for="rpd">Riwayat Penyakit Dahulu</label>
                    <textarea class="form-control" name="rpd" id="anak_rpd" cols="30" rows="5"
                        style="font-size:11px;min-height:20px;border-radius:0;resize:none" onfocus="removeZero(this)"
                        onblur="cekKosong(this)">-</textarea>
                </div>
                <div class="mb-3 col-sm-12 col-md-6 col-lg-4">
                    <label for="rpk">Riwayat Penyakit Keluarga</label>
                    <textarea class="form-control" name="rpk" id="anak_rpk" cols="30" rows="2"
                        style="font-size:11px;min-height:20px;border-radius:0;resize:none" onfocus="removeZero(this)"
                        onblur="cekKosong(this)">-</textarea>
                </div>
                <div class="mb-3 col-sm-12 col-md-6 col-lg-4">
                    <label for="rpo">Riwayat Penggunaan Obat</label>
                    <textarea class="form-control" name="rpo" id="anak_rpo" cols="30" rows="2"
                        style="font-size:11px;min-height:20px;border-radius:0;resize:none" onfocus="removeZero(this)"
                        onblur="cekKosong(this)">-</textarea>
                </div>
                <div class="mb-3 col-sm-12 col-md-6 col-lg-4">
                    <label for="rpk">Alergi</label>
                    <input type="text" class="form-control form-control-sm" id="anak_alergi" name="alergi" placeholder=""
                        style="font-size:11px;min-height:20px;border-radius:0;" onfocus="removeZero(this)" onblur="cekKosong(this)" value="-">
                </div>


            </div>
            <div class="separator m-2">2. Pemeriksaan Fisik</div>
            <div class="row">
                <div class="mb-3 col-sm-12 col-md-4 col-lg-3">
                    <label for="">Keadaan Umum:</label>
                    <select class="form-select" name="keadaan" id="anak_keadaan"
                        style="font-size:11px;min-height:20px;border-radius:0;">
                        <option value="Compos Mentis">Sehat</option>
                        <option value="Sakit Ringan">Sakit Ringan</option>
                        <option value="Sakit Sedang">Sakit Sedang</option>
                        <option value="Sakit Berat">Sakit Berat</option>
                    </select>
                </div>
                <div class="mb-3 col-sm-12 col-md-4 col-lg-3">
                    <label for="">Kesadaran :</label>
                    <select class="form-select" name="kesadaran" id="anak_kesadaran"
                        style="font-size:11px;min-height:20px;border-radius:0;">
                        <option value="Compos Mentis">Compos Mentis</option>
                        <option value="Somnolence">Somnolence</option>
                        <option value="Sopor">Sopor</option>
                        <option value="Coma">Coma</option>
                    </select>
                </div>
                <div class="mb-3 col-sm-12 col-md-4 col-lg-3">
                    <label for="gcs">GCS(E,V,M)</label>
                    <input type="text" class="form-control form-control-sm" id="anak_gcs" name="gcs" placeholder="" maxlength="10" style="font-size:11px;min-height:20px;border-radius:0;" onfocus="removeZero(this)" onblur="cekKosong(this)" value="-" autocomplete="off">
                </div>
                <div class="mb-3 col-sm-12 col-md-4 col-lg-3">
                    <label for="tb">TB (cm)</label>
                    <input type="text" class="form-control form-control-sm" id="anak_tb" name="tb" placeholder="" maxlength="10" style="font-size:11px;min-height:20px;border-radius:0;" onfocus="removeZero(this)" onblur="cekKosong(this)" value="-" autocomplete="off">
                </div>
                <div class="mb-3 col-sm-12 col-md-4 col-lg-2">
                    <label for="bb">BB (Kg)</label>
                    <input type="text" class="form-control form-control-sm" id="anak_bb" name="bb" placeholder="" maxlength="10" style="font-size:11px;min-height:20px;border-radius:0;" onfocus="removeZero(this)" onblur="cekKosong(this)" value="-" autocomplete="off">
                </div>
                <div class="mb-3 col-sm-12 col-md-4 col-lg-2">
                    <label for="td">TD (mmHg)</label>
                    <input type="text" class="form-control form-control-sm" id="anak_bb" name="bb" placeholder="" maxlength="10" style="font-size:11px;min-height:20px;border-radius:0;" onfocus="removeZero(this)" onblur="cekKosong(this)" value="-" autocomplete="off">
                </div>
                <div class="mb-3 col-sm-12 col-md-4 col-lg-2">
                    <label for="nadi">Nadi (x/menit)</label>
                    <input type="text" class="form-control form-control-sm" id="anak_nadi" name="nadi" placeholder="" maxlength="10" style="font-size:11px;min-height:20px;border-radius:0;" onfocus="removeZero(this)" onblur="cekKosong(this)" value="-" autocomplete="off">
                </div>
                <div class="mb-3 col-sm-12 col-md-4 col-lg-2">
                    <label for="rr">RR (x/menit)</label>
                    <input type="text" class="form-control form-control-sm" id="anak_rr" name="rr" placeholder="" maxlength="10" style="font-size:11px;min-height:20px;border-radius:0;" onfocus="removeZero(this)" onblur="cekKosong(this)" value="-" autocomplete="off">
                </div>
                <div class="mb-3 col-sm-12 col-md-4 col-lg-2">
                    <label for="suhu">Suhu (<sup>0</sup>C)</label>
                    <input type="text" class="form-control form-control-sm" id="anak_suhu" name="suhu" placeholder="" maxlength="10" style="font-size:11px;min-height:20px;border-radius:0;" onfocus="removeZero(this)" onblur="cekKosong(this)" value="-" autocomplete="off">
                </div>
                <div class="mb-3 col-sm-12 col-md-4 col-lg-2">
                    <label for="spo2">SpO2(%)</label>
                    <input type="text" class="form-control form-control-sm" id="anak_spo" name="spo2" placeholder="" maxlength="10" style="font-size:11px;min-height:20px;border-radius:0;" onfocus="removeZero(this)" onblur="cekKosong(this)" value="-" autocomplete="off">
                </div>
                <div class="mb-1 col-sm-12 col-md-4 col-lg-6">
                    <label for="">Kepala :</label>
                    <select class="form-select" name="kepala" id="anak_kepala" style="font-size:11px;min-height:20px;border-radius:0;">
                        <option value="Normal">Normal</option>
                        <option value="Abnormal">Abnormal</option>
                        <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                    </select>
                </div>
                <div class="mb-1 col-sm-12 col-md-4 col-lg-6">
                    <label for="">Mata :</label>
                    <select class="form-select" name="mata" id="anak_mata" style="font-size:11px;min-height:20px;border-radius:0;">
                        <option value="Normal">Normal</option>
                        <option value="Abnormal">Abnormal</option>
                        <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                    </select>
                </div>
                <div class="mb-1 col-sm-12 col-md-4 col-lg-6">
                    <label for="">Gigi & Mulut :</label>
                    <select class="form-select" name="gigi" id="anak_gigi" style="font-size:11px;min-height:20px;border-radius:0;">
                        <option value="Normal">Normal</option>
                        <option value="Abnormal">Abnormal</option>
                        <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                    </select>
                </div>
                <div class="mb-1 col-sm-12 col-md-4 col-lg-6">
                    <label for="">THT :</label>
                    <select class="form-select" name="tht" id="anak_tht" style="font-size:11px;min-height:20px;border-radius:0;">
                        <option value="Normal">Normal</option>
                        <option value="Abnormal">Abnormal</option>
                        <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                    </select>
                </div>
                <div class="mb-1 col-sm-12 col-md-4 col-lg-6">
                    <label for="">Thorax :</label>
                    <select class="form-select" name="thorax" id="anak_thorax" style="font-size:11px;min-height:20px;border-radius:0;">
                        <option value="Normal">Normal</option>
                        <option value="Abnormal">Abnormal</option>
                        <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                    </select>
                </div>
                <div class="mb-1 col-sm-12 col-md-4 col-lg-6">
                    <label for="">Jantung :</label>
                    <select class="form-select" name="jantung" id="anak_jantung" style="font-size:11px;min-height:20px;border-radius:0;">
                        <option value="Normal">Normal</option>
                        <option value="Abnormal">Abnormal</option>
                        <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                    </select>
                </div>
                <div class="mb-1 col-sm-12 col-md-4 col-lg-6">
                    <label for="">Paru :</label>
                    <select class="form-select" name="paru" id="anak_paru" style="font-size:11px;min-height:20px;border-radius:0;">
                        <option value="Normal">Normal</option>
                        <option value="Abnormal">Abnormal</option>
                        <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                    </select>
                </div>
                <div class="mb-1 col-sm-12 col-md-4 col-lg-6">
                    <label for="">Abdomen :</label>
                    <select class="form-select" name="abdomen" id="anak_abdomen" style="font-size:11px;min-height:20px;border-radius:0;">
                        <option value="Normal">Normal</option>
                        <option value="Abnormal">Abnormal</option>
                        <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                    </select>
                </div>
                <div class="mb-1 col-sm-12 col-md-4 col-lg-6">
                    <label for="">Genital :</label>
                    <select class="form-select" name="genital" id="anak_genital" style="font-size:11px;min-height:20px;border-radius:0;">
                        <option value="Normal">Normal</option>
                        <option value="Abnormal">Abnormal</option>
                        <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                    </select>
                </div>
                <div class="mb-1 col-sm-12 col-md-4 col-lg-6">
                    <label for="">Ekstrimitas :</label>
                    <select class="form-select" name="ekstrimitas" id="anak_ekstrimitas" style="font-size:11px;min-height:20px;border-radius:0;">
                        <option value="Normal">Normal</option>
                        <option value="Abnormal">Abnormal</option>
                        <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                    </select>
                </div>
                <div class="mb-1 col-sm-12 col-md-4 col-lg-6">
                    <label for="">Kulit :</label>
                    <select class="form-select" name="kulit" id="anak_kulit" style="font-size:11px;min-height:20px;border-radius:0;">
                        <option value="Normal">Normal</option>
                        <option value="Abnormal">Abnormal</option>
                        <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <label for="ket_fisik">Keterangan Fisik</label>
                    <textarea class="form-control" name="ket_fisik" id="anak_ket_fisik" cols="30" rows="5" style="font-size:11px;min-height:20px;border-radius:0;resize:none" onfocus="removeZero(this)" onblur="cekKosong(this)">-</textarea>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="separator m-2">3. Status Lokalis</div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <img src="{{ asset('/img/set-lokalis.jpg') }}" class="mx-auto d-block" style="max-width: 65%; height:auto">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <label for="keluhan">Keterangan Lokalis</label>
                    <textarea class="form-control" name="ket_lokalis" id="anak_ket_lokalis" cols="30" rows="3"
                        style="font-size:11px;min-height:20px;border-radius:0;resize:none" onfocus="removeZero(this)"
                        onblur="cekKosong(this)">-</textarea>
                </div>

            </div>
            <div class="separator m-2">4. Pemeriksaan Penunjang</div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <label for="lab">Laboratorium</label>
                    <textarea class="form-control" name="lab" id="anak_lab" cols="30" rows="3"
                        style="font-size:11px;min-height:20px;border-radius:0;resize:none" onfocus="removeZero(this)"
                        onblur="cekKosong(this)">-</textarea>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <label for="rad">Radiologi</label>
                    <textarea class="form-control" name="rad" id="anak_rad" cols="30" rows="3"
                        style="font-size:11px;min-height:20px;border-radius:0;resize:none" onfocus="removeZero(this)"
                        onblur="cekKosong(this)">-</textarea>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <label for="penunjang">Penunjang Lainnya</label>
                    <textarea class="form-control" name="penunjang" id="anak_penunjang" cols="30" rows="3"
                        style="font-size:11px;min-height:20px;border-radius:0;resize:none" onfocus="removeZero(this)"
                        onblur="cekKosong(this)">-</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="separator m-2">5. Diagnosis / Asesmen</div>
                    <textarea class="form-control" name="diagnosis" id="anak_diagnosis" cols="30" rows="8"
                        style="font-size:11px;min-height:20px;border-radius:0;resize:none" onfocus="removeZero(this)"
                        onblur="cekKosong(this)">-</textarea>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="separator m-2">6. Tata Laksana</div>
                    <textarea class="form-control" name="tata" id="anak_tata" cols="30" rows="8"
                        style="font-size:11px;min-height:20px;border-radius:0;resize:none" onfocus="removeZero(this)"
                        onblur="cekKosong(this)">-</textarea>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="separator m-2">7. Edukasi</div>
                    <textarea class="form-control" name="edukasi" id="anak_edukasi" cols="30" rows="8"
                        style="font-size:11px;min-height:20px;border-radius:0;resize:none" onfocus="removeZero(this)"
                        onblur="cekKosong(this)">-</textarea>
                </div>
            </div>
        </div>
    </div>
</form>
@push('script')
    <script>
        $('.anak_dokter').on('keyup', (e) => {
            dokter = $('.anak_dokter').val();
            if (dokter.length >= 3) {
                getDokter(dokter).done((response) => {
                    console.log(response)
                })
            }
        })
    </script>
@endpush