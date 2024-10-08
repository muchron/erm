<div class="modal fade" id="modalResumeRanap" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="exampleModalLabel">RESUME MEDIS RAWAT INAP</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" id="formResumeRanap">
                    <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                    <div class="row" style="font-size: 12px">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <label for="pasien">
                                    Pasien
                                </label>
                                <div class="row">
                                    <div class="mb-2 col-sm-12 col-md-6 col-lg-3">
                                        <input type="text" class="form-control form-control-sm no_rawat" placeholder="" aria-label="" id="no_rawat" name="no_rawat" readonly="" style="background-color: #e9ecef;cursor:not-allowed;">
                                    </div>
                                    <div class="mb-2 col-sm-12 col-md-6 col-lg-5">
                                        <input type="search" style="background-color: #e9ecef;cursor:not-allowed" class="form-control form-control-sm pasien" id="pasien" name="pasien" placeholder="" aria-label="" aria-describedby="pasien" readonly="">
                                    </div>
                                    <div class="mb-2 col-sm-12 col-md-6 col-lg-4">
                                        <input type="search" style="background-color: #e9ecef;cursor:not-allowed" class="form-control form-control-sm tgl_lahir" id="tgl_lahir" name="tgl_lahir" placeholder="" aria-label="" aria-describedby="pasien" readonly="">
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="row">
                                    <div class="mb-2 col-sm-12 col-md-2 col-lg-2">
                                        <label for="dokter">Dokter</label>
                                        <input type="search" class="form-control form-control-sm kd_dokter" placeholder="" aria-label="" id="kd_dokter" name="kd_dokter" readonly>
                                    </div>
                                    <div class="mb-2 col-sm-12 col-md-4 col-lg-4">
                                        <label for="kd_dokter"></label>
                                        <input type="search" class="form-control form-control-sm dokter" placeholder="" aria-label="" id="dokter" name="nm_dokter" readonly>
                                    </div>
                                    <div class="mb-2 col-sm-12 col-md-6 col-lg-6">
                                        <label for="kamar">Kamar & Pembiayaan</label>
                                        <input type="search" class="form-control form-control-sm kamar" placeholder="" aria-label="" id="kamar" name="kamar" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="mb-2 col-sm-12 col-md-4 col-lg-2">
                                        <label for="tgl_masuk">Tgl. Masuk</label>
                                        <input type="search" class="form-control form-control-sm tgl_masuk" placeholder="" aria-label="" id="tgl_masuk" name="tgl_masuk" readonly>
                                    </div>
                                    <div class="mb-2 col-sm-12 col-md-4 col-lg-2">
                                        <label for="tgl_masuk">Tgl. Keluar</label>
                                        <input type="search" class="form-control form-control-sm tgl_keluar" placeholder="" aria-label="" id="tgl_keluar" name="tgl_keluar" readonly>
                                    </div>
                                    <div class="mb-2 col-sm-12 col-md-4 col-lg-3">
                                        <label for="diagnosa_awal">Diagnosa Awal</label>
                                        <input type="search" class="form-control form-control-sm diagnosa_awal" placeholder="" aria-label="" id="diagnosa_awal" name="diagnosa_awal">
                                    </div>
                                    <div class="mb-2 col-sm-12 col-md-4 col-lg-3">
                                        <label for="alasan">Indikasi Rawat</label>
                                        <input type="search" class="form-control form-control-sm alasan" placeholder="" aria-label="" id="alasan" name="alasan" onfocus="removeZero(this)"
                                            onblur="cekKosong(this)" value="-">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2 col-sm-12 col-md-12 col-lg-7">
                            <div class="separator m-2">1. Riwayat Kesehatan</div>
                            <div class="row">
                                <div class="mb-2 col-sm-12 col-md-6 col-lg-6">
                                    <label for="keluhan">Keluhan Utama <a href="javascript:void(0)" id="srcKeluhan" class="badge text-bg-primary"><i class="bi bi-search"></i></a></label>
                                    <textarea class="form-control" name="keluhan_utama" id="keluhan_utama" cols="30" rows="10"
                                        onfocus="removeZero(this)"
                                        onblur="cekKosong(this)">-</textarea>
                                </div>
                                <div class="mb-2 col-sm-12 col-md-6 col-lg-6">
                                    <label for="pemeriksaan_fisik">Pemeriksaan Fisik <a href="javascript:void(0)" id="srcPemeriksaan" class="badge text-bg-primary"><i class="bi bi-search"></i></a></label>
                                    <textarea class="form-control" name="pemeriksaan_fisik" id="pemeriksaan_fisik" cols="30" rows="10"
                                        onfocus="removeZero(this)"
                                        onblur="cekKosong(this)">-</textarea>
                                </div>
                                {{-- <div class="mb-2 col-sm-12 col-md-6 col-lg-6"> --}}
                                {{-- <label for="jalannya_penyakit">Jalannya Penyakit Selama Perawatan</label> --}}
                                {{-- <textarea class="form-control" name="jalannya_penyakit" id="jalannya_penyakit" cols="30" rows="8"
                                    onfocus="removeZero(this)"
                                    onblur="cekKosong(this)" readonly>-</textarea> --}}
                                {{-- </div> --}}
                                <div class="mb-2 col-sm-12 col-md-6 col-lg-6">
                                    <label for="pemeriksaan_penunjang" id="srcRadiologi">Pemeriksaan Radiologi Terpenting <a href="javascript:void(0)" id="srcRadiologi" class="badge text-bg-primary"><i class="bi bi-search"></i></a></label>
                                    <textarea class="form-control" name="pemeriksaan_penunjang" id="pemeriksaan_penunjang" cols="30" rows="10"
                                        onfocus="removeZero(this)"
                                        onblur="cekKosong(this)">-</textarea>
                                </div>
                                <div class="mb-2 col-sm-12 col-md-6 col-lg-6">
                                    <label for="hasil_lanorat">Pemeriksaan Laborat Terpenting <a href="javascript:void(0)" id="srcLab" class="badge text-bg-primary"><i class="bi bi-search"></i></a></label>
                                    <textarea class="form-control" name="hasil_laborat" id="hasil_laborat" cols="30" rows="10"
                                        onfocus="removeZero(this)"
                                        onblur="cekKosong(this)">-</textarea>
                                </div>
                                <div class="mb-2 col-sm-12 col-md-6 col-lg-6">
                                    <label for="tindakan_dan_operasi">Tindakan/Operasi Selama Perawatan </label>
                                    <textarea class="form-control" name="tindakan_dan_operasi" id="tindakan_dan_operasi" cols="30" rows="10"
                                        onfocus="removeZero(this)"
                                        onblur="cekKosong(this)">-</textarea>
                                </div>
                                <div class="mb-2 col-sm-12 col-md-6 col-lg-6">
                                    <label for="obat_di_rs">Obat-obatan Selama Perwatan <a href="javascript:void(0)" id="srcObat" class="badge text-bg-primary"><i class="bi bi-search"></i></a></label>
                                    <textarea class="form-control" name="obat_di_rs" id="obat_di_rs" cols="30" rows="10"
                                        onfocus="removeZero(this)"
                                        onblur="cekKosong(this)">-</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-5">
                            <div class="separator m-2">2. Diagnosa Akhir</div>
                            <div class="row">
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <label for="diagnosa_utama" class="mt-2">Diagnosa Utama</label>
                                </div>
                                <div class="col-sm-12 col-md-7 col-lg-6 mb-2">
                                    <input type="search" class="form-control form-control-sm" name="diagnosa_utama" id="diagnosa_utama" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                </div>
                                <div class="col-sm-12 col-md-2 col-lg-3 mb-2">
                                    <div class="input-group">
                                        <input type="search" class="form-control form-control-sm" name="kd_diagnosa_utama" id="kd_diagnosa_utama" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                        <button class="btn btn-primary btn-sm btn-diagnosa" type="button" id="" onclick="listDiagnosaRanap('diagnosa','kd_diagnosa_utama', 'diagnosa_utama')"><i class="bi bi-search"></i></button>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <label for="diagnosa_sekunder" class="mt-2">Diagnosa sekunder 1</label>
                                </div>
                                <div class="col-sm-12 col-md-7 col-lg-6 mb-2">
                                    <input type="search" class="form-control form-control-sm" name="diagnosa_sekunder" id="diagnosa_sekunder" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                </div>
                                <div class="col-sm-12 col-md-2 col-lg-3 mb-2">
                                    <div class="input-group">
                                        <input type="search" class="form-control form-control-sm" name="kd_diagnosa_sekunder" id="kd_diagnosa_sekunder" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                        <button class="btn btn-primary btn-sm btn-diagnosa" type="button" id="" onclick="listDiagnosaRanap('diagnosa','kd_diagnosa_sekunder', 'diagnosa_sekunder')"><i class="bi bi-search"></i></button>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <label for="diagnosa_sekunder2" class="mt-2">Diagnosa sekunder 2</label>
                                </div>
                                <div class="col-sm-12 col-md-7 col-lg-6 mb-2">
                                    <input type="search" class="form-control form-control-sm" name="diagnosa_sekunder2" id="diagnosa_sekunder2" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                </div>
                                <div class="col-sm-12 col-md-2 col-lg-3 mb-2">
                                    <div class="input-group">
                                        <input type="search" class="form-control form-control-sm" name="kd_diagnosa_sekunder2" id="kd_diagnosa_sekunder2" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                        <button class="btn btn-primary btn-sm btn-diagnosa" type="button" id="" onclick="listDiagnosaRanap('diagnosa','kd_diagnosa_sekunder2', 'diagnosa_sekunder2')"><i class="bi bi-search"></i></button>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <label for="diagnosa_sekunder3" class="mt-2">Diagnosa sekunder 3</label>
                                </div>
                                <div class="col-sm-12 col-md-7 col-lg-6 mb-2">
                                    <input type="search" class="form-control form-control-sm" name="diagnosa_sekunder3" id="diagnosa_sekunder3" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                </div>
                                <div class="col-sm-12 col-md-2 col-lg-3 mb-2">
                                    <div type="search" class="input-group">
                                        <input class="form-control form-control-sm" name="kd_diagnosa_sekunder3" id="kd_diagnosa_sekunder3" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                        <button class="btn btn-primary btn-sm btn-diagnosa" type="button" id="" onclick="listDiagnosaRanap('diagnosa','kd_diagnosa_sekunder3', 'diagnosa_sekunder3')"><i class="bi bi-search"></i></button>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <label for="diagnosa_sekunder4" class="mt-2">Diagnosa sekunder 4</label>
                                </div>
                                <div class="col-sm-12 col-md-7 col-lg-6 mb-2">
                                    <input type="search" class="form-control form-control-sm" name="diagnosa_sekunder4" id="diagnosa_sekunder4" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                </div>
                                <div class="col-sm-12 col-md-2 col-lg-3 mb-2">
                                    <div class="input-group">
                                        <input type="search" class="form-control form-control-sm" name="kd_diagnosa_sekunder4" id="kd_diagnosa_sekunder4" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                        <button class="btn btn-primary btn-sm btn-diagnosa" type="button" id="" onclick="listDiagnosaRanap('diagnosa','kd_diagnosa_sekunder4', 'diagnosa_sekunder4')"><i class="bi bi-search"></i></button>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <label for="diagnosa_sekunder5" class="mt-2">Diagnosa sekunder 5</label>
                                </div>
                                <div class="col-sm-12 col-md-7 col-lg-6 mb-2">
                                    <input type="search" class="form-control form-control-sm" name="diagnosa_sekunder5" id="diagnosa_sekunder5" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                </div>
                                <div class="col-sm-12 col-md-2 col-lg-3 mb-2">
                                    <div class="input-group">
                                        <input type="search" class="form-control form-control-sm" name="kd_diagnosa_sekunder5" id="kd_diagnosa_sekunder5" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                        <button class="btn btn-primary btn-sm btn-diagnosa" type="button" id="" onclick="listDiagnosaRanap('diagnosa','kd_diagnosa_sekunder5', 'diagnosa_sekunder5')"><i class="bi bi-search"></i></button>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <label for="diagnosa_sekunder6" class="mt-2">Diagnosa sekunder 6</label>
                                </div>
                                <div class="col-sm-12 col-md-7 col-lg-6 mb-2">
                                    <input type="search" class="form-control form-control-sm" name="diagnosa_sekunder6" id="diagnosa_sekunder6" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                </div>
                                <div class="col-sm-12 col-md-2 col-lg-3 mb-2">
                                    <div class="input-group">
                                        <input type="search" class="form-control form-control-sm" name="kd_diagnosa_sekunder6" id="kd_diagnosa_sekunder6" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                        <button class="btn btn-primary btn-sm btn-diagnosa" type="button" id="" onclick="listDiagnosaRanap('diagnosa','kd_diagnosa_sekunder6', 'diagnosa_sekunder6')"><i class="bi bi-search"></i></button>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <label for="diagnosa_sekunder7" class="mt-2">Diagnosa sekunder 7</label>
                                </div>
                                <div class="col-sm-12 col-md-7 col-lg-6 mb-2">
                                    <input type="search" class="form-control form-control-sm" name="diagnosa_sekunder7" id="diagnosa_sekunder7" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                </div>
                                <div class="col-sm-12 col-md-2 col-lg-3 mb-2">
                                    <div class="input-group">
                                        <input type="search" class="form-control form-control-sm" name="kd_diagnosa_sekunder7" id="kd_diagnosa_sekunder7" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                        <button class="btn btn-primary btn-sm btn-diagnosa" type="button" id="" onclick="listDiagnosaRanap('diagnosa','kd_diagnosa_sekunder7', 'diagnosa_sekunder7')"><i class="bi bi-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="separator m-2">3. Prosedur</div>
                            <div class="row">
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <label for="prosedur_utama" class="mt-2">Prosedur Utama</label>
                                </div>
                                <div class="col-sm-12 col-md-7 col-lg-6 mb-2">
                                    <input type="search" class="form-control form-control-sm" name="prosedur_utama" id="prosedur_utama" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                </div>
                                <div class="col-sm-12 col-md-2 col-lg-3 mb-2">
                                    <div class="input-group">
                                        <input type="search" class="form-control form-control-sm" name="kd_prosedur_utama" id="kd_prosedur_utama" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                        <button class="btn btn-primary btn-sm btn-diagnosa" type="button" id="" onclick="listDiagnosaRanap('prosedur','kd_prosedur_utama', 'prosedur_utama')"><i class="bi bi-search"></i></button>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <label for="prosedur_sekunder1" class="mt-2">Prosedur sekunder 1</label>
                                </div>
                                <div class="col-sm-12 col-md-7 col-lg-6 mb-2">
                                    <input type="search" class="form-control form-control-sm" name="prosedur_sekunder" id="prosedur_sekunder" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                </div>
                                <div class="col-sm-12 col-md-2 col-lg-3 mb-2">
                                    <div class="input-group">
                                        <input type="search" class="form-control form-control-sm" name="kd_prosedur_sekunder" id="kd_prosedur_sekunder" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                        <button class="btn btn-primary btn-sm btn-diagnosa" type="button" id="" onclick="listDiagnosaRanap('prosedur','kd_prosedur_sekunder', 'prosedur_sekunder')"><i class="bi bi-search"></i></button>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <label for="prosedur_sekunder2" class="mt-2">Prosedur sekunder 2</label>
                                </div>
                                <div class="col-sm-12 col-md-7 col-lg-6 mb-2">
                                    <input type="search" class="form-control form-control-sm" name="prosedur_sekunder2" id="prosedur_sekunder2" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                </div>
                                <div class="col-sm-12 col-md-2 col-lg-3 mb-2">
                                    <div class="input-group">
                                        <input type="search" class="form-control form-control-sm" name="kd_prosedur_sekunder2" id="kd_prosedur_sekunder2" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                        <button class="btn btn-primary btn-sm btn-diagnosa" type="button" id="" onclick="listDiagnosaRanap('prosedur','kd_prosedur_sekunder2', 'prosedur_sekunder2')"><i class="bi bi-search"></i></button>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <label for="prosedur_sekunder3" class="mt-2">Prosedur sekunder 3</label>
                                </div>
                                <div class="col-sm-12 col-md-7 col-lg-6 mb-2">
                                    <input type="search" class="form-control form-control-sm" name="prosedur_sekunder3" id="prosedur_sekunder3" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                </div>
                                <div class="col-sm-12 col-md-2 col-lg-3 mb-2">
                                    <div class="input-group">
                                        <input type="search" class="form-control form-control-sm" name="kd_prosedur_sekunder3" id="kd_prosedur_sekunder3" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                        <button class="btn btn-primary btn-sm btn-diagnosa" type="button" id="" onclick="listDiagnosaRanap('prosedur','kd_prosedur_sekunder3', 'prosedur_sekunder3')"><i class="bi bi-search"></i></button>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="separator mt-2 mb-2"></div>
                                <div class="mb-2 col-sm-12 col-md-12 col-lg-12">
                                    <label for="edukasi">Instruksi/Anjuran dan Edukasi (Follow up)</label>
                                    <textarea class="form-control" name="edukasi" id="edukasi" cols="30" rows="5"
                                        onfocus="removeZero(this)"
                                        onblur="cekKosong(this)">-</textarea>
                                </div>
                                <div class="row">
                                    <div class="mb-2 col-sm-12 col-md-6 col-lg-3">
                                        <label for="keadaan">Kondisi Pulang</label>
                                        <select class="form-select" name="keadaan" id="keadaan">
                                            <option value="Membaik">Membaik</option>
                                            <option value="Sembuh">Sembuh</option>
                                            <option value="Keadaan Khusus">Keadaan Khusus</option>
                                            <option value="Meninggal">Meninggal</option>
                                        </select>
                                    </div>
                                    <div class="mb-2 col-sm-12 col-md-6 col-lg-3">
                                        <label for="ket_keadaan"></label>
                                        <select class="form-select" name="ket_keadaan" id="ket_keadaan">
                                            <option value="SANAM">SANAM</option>
                                            <option value="BONAM">BONAM</option>
                                            <option value="MALAM">MALAM</option>
                                            <option value="BUBIA">BUBIA</option>
                                        </select>
                                    </div>
                                    <div class="mb-2 col-sm-12 col-md-6 col-lg-4">
                                        <label for="cara_keluar">Cara Keluar</label>
                                        <select class="form-select" name="cara_keluar" id="cara_keluar">
                                            <option value="Atas Izin Dokter">Atas Izin Dokter</option>
                                            <option value="Pindah RS">Pindah RS</option>
                                            <option value="Pulang Atas Permintaan Sendiri">Pulang Atas Permintaan Sendiri</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="mb-2 col-sm-12 col-md-6 col-lg-2">
                                        <label for="ket_keluar"></label>
                                        <input class="form-control form-control-sm" name="ket_keluar" id="ket_keluar" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-sm-12 col-md-2 col-lg-3">
                                    <label for="dilanjutkan">Dilanjutkan</label>
                                    <select class="form-select" name="dilanjutkan" id="dilanjutkan">
                                        <option value="Kembali Ke RS">Kembali Ke RS</option>
                                        <option value="RS Lain">RS Lain</option>
                                        <option value="Dokter Luar">Dokter Luar</option>
                                        <option value="Puskesmes">Puskesmas</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="mb-2 col-sm-12 col-md-4 col-lg-4">
                                    <label for="ket_dilanjutkan"></label>
                                    <input class="form-control form-control-sm" name="ket_dilanjutkan" id="ket_dilanjutkan" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                </div>
                                <div class="mb-2 col-sm-12 col-md-4 col-lg-5">
                                    <label for="tgl_kontrol">Tanggal Kontrol</label>
                                    <input class="form-control form-control-sm" name="tgl_kontrol" id="tgl_kontrol" onfocus="removeZero(this)" onblur="cekKosong(this)" />
                                    <input name="jam_kontrol" id="jam_kontrol" type="hidden" />
                                </div>
                                {{-- <div class="mb-2 col-sm-12 col-md-3 col-lg-2">
                                    <label for="jam_kontrol">Jam Kontrol</label>
                                    <input class="form-control form-control-sm" name="jam_kontrol" id="jam_kontrol" onfocus="removeZero(this)" onblur="cekKosong(this)" />
                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="mb-2 col-sm-12 col-md-2 col-lg-3">
                                    <label for="shk">SHK</label>
                                    <select class="form-select" name="shk" id="shk">
                                        <option value="-" selected>-</option>
                                        <option value="Belum">Belum</option>
                                        <option value="Sudah">Sudah</option>
                                    </select>
                                </div>
                                <div class="mb-2 col-sm-12 col-md-10 col-lg-9">
                                    <label for="shk_keterangan"></label>
                                    <input class="form-control form-control-sm" name="shk_keterangan" id="shk_keterangan" onfocus="removeZero(this)" onblur="cekKosong(this)" value='-' />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-sm-12 col-md-12 col-lg-12">
                                    <label for="obat_pulang">Obat Pulang <a href="javascript:void(0)" id="srcObatPulang" class="badge text-bg-primary"><i class="bi bi-search"></i></a></label>
                                    <textarea class="form-control" name="obat_pulang" id="obat_pulang" cols="30" rows="5"
                                        onfocus="removeZero(this)"
                                        onblur="cekKosong(this)">-</textarea>
                                </div>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal" style="font-size: 12px"><i class="bi bi-x-circle"></i> Keluar</button>
                <button type="button" class="btn btn-primary btn-sm btn-simpan" onclick="simpanResumeMedis()" style="font-size: 12px"><i class="bi bi-save"></i> Simpan</button>
                {{-- <button type="button" class="btn btn-warning btn-sm btn-asmed-anak-ubah" onclick="" style="font-size: 12px"><i class="bi bi-pencil"></i> Ubah</button> --}}
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        $(document).ready(() => {
            $('#formResumeRanap textarea[name=jalannya_penyakit]').css("display", "none");
            $('#tgl_kontrol').val("{{ date('d-m-Y') }}");
            $('#jam_kontrol').val("{{ date('H:i:s') }}");
            $('#tgl_kontrol').datepicker({
                format: 'dd-mm-yyyy',
                orientation: 'bottom',
                autoclose: true,
                todayHighlight: true,
            })
        })

        function resumeMedis(noRawat) {
            getRegPeriksa(noRawat).done((response) => {
                $('#formResumeRanap input[name=no_rawat]').val(response.no_rawat);
                $('#formResumeRanap input[name=pasien]').val(`${response.pasien.nm_pasien} (${response.pasien.jk})`);
                $('#formResumeRanap input[name=tgl_lahir]').val(`${formatTanggal(response.pasien.tgl_lahir)} (${hitungUmur(response.pasien.tgl_lahir)})`);
                $('#formResumeRanap input[name=kd_dokter]').val(`${response.dokter.kd_dokter}`);
                $('#formResumeRanap input[name=nm_dokter]').val(`${response.dokter.nm_dokter}`);
                $.map(response.diagnosa_pasien, (diagnosa) => {
                    if (diagnosa.prioritas == 1) {
                        $('#formResumeRanap input[name=diagnosa_utama]').val(diagnosa.penyakit.nm_penyakit)
                        $('#formResumeRanap input[name=kd_diagnosa_utama]').val(diagnosa.kd_penyakit)
                    }
                })


                if (response.bayi_gabung) {
                    const {
                        kamar_inap
                    } = response.bayi_gabung
                    kamar_inap.filter((item) => item.stts_pulang != 'Pindah Kamar').map((inap) => {
                        tgl_keluar = inap?.tgl_keluar == '0000-00-00' ? `${inap.tgl_keluar} ${inap.jam_keluar}` : `${formatTanggal(inap.tgl_keluar)} ${inap.jam_keluar} `;
                        $('#formResumeRanap input[name=kamar]').val(`${inap.kamar.bangsal.nm_bangsal} ( ${response.penjab.png_jawab} )`);
                        $('#formResumeRanap input[name=tgl_masuk]').val(`${formatTanggal(response.tgl_registrasi)} ${response.jam_reg}`);
                        $('#formResumeRanap input[name=tgl_keluar]').val(`${tgl_keluar}`);
                        $('#formResumeRanap input[name=diagnosa_awal]').val(`${inap.diagnosa_awal}`);

                    })

                } else if (response.kamar_inap.length) {
                    kamarInap = response.kamar_inap;
                    $.map(response.kamar_inap, (inap) => {
                        tgl_keluar = inap.tgl_keluar == '0000-00-00' ? `${inap.tgl_keluar} ${inap.jam_keluar}` : `${formatTanggal(inap.tgl_keluar)} ${inap.jam_keluar} `;
                        $('#formResumeRanap input[name=kamar]').val(`${inap.kamar.bangsal.nm_bangsal} ( ${response.penjab.png_jawab} )`);
                        $('#formResumeRanap input[name=tgl_masuk]').val(`${formatTanggal(response.tgl_registrasi)} ${response.jam_registrasi}`);
                        $('#formResumeRanap input[name=tgl_keluar]').val(`${tgl_keluar}`);
                        $('#formResumeRanap input[name=diagnosa_awal]').val(`${inap.diagnosa_awal}`);
                    })
                }

                getResumeMedis(noRawat).done((resume) => {
                    if (Object.keys(resume).length) {
                        $.each(resume, (index, value) => {
                            select = $(`#formResumeRanap select[name=${index}]`);
                            input = $(`#formResumeRanap input[name=${index}]`);
                            textarea = $(`#formResumeRanap textarea[name=${index}]`);

                            if (select.length) {
                                $(`#formResumeRanap select[name=${index}]`).val(value)
                            } else if (input.length) {
                                $(`#formResumeRanap input[name=${index}]`).val(value)
                            } else {
                                $(`#formResumeRanap textarea[name=${index}]`).val(value)
                            }
                        })
                    }
                })

                // set action pencarian
                $('#formResumeRanap #srcKeluhan').attr('onclick', `listRiwayatPemeriksaan('${response.no_rawat}', 'keluhan')`);
                $('#formResumeRanap #srcPemeriksaan').attr('onclick', `listRiwayatPemeriksaan('${response.no_rawat}', 'pemeriksaan')`);
                $('#formResumeRanap #srcObat').attr('onclick', `listRiwayatPemeriksaan('${response.no_rawat}', 'obat')`);
                $('#formResumeRanap #srcObatPulang').attr('onclick', `listRiwayatPemeriksaan('${response.no_rawat}', 'obatpulang')`);
                $('#formResumeRanap #srcLab').attr('onclick', `listHasilLab('${response.no_rawat}', '${response.no_rkm_medis}', '${response.kd_poli}')`);
                $('#formResumeRanap #srcRadiologi').attr('onclick', `listHasilRadiologi('${response.no_rawat}', '${response.no_rkm_medis}', '${response.kd_poli}')`);
                // $('#formResumeRanap #srcObat').attr('onclick', `listPemberianObat('${response.no_rawat}')`);
            });
            $('#modalResumeRanap').modal('show')
        }

        function listRiwayatPemeriksaan(noRawat, parameter) {
            pemeriksaan = '';
            $('#tbListResume').DataTable({
                destroy: true,
                processing: true,
                ordering: true,
                paging: false,
                scrollY: true,
                info: false,
                ajax: {
                    url: "/erm/soap/get/table",
                    data: {
                        'no_rawat': noRawat,
                        'parameter': parameter,
                        'pemeriksaan': pemeriksaan,
                    },

                },
                createdRow: function(row, data, dataIndex) {
                    $(row).attr('class', 'row-' + dataIndex);
                    $(row).attr('onclick', `setTextRiwayat('${parameter}', ${dataIndex})`);
                },

                columns: [{
                        data: 'tanggal',
                        render: function(data, type, row, meta) {
                            if (data) {
                                // jika ada tanggal asmed
                                return tanggal = splitTanggal(data)
                            } else {
                                return tanggal = splitTanggal(row.tgl_perawatan)
                            }
                            return tanggal
                        }
                    },
                    {
                        data: 'jam',
                        render: function(data, type, row, meta) {
                            if (data) {
                                jam = data
                            } else {
                                jam = row.jam_rawat
                            }

                            return jam;
                        }
                    },
                    {
                        data: 'hasil',
                        render: function(data, type, row, meta) {
                            if (data) {
                                hasilPeriksa = data;
                            } else {
                                if (parameter == 'pemeriksaan') {
                                    hasilPeriksa = `Kesadaran : ${row.kesadaran} \nTanda Vital  : GCS: ${row.gcs}, TD : ${row.tensi} mmHG, Nadi : ${row.nadi} x/mnt, RR : ${row.respirasi} x/mnt, Suhu : ${row.suhu_tubuh} °C, \nHasil Pemeriksaan : ${row[parameter]}.\n`
                                } else if (parameter == 'obat' || parameter == "obatpulang") {
                                    hasilPeriksa = row['rtl']
                                } else {
                                    hasilPeriksa = row[parameter]
                                }
                            }
                            return hasilPeriksa
                        }
                    },
                    {
                        data: 'nm_petugas',
                        render: function(data, type, row, meta) {
                            if (data) {
                                petugas = data;
                            } else {
                                petugas = row.petugas.nama
                            }
                            return petugas
                        }
                    },

                ],
                "language": {
                    "zeroRecords": "Tidak ada data pemeriksaan",
                    "infoEmpty": "Tidak ada data pemeriksaan",
                    "search": "Cari",
                },
                initComplete: (response) => {
                    //menambahkan baris baru jika untuk mengambil asesmen medis UGD
                    addPemeriksaanByAsmedUgd(parameter, noRawat)

                }
            })
            $('.parameter').text(`${parameter.toUpperCase()}`)
            $('#modalListResume .modal-title').text(`RIWAYAT ${parameter.toUpperCase()}`)
            $('#tbListResume .petugas').css('display', '')
            $('#modalListResume').modal('show')
        }


        function addPemeriksaanByAsmedUgd(parameter, no_rawat) {
            // inisasi table listResume
            const table = new DataTable('#tbListResume');
            getAsmedUgd(no_rawat).done((response) => {
                // memastikan ada data asmed ugd
                if (Object.keys(response).length) {
                    // inisiasi data yanag akan ditambahkan
                    let dataRow = {
                        'tanggal': response.tanggal.split(' ')[0],
                        'jam': response.tanggal.split(' ')[1],
                        'nm_petugas': `${response.dokter.nm_dokter}`,
                    }
                    // pengkondisian parameter data yang dicari
                    if (parameter == 'pemeriksaan') {
                        dataRow['hasil'] = `Kesadaran : ${response.kesadaran} \n Tanda Vital : GCS : ${response.gcs}, TD : ${response.td} mmHg, Nadi : ${response.nadi} x/menit, RR : ${response.rr}, Suhu : ${response.suhu} °C\nHasil Pemeriksaan : ${response.ket_fisik}\n `
                    } else if (parameter == 'obat' || parameter == 'obatpulang') {
                        dataRow['hasil'] = response.tata
                    } else if (parameter == 'keluhan') {
                        dataRow['hasil'] = response.rps
                    }

                    // tambah baris di datatable tbListResume
                    table.row.add(dataRow).draw().node();
                }
            })
        }

        function listHasilRadiologi(no_rawat) {
            getHasilRadiologi(no_rawat).done((response) => {
                $('#tbListResume').DataTable({
                    destroy: true,
                    processing: true,
                    ordering: true,
                    paging: false,
                    scrollY: true,
                    info: false,
                    data: response,
                    createdRow: function(row, data, dataIndex) {
                        $(row).attr('class', 'row-' + dataIndex);
                        $(row).attr('onclick', `setTextRiwayat('radiologi', ${dataIndex})`);
                    },
                    columns: [{
                            data: 'tgl_periksa',
                            render: function(data, type, row, meta) {
                                return splitTanggal(data)
                            }
                        },
                        {
                            data: 'jam',
                            render: function(data, type, row, meta) {
                                return data
                            }
                        },
                        {
                            data: 'hasil',
                            render: function(data, type, row, meta) {
                                return data
                            }

                        },
                        {
                            data: 'periksa_radiologi',
                            render: function(data, type, row, meta) {
                                data.map((item) => {
                                    if (item.tgl_periksa == row.tgl_periksa && item.jam == row.jam) {
                                        dokter = item.dokter.nm_dokter
                                    }
                                })
                                return dokter
                            }
                        },

                    ],
                    "language": {
                        "zeroRecords": "Tidak ada data pemeriksaan",
                        "infoEmpty": "Tidak ada data pemeriksaan",
                        "search": "Cari",
                    }
                })
                // $('#modalListResume #btn-pemeriksaan').attr(`onclick`, `cariPemeriksaanLab('${no_rawat}', this)`)
            })
            $('.parameter').text(`HASIL RADIOLOGI`)
            $('#modalListResume .modal-title').text(`RIWAYAT RADIOLOGI`)
            $('#modalListResume input[name=no_rawat]').val(no_rawat)
            $('#modalListResume input[name=parameter]').val('radiologi')
            $('#modalListResume').modal('show')
        }

        function listHasilLab(noRawat, noRkmMedis, poli = '') {
            parameter = 'laborat'
            $('#tbListResume').DataTable({
                destroy: true,
                processing: true,
                ordering: true,
                paging: false,
                scrollY: true,
                info: false,
                ajax: {
                    url: "/erm/lab/ambil/table",
                    data: {
                        'no_rawat': noRawat,
                        'no_rkm_medis': noRkmMedis,
                        'kd_poli': poli,
                    },
                },
                createdRow: function(row, data, dataIndex) {
                    $(row).attr('class', 'row-' + dataIndex);
                    $(row).css('cursor', 'pointer');
                    $(row).attr('onclick', `setTextRiwayat('${parameter}', ${dataIndex})`);
                },

                columns: [{
                        data: '',
                        render: function(data, type, row, meta) {

                            return `${splitTanggal(row.tgl_periksa)} </br> <span style="font-size:10px;font-style:italic">${row.no_rawat}</span>`
                        }
                    },
                    {
                        data: '',
                        render: function(data, type, row, meta) {
                            return row.jam
                        }
                    },
                    {
                        data: '',
                        render: function(data, type, row, meta) {
                            return `${row.template.Pemeriksaan} : ${row.nilai} ${row.template.satuan}`
                        }
                    },
                    {
                        data: '',
                        render: function(data, type, row, meta) {
                            return '-'
                        }
                    },

                ],
                "language": {
                    "zeroRecords": "Tidak ada data pemeriksaan",
                    "infoEmpty": "Tidak ada data pemeriksaan",
                    "search": "Cari",
                }
            })

            $('.parameter').text(`${parameter.toUpperCase()}`)
            $('#modalListResume .modal-title').text(`RIWAYAT ${parameter.toUpperCase()}`)
            $('#modalListResume input[name=no_rawat]').val(noRawat)
            $('#modalListResume input[name=parameter]').val(parameter)
            $('#modalListResume #btn-pemeriksaan').attr(`onclick`, `cariPemeriksaanLab('${noRawat}', this)`)
            $('#modalListResume').modal('show')
        }

        function listPemberianObat(noRawat) {
            parameter = 'obat';
            $('#tbListResume').DataTable({
                destroy: true,
                processing: true,
                ordering: true,
                paging: false,
                scrollY: true,
                info: false,
                ajax: {
                    url: "/erm/obat/pemberian/table",
                    data: {
                        'no_rawat': noRawat,
                        'parameter': parameter,
                    },
                },
                createdRow: function(row, data, dataIndex) {
                    $(row).attr('class', 'row-' + dataIndex);
                    $(row).attr('onclick', `setTextRiwayat('${parameter}', ${dataIndex})`);
                },

                columns: [{
                        data: '',
                        render: function(data, type, row, meta) {
                            return splitTanggal(row.tgl_perawatan)
                        }
                    },
                    {
                        data: '',
                        render: function(data, type, row, meta) {
                            return row.jam
                        }
                    },
                    {
                        data: '',
                        render: function(data, type, row, meta) {
                            return `${row.databarang.nama_brng} : ${row.jml} ${row.databarang.kode_satuan.satuan}`
                        }
                    },
                    {
                        data: '',
                        render: function(data, type, row, meta) {
                            return '-'
                        }
                    },

                ],
                "language": {
                    "zeroRecords": "Tidak ada data pemeriksaan",
                    "infoEmpty": "Tidak ada data pemeriksaan",
                    "search": "Cari",
                }
            })
            $('.parameter').text(`${parameter.toUpperCase()}`)
            $('#modalListResume .modal-title').text(`RIWAYAT ${parameter.toUpperCase()}`)
            $('#modalListResume input[name=no_rawat]').val(noRawat)
            $('#modalListResume input[name=parameter]').val(parameter)
            $('#modalListResume #btn-pemeriksaan').attr(`onclick`, `cariPemberianObat('${noRawat}', this)`)
            $('#modalListResume').modal('show')
        }

        function listDiagnosaRanap(dxpx, kode, nama) {
            parameter = 'diagnosa';
            const keyword = $('#txt-diagnosa').val() ? $('#txt-diagnosa').val() : '';
            switch (dxpx) {
                case 'diagnosa':
                    getDiagnosa(keyword).done((response) => {
                        let no = 1;
                        $.map(response, (dx) => {
                            row = `<tr class="${no}" onclick="setTextRiwayat('${parameter}', ${no} )" style="cursor:pointer">`
                            row += `<td>${dx.kd_penyakit}</td>`
                            row += `<td>${dx.nm_penyakit}</td>`
                            row += `<td>${dx.keterangan}</td>`
                            row += `</tr>`
                            no++;
                            $('#tbListDiagnosa tbody').append(row);
                        })
                    });
                    break;
                case 'prosedur':
                    getProsedur(keyword).done((response) => {
                        let no = 1;
                        $.map(response, (px) => {
                            row = `<tr class="${no}" onclick="setTextRiwayat('${parameter}', ${no} )" style="cursor:pointer">`
                            row += `<td>${px.kode}</td>`
                            row += `<td>${px.deskripsi_pendek}</td>`
                            row += `<td>${px.deskripsi_panjang}</td>`
                            row += `</tr>`
                            no++;
                            $('#tbListDiagnosa tbody').append(row);
                        })
                    });
                    break;
                default:
                    break;
            }
            $('#modalListDiagnosa').modal('show')
            $('#modalListDiagnosa #btn-diagnosa').attr(`onclick`, `cariDiagnosa(this)`)
            $('#modalListDiagnosa .modal-title').text(`DAFTAR  ${dxpx.toUpperCase()}`)
            $('#modalListDiagnosa .dxpx').html(`KODE ${dxpx.toUpperCase()}`)
            $('#modalListDiagnosa input[name=kode_diagnosa]').val(kode)
            $('#modalListDiagnosa input[name=nama_diagnosa]').val(nama)
            $('#modalListDiagnosa input[name=dxpx]').val(dxpx)
        }

        function setTextRiwayat(params, no) {
            switch (params) {
                case 'keluhan':
                    element = $('#formResumeRanap textarea[name=keluhan_utama]');
                    value = element.val() != '-' ? element.val().replaceAll('&lt;', '<').replaceAll('&gt;', '>') + '\n' : '';
                    value += $('#tbListResume tbody .row-' + no).find("td").eq(2).html().replaceAll('&lt;', '<').replaceAll('&gt;', '>');
                    element.val(value)
                    $('#modalListResume').modal('hide')
                    break;
                case 'pemeriksaan':
                    element = $('#formResumeRanap textarea[name=pemeriksaan_fisik]');
                    value = element.val() != '-' ? element.val().replaceAll('&lt;', '<').replaceAll('&gt;', '>') + '\n' : '';
                    value += $('#tbListResume tbody .row-' + no).find("td").eq(2).html().replaceAll('&lt;', '<').replaceAll('&gt;', '>');
                    element.val(value)
                    $('#modalListResume').modal('hide')
                    break;
                case 'laborat':
                    element = $('#formResumeRanap textarea[name=hasil_laborat]');
                    value = element.val() != '-' ? element.val() + ', ' : '';
                    value += $('#tbListResume tbody .row-' + no).find("td").eq(2).html();
                    element.val(value)
                    $('#modalListResume').modal('hide')
                    break;
                case 'radiologi':
                    element = $('#formResumeRanap textarea[name=pemeriksaan_penunjang]');
                    value = element.val() != '-' ? element.val() + ', ' : '';
                    value += $('#tbListResume tbody .row-' + no).find("td").eq(2).html();
                    element.val(value)
                    $('#modalListResume').modal('hide')
                    break;
                case 'obat':
                    element = $('#formResumeRanap textarea[name=obat_di_rs]');
                    value = element.val() != '-' ? element.val() + ', ' : '';
                    value += $('#tbListResume tbody .row-' + no).find("td").eq(2).html();
                    element.val(value)
                    $('#modalListResume').modal('hide')
                    break;
                case 'obatpulang':
                    element = $('#formResumeRanap textarea[name=obat_pulang]');
                    value = element.val() != '-' ? element.val() + ', ' : '';
                    value += $('#tbListResume tbody .row-' + no).find("td").eq(2).html();
                    element.val(value)
                    $('#modalListResume').modal('hide')
                    break;
                case 'diagnosa':
                    valKode = $('#tbListDiagnosa tbody .' + no).find("td").eq(0).html();
                    valNama = $('#tbListDiagnosa tbody .' + no).find("td").eq(1).html();
                    fieldKode = $('.filterListDiagnosa input[name=kode_diagnosa]').val();
                    fieldNama = $('.filterListDiagnosa input[name=nama_diagnosa]').val();
                    $('#' + fieldKode).val(valKode)
                    $('#' + fieldNama).val(valNama)
                    $('#modalListDiagnosa').modal('hide')
                    break;
                default:
                    break;
            }

        }


        function insertResumeMedis(data) {
            const resume = $.ajax({
                url: '/erm/resume/ranap/insert',
                data: data,
                method: 'POST',
                beforeSend: () => {
                    $('#btn-simpan').prop('disabled', true);
                    swal.fire({
                        title: 'Memproses Data',
                        text: 'Mohon Tunggu',
                        showConfirmButton: false,
                        footer: '<img width="25" src="http://192.168.100.33/simrsiav2/assets/gambar/rsiap.ico"><b>&nbsp;RSIA AISYIYAH PEKAJANGAN</b>',
                        didOpen: () => {
                            swal.showLoading();
                        }
                    })
                },
                error: (request) => {
                    alertSessionExpired(request.status)
                }
            })

            return resume;
        }

        function editResumeMedis(data) {
            const resume = $.ajax({
                url: '/erm/resume/ranap/edit',
                data: data,
                method: 'POST',
                beforeSend: () => {
                    $('#btn-simpan').prop('disabled', true);
                    swal.fire({
                        title: 'Memproses Data',
                        text: 'Mohon Tunggu',
                        showConfirmButton: false,
                        footer: '<img width="25" src="http://192.168.100.33/simrsiav2/assets/gambar/rsiap.ico"><b>&nbsp;RSIA AISYIYAH PEKAJANGAN</b>',
                        didOpen: () => {
                            swal.showLoading();
                        }
                    })
                },
                success: () => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sukses !',
                        text: 'Data Berhasil Diproses',
                        showConfirmButton: false,
                        timer: 1500
                    })

                },
                error: (request) => {
                    if (request.status == 401)
                        alertSessionExpired(request.status)
                    alertErrorAjax(request)

                }
            })

            return resume;

        }

        function simpanResumeMedis() {
            except = ['tgl_keluar', 'nm_dokter', 'tgl_lahir', 'tgl_masuk', 'pasien', 'kamar']
            data = getDataForm('#formResumeRanap', ['input', 'textarea', 'select'], except)
            data.kontrol = `${splitTanggal(data.tgl_kontrol)} ${data.jam_kontrol}`

            getResumeMedis(data.no_rawat).done((response) => {

                if (Object.keys(response).length == 0) {
                    insertResumeMedis(data).done(() => {
                        notifSend(
                            $('#formResumeRanap input[name=kd_dokter]').val(),
                            "Notifikasi Resume Pasien",
                            `Resume pasien atas nama ${$('#formResumeRanap input[name=pasien]').val()}. Mohon segera cek dan verifikasi pengisian.`,
                            $('#formResumeRanap input[name=no_rawat]').val(),
                            "Ranap",
                            "resume"
                        );
                        alertSuccessAjax('Berhasil menambahkan resume medis').then(() => {
                            $('#tb_ranap').DataTable().destroy();
                            tb_ranap();
                            $('#modalResumeRanap').modal('hide');
                        })
                    })
                } else {
                    editResumeMedis(data).done(() => {
                        alertSuccessAjax('Berhasil mengubah resume medis').then(() => {
                            $('#tb_ranap').DataTable().destroy();
                            tb_ranap();
                            $('#modalResumeRanap').modal('hide');
                        })
                    })
                }
            })

        }
    </script>
@endpush
