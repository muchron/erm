<div class="modal fade" id="modalSoap" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">PEMERIKSAAN & RESEP</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" class="form-soap">
                    <div class="row">
                        <label for="nomor_rawat" class="col-lg-2 col-sm-12 col-form-label" style="font-size:12px">No.
                            Rawat</label>
                        <div class="col-lg-2 col-sm-12 mb-2">
                            <input type="text" class="form-control form-control-sm" id="nomor_rawat"
                                name="nomor_rawat" placeholder=""
                                style="font-size:12px;min-height:12px;border-radius:0;" readonly>
                        </div>
                        <div class="col-lg-2 col-sm-12 mb-2">
                            <input type="text" class="form-control form-control-sm" id="no_rm" name="no_rm"
                                placeholder="" style="font-size:12px;min-height:12px;border-radius:0;" readonly>
                        </div>
                        <div class="col-lg-3 col-sm-12 mb-2">
                            <input type="text" class="form-control form-control-sm" id="nama_pasien"
                                name="nama_pasien" placeholder=""
                                style="font-size:12px;min-height:12px;border-radius:0;" readonly>
                        </div>
                        <div class="col-lg-2 col-sm-12 mb-2">
                            <input type="text" class="form-control form-control-sm" id="p_jawab" name="p_jawab"
                                placeholder="" style="font-size:12px;min-height:12px;border-radius:0;" readonly>
                        </div>
                    </div>
                    <hr style="margin:2px">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <table class="borderless">
                                <tr>
                                    <td width="20%">Dilakukan Oleh :</td>
                                    <td width="30%" colspan="2">
                                        <input type="text" class="form-control form-control-sm" id="nik"
                                            name="nik" placeholder=""
                                            style="font-size:12px;min-height:12px;border-radius:0;" readonly>
                                    </td>
                                    <td width="45%" colspan="2">
                                        <input type="search" class="form-control form-control-sm" id="nama"
                                            name="nama" placeholder=""
                                            style="font-size:12px;min-height:12px;border-radius:0"
                                            onkeyup="cariPetugas(this)" autocomplete="off">
                                        <div class="list_petugas"></div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Subjek : </td>
                                    <td colspan="3">
                                        <textarea class="form-control" name="subjek" id="subjek" cols="30" rows="4"
                                            style="font-size:12px;min-height:12px;border-radius:0;resize:none" onfocus="removeZero(this)"
                                            onblur="cekKosong(this)"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Objek : </td>
                                    <td colspan="3">
                                        <textarea class="form-control" name="objek" id="objek" cols="30" rows="4"
                                            style="font-size:12px;min-height:12px;border-radius:0;resize:none" onfocus="removeZero(this)"
                                            onblur="cekKosong(this)"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="3">
                                        <table>
                                            <tr>

                                                <td width="12%">
                                                    Suhu (<sup>0</sup>C) : <input type="text"
                                                        class="form-control form-control-sm" id="suhu"
                                                        name="suhu" placeholder="" maxlength="5"
                                                        style="font-size:12px;min-height:12px;border-radius:0;"
                                                        value="-" onfocus="removeZero(this)"
                                                        onblur="cekKosong(this)">
                                                </td>
                                                <td width="12%">
                                                    Tinggi (Cm): <input type="text"
                                                        class="form-control form-control-sm" id="tinggi"
                                                        name="tinggi" placeholder="" maxlength="5"
                                                        style="font-size:12px;min-height:12px;border-radius:0;"
                                                        onfocus="removeZero(this)" onblur="cekKosong(this)">
                                                </td>
                                                <td width="12%">
                                                    Berat (Kg) : <input type="text"
                                                        class="form-control form-control-sm" id="berat"
                                                        name="berat" placeholder="" maxlength="5"
                                                        style="font-size:12px;min-height:12px;border-radius:0;"
                                                        onfocus="removeZero(this)" onblur="cekKosong(this)">
                                                </td>
                                                <td width="12%">
                                                    Tensi : <input type="text" class="form-control form-control-sm"
                                                        id="tensi" name="tensi" placeholder="" maxlength="8"
                                                        style="font-size:12px;min-height:12px;border-radius:0;"
                                                        onfocus="removeZero(this)" onblur="cekKosong(this)">
                                                </td>
                                                <td width="12%">
                                                    Respirasi (/mnt): <input type="text"
                                                        class="form-control form-control-sm" id="respirasi"
                                                        name="respirasi" placeholder="" maxlength="3"
                                                        style="font-size:12px;min-height:12px;border-radius:0;"
                                                        onfocus="removeZero(this)" onblur="cekKosong(this)">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="12%">
                                                    Nadi (/mnt) : <input type="text"
                                                        class="form-control form-control-sm" id="nadi"
                                                        name="nadi" placeholder="" maxlength="3"
                                                        style="font-size:12px;min-height:12px;border-radius:0;"
                                                        onfocus="removeZero(this)" onblur="cekKosong(this)">
                                                </td>
                                                <td width="12%">
                                                    SpO2 (%): <input type="text"
                                                        class="form-control form-control-sm" id="spo2"
                                                        name="spo2" placeholder="" maxlength="3"
                                                        style="font-size:12px;min-height:12px;border-radius:0;"
                                                        onfocus="removeZero(this)" onblur="cekKosong(this)">
                                                </td>
                                                <td width="12%">
                                                    GCS (E,V,M): <input type="text"
                                                        class="form-control form-control-sm" id="gcs"
                                                        name="gcs" placeholder="" maxlength="10"
                                                        style="font-size:12px;min-height:12px;border-radius:0;"
                                                        onfocus="removeZero(this)" onblur="cekKosong(this)">
                                                </td>
                                                <td width="12%">
                                                    Kesadaran :
                                                    <select class="form-select" name="kesadaran" id="kesadaran"
                                                        style="font-size:12px;min-height:12px;border-radius:0;">
                                                        <option value="Compos Mentis">Compos Mentis</option>
                                                        <option value="Somnolence">Somnolence</option>
                                                        <option value="Sopor">Sopor</option>
                                                        <option value="Coma">Coma</option>
                                                    </select>
                                                </td>
                                                <td width="12%">
                                                    Alergi :
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="alergi" name="alergi" placeholder=""
                                                        style="font-size:12px;min-height:12px;border-radius:0;"
                                                        onfocus="removeZero(this)" onblur="cekKosong(this)">
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Asesmen : </td>
                                    <td colspan="3">
                                        <textarea class="form-control" name="asesmen" id="asesmen" cols="30" rows="4"
                                            style="font-size:12px;min-height:12px;border-radius:0;resize:none" onfocus="removeZero(this)"
                                            onblur="cekKosong(this)"></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Instruksi : </td>
                                    <td colspan="3">
                                        <textarea class="form-control" name="instruksi" id="instruksi" cols="30" rows="4"
                                            style="font-size:12px;min-height:12px;border-radius:0;resize:none" onfocus="removeZero(this)"
                                            onblur="cekKosong(this)"></textarea>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <table class="borderless mb-3" width="100%">
                                <tr>
                                    <td>Plan : </td>
                                    <td colspan="3">
                                        <textarea class="form-control" name="plan" id="plan" cols="30" rows="8"
                                            style="font-size:12px;min-height:12px;border-radius:0;resize:none" readonly></textarea>
                                    </td>
                                </tr>
                            </table>
                            <input type="hidden" class="no_resep form-control form-control-sm" />
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="nav-item">
                                    <a href="#umum" class="nav-link active" data-bs-toggle="tab">NON RACIKAN</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#racikan" class="nav-link" data-bs-toggle="tab">RACIKAN</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#riwayat" class="nav-link" data-bs-toggle="tab">RIWAYAT RESEP</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="umum">
                                    <table class="table table-stripped table-responsive" id="tb-resep"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th width="18%">No. Resep</th>
                                                <th>Nama Obat</th>
                                                <th width="10%">Jumlah</th>
                                                <th>Aturan Pakai</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body_umum">

                                        </tbody>
                                    </table>
                                    <button class="btn btn-primary btn-sm tambah_umum" type="button"
                                        onclick="tambahUmum()">Tambah
                                        Obat</button>
                                    <button class="btn btn-success btn-sm btn_simpan_resep" type="button"
                                        style="visibility: hidden">Simpan
                                        Resep</button>
                                </div>
                                <div class="tab-pane fade" id="racikan">
                                    <table class="table table-responsive" id="tb-resep-racikan" width="100%">
                                        <thead>
                                            <tr>
                                                <th width="10%">No Racik</th>
                                                <th>No Resep</th>
                                                <th>Nama Racikan</th>
                                                <th>Metode Racikan</th>
                                                <th width="10%">Jumlah</th>
                                                <th>Aturan Pakai</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="body_racikan">

                                        </tbody>
                                    </table>
                                    <button class="btn btn-primary btn-sm tambah_racik" type="button"
                                        onclick="tambahRacikan()">Tambah
                                        Racikan</button>
                                </div>
                                <div class="tab-pane fade" id="riwayat">
                                    <table class="table table-responsive" id="tb-resep-riwayat" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>No Resep</th>
                                                <th>Obat/Racikan</th>
                                                <th>Jumlah</th>
                                                <th>Aturan Pakai</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="body_riwayat" class="align-top">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal"><i
                        class="bi bi-x-circle"></i> Keluar</button>
                <button type="button" class="btn btn-primary btn-sm" onclick="simpanSoap()"><i
                        class="bi bi-save"></i>
                    Simpan</button>
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        function hapusBaris(param) {
            console.log($(this).parent().remove())
        }

        // function riwayatResep(no_rm) {
        //     // no_rm = $('#no_rm').val();
        //     // console.log(no_rm)
        //     $.ajax({
        //         url: '/erm/pasien/ambil/' + no_rm,
        //         method: 'GET',
        //         success: function(response) {
        //             html = '';
        //             $.map(response.reg_periksa, function(reg) {
        //                 if (Object.keys(reg.resep_obat).length > 0) {
        //                     console.log(reg)
        //                     $.map(reg.resep_obat, function(resep) {

        //                         html += '<tr>';
        //                         if (Object.keys(resep.resep_dokter).length > 0 || Object.keys(
        //                                 resep.resep_racikan).length > 0) {
        //                             html += '<td>' + formatTanggal(resep.tgl_peresepan) +
        //                                 '</td>';
        //                             html += '<td>' + resep.no_resep + '</td>';
        //                             html += '<td class="align-top">';
        //                             // html += ;
        //                             $.map(resep.resep_dokter, function(dokter) {
        //                                 html += dokter.data_barang.nama_brng + '<br/>';
        //                             })
        //                             $.map(resep.resep_racikan, function(racik) {
        //                                 html += '<b>Racikan : ' + racik
        //                                     .nama_racik + '</b><br/>';
        //                                 html += '<ul>';
        //                                 $.map(racik.detail_racikan, function(detail) {
        //                                     html += '<li>';
        //                                     html += detail.data_barang
        //                                         .nama_brng;
        //                                     html += '</li>';
        //                                 })
        //                                 html += '</ul>';
        //                             })
        //                             html += '</td>';
        //                             html += '<td class="align-top">';
        //                             $.map(resep.resep_dokter, function(dokter) {
        //                                 html += dokter.jml +
        //                                     '<br/>';
        //                             })
        //                             $.map(resep.resep_racikan, function(racik) {
        //                                 html += racik.jml_dr +
        //                                     '<br/>';
        //                             })
        //                             html += '</td>';
        //                             html += '<td class="align-top">';
        //                             $.map(resep.resep_dokter, function(dokter) {
        //                                 html += dokter.aturan_pakai +
        //                                     '<br/>';
        //                             })
        //                             $.map(resep.resep_racikan, function(racik) {
        //                                 html += racik.aturan_pakai +
        //                                     '<br/>';
        //                             })
        //                             html += '</td>';
        //                             // html +=
        //                             //     '<td><button class="btn btn-warning btn-sm" onclick="copyResep(\'' +
        //                             //     resep.no_resep +
        //                             //     '\')" type="button"><i class="bi bi-clipboard-check-fill"></i> Copy</button></td>';
        //                         }
        //                         html += '</tr>';
        //                     })
        //                 }
        //             })

        //             $('#tb-resep-riwayat tbody').append(html)
        //         }
        //     })
        // }

        function setNoRacik(no_resep) {
            let no_racik = '';
            $.ajax({
                url: '/erm/resep/racik/ambil',
                method: 'GET',
                dataType: 'JSON',
                async: false,
                data: {
                    no_resep: no_resep,
                },
                success: function(response) {
                    if (Object.keys(response).length > 1) {
                        $.map(response, function(data) {
                            no_racik = data.no_racik
                        })
                        no_racik = parseInt(no_racik) + 1;
                    } else {
                        no_racik = 1
                    }

                }
            })
            return no_racik;


        }

        function copyResep(resep) {
            resep = ambilResep(resep);
            console.log('Data Resep', resep);
            Swal.fire({
                title: 'Yakin ?',
                text: "Anda mengcopy resep ini",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak',
            }).then((result) => {
                let dataResep;
                let dataObat;
                let dataRacikan;
                let no_resep = setNoResep();
                let no_rawat = $('#nomor_rawat').val();
                $.map(resep, function(resep) {

                    $.ajax({
                        url: '/erm/resep/obat/simpan',
                        data: {
                            '_token': "{{ csrf_token() }}",
                            'no_resep': no_resep,
                            'no_rawat': no_rawat,
                            'kd_dokter': "{{ Request::get('dokter') }}",
                        },
                        method: 'POST',
                        success: function(response) {
                            if (Object.keys(resep.resep_racikan).length > 0) {
                                // console.log(setNoRacik(no_resep))
                                $.map(resep.resep_racikan, function(racik) {
                                    $.ajax({
                                        url: '/erm/resep/racik/simpan',
                                        method: 'POST',
                                        data: {
                                            '_token': "{{ csrf_token() }}",
                                            'no_resep': no_resep,
                                            'no_racik': setNoRacik(no_resep),
                                            'nama_racik': racik.nama_racik,
                                            'kd_racik': racik.kd_racik,
                                            'jml_dr': racik.jml_dr,
                                            'aturan_pakai': racik.aturan_pakai,
                                            'keterangan': racik.keterangan,
                                        },
                                        success: function(response) {

                                        }
                                    })
                                })
                            }


                        }
                    })
                })

                // console.log('Hasil Data', dataResep)


            })
        }

        function simpanObat() {
            if ($('.kode_obat').val()) {
                $.ajax({
                    url: '/erm/resep/umum/simpan',
                    method: 'POST',
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'no_resep': $('.no_resep').val(),
                        'kode_brng': $('.kode_obat').val(),
                        'jml': $('.jml').val(),
                        'aturan_pakai': $('.aturan_pakai').val() + ' ' + $(
                                '.keterangan')
                            .val(),
                    },
                    success: function(response) {
                        html = $('#plan').val();

                        html += $('.nama_obat').val() + ' ' + $('.jml').val() + ' ' + $(
                            '.aturan_pakai').val() + '\n';

                        $('#plan').val(html);
                        cekResep($('#nomor_rawat').val())
                    },
                    error: function(request, status, error) {
                        Swal.fire(
                            'Gagal !',
                            'Obat tidak tersimpan<br/>' + request.responseJSON.message,
                            'error',
                        )

                    }
                }).done(function() {
                    tulisPlan()
                })
            } else {
                Swal.fire(
                    'Gagal !',
                    'Kolom obat tidak boleh kosong',
                    'error'
                )
            }

        }


        $('#simpanObat').on('click', function() {
            $.ajax({
                url: '/erm/resep/obat/ambil',
                data: {
                    'no_resep': $('.no_resep').val(),
                },
                success: function(response) {
                    if (Object.keys(response).length == 0) {
                        console.log(response)
                        simpanResepObat()
                    }
                    $.ajax({
                        url: '/erm/resep/umum/simpan',
                        method: 'POST',
                        data: {
                            '_token': "{{ csrf_token() }}",
                            'no_resep': $('.no_resep').val(),
                            'kode_brng': $('.kode_obat').val(),
                            'jml': $('.jml').val(),
                            'aturan_pakai': $('.aturan_pakai').val() + ' ' + $(
                                    '.keterangan')
                                .val(),
                        },
                        success: function(response) {
                            cekResep(id)
                        },
                        error: function() {
                            Swal.fire(
                                'Gagal !',
                                'Obat tidak tersimpan',
                                'error'
                            )
                        }
                    })
                }
            })
        });


        function simpanResepObat() {
            $.ajax({
                url: '/erm/resep/obat/simpan',
                data: {
                    _token: "{{ csrf_token() }}",
                    kd_dokter: "{{ Request::get('dokter') }}",
                    no_rawat: $('#nomor_rawat').val(),
                    no_resep: $('.no_resep').val(),
                },
                method: 'POST',
                error: function(request, status, error) {
                    Swal.fire(
                        'Gagal !',
                        'Tidak bisa menambah resep<br/>' + request.responseJSON.message,
                        'error',
                    )

                }
            });
        }

        function ambilRacikan(no_resep, no_racik) {
            hasil = '';
            $.ajax({
                async: false,
                url: '/erm/resep/racik/ambil',
                data: {
                    no_resep: no_resep,
                    no_racik: no_racik,
                },
                success: function(response) {
                    hasil = response;
                },
            })
            return hasil;
        }

        function ambilResep(no_resep) {
            hasil = '';
            $.ajax({
                async: false,
                url: '/erm/resep/obat/ambil',
                data: {
                    no_resep: no_resep,
                },
                success: function(response) {
                    hasil = response;
                },
            })
            return hasil;
        }

        function tulisPlan() {
            no_rawat = $('#nomor_rawat').val();
            $.ajax({
                url: '/erm/resep/obat/ambil',
                method: 'GET',
                data: {
                    no_rawat: no_rawat,
                },
                success: function(response) {
                    // console.log('Tulis Plan', response)
                    teksRd = '';
                    teksRr = '';
                    $.map(response, function(res) {
                        $.map(res.resep_dokter, function(rd) {
                            teksRd += rd.data_barang.nama_brng + ' ' + rd
                                .aturan_pakai + '\n';
                        })

                        $.map(res.resep_racikan, function(rr) {
                            teksRr += rr.metode.nm_racik + ' ' + rr.nama_racik +
                                ' ' + rr
                                .aturan_pakai + '\n' + 'Isi : '
                            $.map(rr.detail_racikan, function(dr) {
                                // console.log('Detail Racikan', rr);
                                console.log(dr)
                                if (rr.no_racik == dr.no_racik) {
                                    teksRr += dr.databarang.nama_brng +
                                        ' ' +
                                        dr.kandungan + ' mg' + ', ';
                                }
                            })
                            teksRr += '\n';
                        })

                    })
                    $('#plan').val(teksRd + '\n' + teksRr);
                },
                error: function(request, status, error) {
                    Swal.fire(
                        'Gagal !',
                        'Tidak tertulis di PLAN<br/>' + request.responseJSON.message,
                        'error',
                    )

                }
            })
        }

        function ambilObatRacikan() {
            $('.table-racikan tbody').empty();
            no_resep = $('.no_resep').val();
            no_racik = $('.no_racik').val();
            $.ajax({
                url: '/erm/resep/racik/detail/ambil',
                method: 'GET',
                dataType: 'JSON',
                data: {
                    no_resep: no_resep,
                    no_racik: no_racik,
                },
                success: function(response, status, detail) {
                    html = '';
                    // html = '< id="form-racik-obat">';
                    no = 1;
                    $.map(response, function(res) {
                        console.log(res)
                        html += '<tr class="">'
                        html +=
                            '<td><input type="hidden" id="kode_brng' + no + '" value="' +
                            res
                            .kode_brng +
                            '" name="kode_brng[]"/>' + res.data_barang.nama_brng + '</td>'
                        html +=
                            '<td><input type="hidden" id="kps' + no +
                            '" name="kps[]" value="' +
                            res.data_barang.kapasitas +
                            '"/>' + res.data_barang.kapasitas + ' mg </td>'
                        html +=
                            '<td><input type="search" class="form-control form-control-sm form-underline" id="p1' +
                            no +
                            '" name="p1[]" value="' +
                            res.p1 +
                            '" onfocusout="hitungObatRacik(' + no + ')"/></td>'
                        html += '<td>/</td>'
                        html +=
                            '<td><input type="search" class="form-control form-control-sm form-underline" id="p2' +
                            no +
                            '"name="p2[]" onfocusout="hitungObatRacik(' + no +
                            ')" value="' +
                            res.p2 +
                            '"/></td>'
                        html +=
                            '<td><input type="search" class="form-control form-control-sm form-underline" id="kandungan' +
                            no +
                            '" name="kandungan[]" value="' +
                            res.kandungan +
                            '" onchange="hitungDosis(' + no + ')"/></td>'
                        html +=
                            '<td><input type="search" class="form-control form-control-sm form-underline" id="jml_obat' +
                            no +
                            '" name="jml[]" value="' +
                            res.jml +
                            '" readonly/></td>'
                        html +=
                            '<td><button type="button" class="btn btn-danger btn-sm" style="font-size:12px" data-resep="' +
                            res.no_resep + '" data-racik="' +
                            res.no_racik +
                            '" data-obat="' + res.kode_brng +
                            '" onclick="hapusObat(this)"><i class="bi bi-trash-fill"></i></button></td>'
                        html += '</tr>'
                        no++
                    });
                    html += '<input type="hidden" class="nomor" value="' + no + '">'
                    $('.table-racikan tbody').append(html);
                },
            })
        }

        function editObat(param) {
            kode_obat = $(param).data('barang');
            kps = $(param).data('kps');
            obat = $(param).data('obat');

            $('.simpan-obat').css('display', 'none');
            $('.ubah-obat').css('display', '');
            $('.obat-baru').css('display', '');

            $('.kandungan').val(0);
            $('.jml_obat').val(0);
            $('.kps').val(kps);
            $('.kode_obat').val(kode_obat);
            $('.nama_obat').val(obat);
            $('.p1').val(1);
            $('.p2').val(1);
        }

        $('.ubah-obat').on('click', function() {
            no_racik = $('.no_racik').val();
            no_resep = $('.no_resep').val();
            kode_brng = $('.kode_obat').val();
            p1 = $('.p1').val();
            p2 = $('.p2').val();
            kandungan = $('.kandungan').val();
            jml = $('.jml_obat').val();

            $.ajax({
                url: '/erm/resep/racik/detail/ubah',
                data: {
                    _token: '{{ csrf_token() }}',
                    kode_brng: kode_brng,
                    no_racik: no_racik,
                    no_resep: no_resep,
                    p1: p1,
                    p2: p2,
                    kandungan: kandungan,
                    jml: jml,
                },
                method: 'POST',
                success: function(response) {
                    console.log(response);
                    ambilObatRacikan();
                },
                error: function(request, status, error) {
                    Swal.fire(
                        'Gagal !',
                        'Tidak bisa mengubah obat<br/>' + request.responseJSON.message,
                        'error',
                    )
                }
            }).done(function() {
                tulisPlan();
            })
        })




        $('.obat-baru').on('click', function() {
            $('.simpan-obat').css('display', '');
            $('.ubah-obat').css('display', 'none');
            $('.obat-baru').css('display', 'none');

            $('.kandungan').val('');
            $('.jml_obat').val('');
            $('.kps').val('');
            $('.kode_obat').val('');
            $('.nama_obat').val('');
            $('.p1').val('');
            $('.p2').val('');

            $('.nama_obat').focus();

        })

        function hapusObat(param) {
            no_resep = $(param).data('resep');
            no_racik = $(param).data('racik');
            kode_brng = $(param).data('obat');
            Swal.fire({
                title: 'Yakin ?',
                text: "Anda tidak bisa mengembalikan lagi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus saja!',
                cancelButtonText: 'Jangan',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/erm/resep/racik/detail/hapus',
                        method: 'DELETE',
                        data: {
                            _token: "{{ csrf_token() }}",
                            no_resep: no_resep,
                            no_racik: no_racik,
                            kode_brng: kode_brng,
                        },
                        success: function() {
                            ambilObatRacikan();
                            cekResep(id);
                        },
                        error: function(request, status, error) {
                            Swal.fire(
                                'Gagal !',
                                'Tidak menghapus obat<br/>' + request.responseJSON
                                .message,
                                'error',
                            )

                        }
                    }).done(function() {
                        tulisPlan();
                    })
                }
            })
        }

        $('tbody').on('click', '.edit', function() {
            let no_resep = $(this).attr('data-resep');
            let kode_brng = $(this).attr('data-obat');
            let no_racik = $(this).attr('data-racik');
            // console.log('noracik', no_racik)
            $('#modalObatRacik').modal('show');
            racikan = ambilRacikan(no_resep, no_racik)
            // $('.no_racik').val(racikan.no_racik);
            $('.no_resep').val(racikan.no_resep);
            $('.metode').val(racikan.metode.nm_racik);
            $('.nm_racik').val(racikan.nama_racik);
            $('.no_racik').val(no_racik);
            $('.jml').val(racikan.jml_dr);
            ambilObatRacikan();
        })

        $('#modalObatRacik').on('shown.bs.modal', function() {
            $('.kps').val('');
            $('.p1').val('');
            $('.p2').val('');
            $('.jml_obat').val('');
            $('.kandungan').val('');
        });
        $('#modalObatRacik').on('hidden.bs.modal', function() {
            $('.no_racik').val('');
            $('.kps').val('');
            $('.p1').val('');
            $('.p2').val('');
            $('.jml_obat').val('');
            $('.nama_obat').val('');
            $('.kandungan').val('');
        });

        $('tbody').on('click', '.hapus-baris', function() {
            cekResep(id)
            return false;
        })

        $('tbody').on('click', '.remove', function() {

            let no_resep = $(this).attr('data-resep');
            let kode_brng = $(this).attr('data-obat');
            let no_racik = $(this).attr('data-racik');
            Swal.fire({
                title: 'Yakin ?',
                text: "Anda tidak bisa mengembalikan lagi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus saja!',
                cancelButtonText: 'Jangan',
            }).then((result) => {
                if (result.isConfirmed) {
                    if (no_racik) {
                        $.ajax({
                            url: '/erm/resep/racik/detail/hapus',
                            data: {
                                _token: "{{ csrf_token() }}",
                                no_resep: no_resep,
                                no_racik: no_racik,
                            },
                            method: 'DELETE',
                            success: function(response) {
                                $.ajax({
                                    url: '/erm/resep/racik/hapus',
                                    data: {
                                        _token: "{{ csrf_token() }}",
                                        no_resep: no_resep,
                                        no_racik: no_racik,
                                    },
                                    method: 'DELETE',
                                })
                                $('#body_racik').empty();
                                cekResep($('#nomor_rawat').val())
                            },
                            error: function(request, status, error) {
                                Swal.fire(
                                    'Gagal !',
                                    'Obat tidak terhapus',
                                    'error'
                                );
                            }
                        }).done(function() {
                            tulisPlan();
                        })
                    } else {
                        $.ajax({
                            url: '/erm/resep/umum/hapus',
                            data: {
                                _token: "{{ csrf_token() }}",
                                no_resep: no_resep,
                                kode_brng: kode_brng,
                            },
                            method: 'DELETE',
                            success: function(response) {
                                $('#body_umum').empty();
                                cekResep($('#nomor_rawat').val())
                            }
                        }).done(function() {
                            tulisPlan();
                        })
                    }
                }
            })
            return false;
        })

        function cariRacikan(racik) {
            $.ajax({
                url: '/erm/resep/racik/cari',
                data: {
                    'nama_racik': racik.value,
                },
                dataType: 'JSON',
                success: function(response) {

                    html =
                        '<ul class="dropdown-menu" style="width:auto;display:block;position:absolute;border-radius:0;font-size:12px">';
                    $.map(response, function(data) {
                        html +=
                            '<li onclick="setNamaRacik(this)" data-nama="' + data
                            .nama_racik +
                            '"><a class="dropdown-item" href="#" style="overflow:hidden">' +
                            data.nama_racik + '</a></li>'
                    })
                    html += '</ul>';
                    $('.list_racik').fadeIn();
                    $('.list_racik').html(html);

                }
            })
        }

        $('.list_racik').on('click', 'li', function() {
            $('.list_racik').fadeOut();
        })

        function setNamaRacik(racik) {
            nama_racik = $(racik).data('nama');
            $('.nm_racik').val(nama_racik);
        }

        function cariObat(obat) {
            $.ajax({
                url: '/erm/obat/cari',
                data: {
                    'nama': obat.value,
                },
                success: function(response) {
                    // console.log(response)
                    html =
                        '<ul class="dropdown-menu" style="width:auto;display:block;position:absolute;border-radius:0;font-size:12px">';
                    $.map(response.data, function(data) {
                        $.map(data.gudang_barang, function(item) {
                            if (data) {
                                if (data.status != "0") {
                                    if (item.stok != "0") {
                                        html +=
                                            '<li data-id="' +
                                            data.kode_brng +
                                            '" data-stok="' + item.stok +
                                            '" data-kapasitas="' + data.kapasitas +
                                            '" onclick="ambilObat(this)"><a class="dropdown-item" href="#" style="overflow:hidden">' +
                                            data.nama_brng + '</a></li>'
                                    } else {
                                        html +=
                                            '<li class="disable" data-id="' + data
                                            .kode_brng +
                                            '" data-stok="' + item.stok +
                                            '"><i><a class="dropdown-item" href="#" style="overflow:hidden;color:red">' +
                                            data.nama_brng + ' - Stok Kosong' +
                                            '</a></i></li>'
                                    }
                                }
                            }
                        })
                    })
                    html += '</ul>';
                    $('.list_obat').fadeIn();
                    $('.list_obat').html(html);



                }
            })
        }


        function cariAturan(aturan) {
            $.ajax({
                url: '/erm/resep/cari',
                data: {
                    'aturan_pakai': aturan.value,
                },
                success: function(response) {
                    html =
                        '<ul class="dropdown-menu" style="width:auto;display:block;position:absolute;border-radius:0;font-size:12px">';
                    $.map(response, function(data) {
                        html +=
                            '<li onclick="ambilAturan(this)" ><a class="dropdown-item" href="#" style="overflow:hidden">' +
                            data.aturan_pakai + '</a></li>'
                    })
                    html += '</ul>';
                    $('.list_aturan').fadeIn();
                    $('.list_aturan').html(html);
                }
            })
        }
        $('.list_obat').on('click', 'li', function() {
            if ($(this).data('stok') > 0) {
                $('.kode_obat').val($(this).data('id'));
                $('.nama_obat').val($(this).text());
                $('.kps').val($(this).data('kapasitas'));
                $('.p1').val(1);
                $('.p2').val(1);
                $('.list_obat').fadeOut();
                // $('#modalObat').modal('hide');
            } else {
                $('.nama_obat').val('');
            }
        });

        function ambilAturan(param) {
            $('.aturan_pakai').val($(param).text());
        }
        $('.list_aturan').on('click', 'li', function() {
            // console.log($(this).text())
            $('.list_aturan').fadeOut();
        });

        $(document).click(function() {
            $('.list_obat').fadeOut();
            $('.list_aturan').fadeOut();
            $('.list_racik').fadeOut();

        });


        function tambahUmum() {
            no_resep = $('.no_resep').val();
            no_rawat = $('#nomor_rawat').val();
            cekResep(no_rawat);
            if (Object.keys(ambilResep(no_resep)).length == 0) {
                simpanResepObat();
            }
            // $('#modalResepUmum').modal('show');
            html = '<tr>';
            html += '<td>';
            html +=
                '<input type="text" class="no_resep form-control form-control-sm form-underline" readonly/>';
            html += '</td>';
            html += '<td>';
            html +=
                '<input type="search" onkeyup="cariObat(this)" autocomplete="off" class="form-control form-control-sm nama_obat form-underline" name="nama_obat" /><div class="list_obat"></div>';
            html += '</td>';
            html += '<td>';
            html +=
                '<input type="search" class="jml form-control form-control-sm form-underline"/>';
            html += '</td>';
            html += '<td>';
            html +=
                '<input type="search" onkeyup="cariAturan(this)" autocomplete="off" class="form-control form-control-sm aturan_pakai form-underline" name="aturan_pakai" /><div class="list_aturan"></div>';
            html += '</td>';
            html += '<td>';
            html +=
                '<div class="status"><button type="button" class="btn btn-primary btn-sm" onclick="simpanObat()" style="font-size:12px"><i class="bi bi-plus-circle"></i></button><button type="button" class="btn btn-danger btn-sm hapus-baris" style="font-size:12px"><i class="bi bi-trash"></i></button></div>';
            html += '</td>';
            html += '</tr>';
            $('#tb-resep tbody').append(html)

        }

        function ambilObat(param) {
            $('.nama_obat').val($(param).text());
            $('.kode_obat').val($(param).data('id'))
            // $('.kode_obat').val($(param).text());
        }

        function tambahRacikan() {
            // $('#modalResepRacikan').modal('show');
            // cekResep(id);
            // $('#modalResepUmum').modal('show');
            no_resep = $('.no_resep').val();
            if (Object.keys(ambilResep(no_resep)).length == 0) {
                simpanResepObat();
            }

            html = '<tr>';
            html += '<td>';
            html +=
                '<input type="text" class="no_racik form-control form-control-sm form-underline" readonly/>';
            html += '</td>';
            html += '<td>';
            html +=
                '<input type="text" class="no_resep form-control form-control-sm form-underline" readonly/>';
            html += '</td>';
            html += '<td>';
            html +=
                '<input type="text" autocomplete="off" onkeyup="cariRacikan(this)" class="form-control form-control-sm nm_racik form-underline" name="nm_racik"/><div class="list_racik"></div>';
            html += '</td>';

            html += '<td>';
            html +=
                '<select name=kd_racik" id="" class="form-select form-select-sm kd_racik form-underline" style="font-size:12px"> <option value="R01" selected>Puyer</option> <option value="R02">Sirup</option> <option value="R03">Salep</option> <option value="R04">Kapsul</option> </select>';
            html += '</td>';
            html += '<td>';
            html +=
                '<input type="search" autocomplete="off" class="form-control form-control-sm jml form-underline" name="jml" onkeypress="return hanyaAngka(event)" />';
            html += '</td>';
            html += '<td>';
            html +=
                '<input type="search" onkeyup="cariAturan(this)" autocomplete="off" class="form-control form-control-sm aturan_pakai form-underline" name="aturan_pakai" /><div class="list_aturan"></div>';
            html += '</td>';
            html += '<td>';
            html +=
                '<div class="status"><button type="button" class="btn btn-primary btn-sm" onclick="simpanRacikan()" style="font-size:12px"><i class="bi bi-plus-circle"></i></button><button type="button" class="btn btn-danger btn-sm hapus-baris" style="font-size:12px"><i class="bi bi-trash"></i></button></div>';
            html += '</td>';
            html += '</tr>';
            $('#tb-resep-racikan tbody').append(html)

            no_racik = 0;
            $.ajax({
                url: '/erm/resep/racik/ambil',
                method: 'GET',
                dataType: 'JSON',
                data: {
                    no_resep: $('.no_resep').val(),
                },
                success: function(response) {
                    if (response) {
                        $.map(response, function(data) {
                            no_racik = data.no_racik
                        })
                        no_racik = parseInt(no_racik) + 1;
                    } else {
                        no_racik = 1
                    }
                    // console.log(no_racik)
                    $('.no_racik').val(no_racik)
                    $('.no_resep').val(no_resep)
                }
            })
        }

        $('#modalResepRacikan').on('hidden.bs.modal', function() {
            $('.nm_racik').val('');
            $('.jml').val('');
            $('.aturan_pakai').val('');
            $('.keterangan').val('');
            $('.no_racik').val('');
        })

        $('#modalResepRacikan').on('shown.bs.modal', function() {
            cekResep(id);
            $('.no_resep').val(setNoResep())
        })

        function setNoResep() {
            let tanggal = "{{ date('Y-m-d') }}";
            let nomor = '';
            $.ajax({
                url: '/erm/resep/obat/akhir',
                method: 'GET',
                dataType: 'JSON',
                async: false,
                data: {
                    'tgl_peresepan': tanggal,
                    'tgl_perawatan': tanggal,
                },
                success: function(response) {
                    if (Object.keys(response).length > 0) {
                        if (response.tgl_perawatan == '0000-00-00' && response.no_rawat == $(
                                '#nomor_rawat')
                            .val()) {
                            nomor = response.no_resep;
                        } else {
                            nomor = parseInt(response.no_resep) + 1
                        }
                    } else {
                        nomor = "{{ date('Ymd') }}" + '0001';
                    }
                    // $('.no_resep').val(nomor)
                }
            })
            return nomor;

        }

        $('#modalSoap').on('shown.bs.modal', function() {
            $('.tambah_umum').css('visibility', 'visible')
            modalsoap(id);
            cekResep(id);
            no = 1;
            isModalShow = true;
        });

        function hapusResep(no_resep, no_rawat) {
            $.ajax({
                url: '/erm/resep/obat/hapus',
                data: {
                    _token: "{{ csrf_token() }}",
                    no_rawat: no_rawat,
                    no_resep: no_resep,
                },
                method: 'DELETE',
            })
        }

        function cekResep(no_rawat) {
            $('#body_umum').empty();
            $('#body_racikan').empty();
            $('#body_riwayat').empty();


            $.ajax({
                url: '/erm/resep/obat/ambil',
                data: {
                    no_rawat: no_rawat,
                },
                success: function(response) {
                    if (Object.keys(response).length > 0) {
                        $.map(response, function(res) {
                            if (Object.keys(res.resep_dokter).length > 0) {
                                $.map(res.resep_dokter, function(resep) {
                                    html = '<tr>';
                                    html += '<td>' + resep.no_resep + '</td>'
                                    html += '<td>' + resep.data_barang.nama_brng +
                                        '</td>'
                                    html += '<td>' + resep.jml + '</td>'
                                    html += '<td>' + resep.aturan_pakai + '</td>'
                                    if (res.tgl_perawatan != "0000-00-00") {
                                        $('.tambah_racik').css('visibility',
                                            'hidden')
                                        $('.tambah_umum').css('visibility',
                                            'hidden')
                                        html +=
                                            '<td class="aksi"><button type="button" class="btn btn-success btn-sm" style="font-size:12px"><i class="bi bi-check"></i></button></td>';
                                    } else {
                                        $('.tambah_racik').css('visibility',
                                            'visible')
                                        $('.tambah_umum').css('visibility',
                                            'visible')
                                        html +=
                                            '<td class="aksi"><button type="button" class="btn btn-danger btn-sm remove" style="font-size:12px" data-resep="' +
                                            resep.no_resep + '" data-obat="' + resep
                                            .kode_brng +
                                            '"><i class="bi bi-trash-fill"></i></button></td>';
                                    }
                                    html += '</tr>';
                                    $('#body_umum').append(html);
                                })
                            }
                            if (Object.keys(res.resep_racikan).length > 0) {

                                $.map(res.resep_racikan, function(resep) {

                                    html = '<tr>';
                                    html += '<td>' + resep.no_racik + '</td>'
                                    html += '<td>' + resep.no_resep + '</td>'
                                    html += '<td>' + resep.nama_racik + '</td>'
                                    html += '<td>' + resep.metode.nm_racik + '</td>'
                                    html += '<td>' + resep.jml_dr + '</td>'
                                    html += '<td>' + resep.aturan_pakai + '</td>'
                                    html +=
                                        '<td class="' + resep.no_resep + resep
                                        .no_racik +
                                        '"></td>';
                                    html += '</tr>';
                                    $('#body_racikan').append(html);
                                    if (Object.keys(resep.detail_racikan).length >
                                        0) {
                                        d = '<tr><td></td><td colspan="6">'
                                        $.map(resep.detail_racikan, function(
                                            detail) {
                                            if (resep.no_racik == detail
                                                .no_racik) {

                                                d += '<span class="badge rounded-pill text-bg-success"><i>' +
                                                    detail.databarang
                                                    .nama_brng + ' (' +
                                                    detail.kandungan +
                                                    ' mg)' +
                                                    '<i></span>';
                                            }
                                        })
                                        d += '</td></tr>'
                                        $('#body_racikan').append(d);
                                    }
                                    if (res.tgl_perawatan != "0000-00-00") {
                                        $('.tambah_racik').css('visibility',
                                            'hidden')
                                        $('.tambah_umum').css('visibility',
                                            'hidden')
                                        $('.' + resep.no_resep + resep.no_racik)
                                            .html(
                                                '<button type="button" class="btn btn-success btn-sm" style="font-size:12px"><i class="bi bi-check"></i></button>'
                                            )
                                    } else {
                                        $('.tambah_racik').css('visibility',
                                            'visible')
                                        $('.tambah_umum').css('visibility',
                                            'visible')
                                        $('.' + resep.no_resep + resep.no_racik)
                                            .html(
                                                '<button type="button" class="btn btn-danger btn-sm remove" style="font-size:12px" data-resep="' +
                                                resep.no_resep + '" data-racik="' +
                                                resep.no_racik +
                                                '"><i class="bi bi-trash-fill"></i></button> <button type="button" class="btn btn-warning btn-sm edit" style="font-size:12px" data-resep="' +
                                                resep.no_resep + '" data-racik="' +
                                                resep.no_racik +
                                                '"><i class="bi bi-pen-fill"></i></button>'
                                            )
                                    }
                                    // console.log(resep.no_resep + resep.no_racik)
                                })

                            }

                            // if (Object.keys(res.resep_racikan).length == 0 && Object.keys(res
                            //         .resep_dokter).length == 0) {

                            //     hapusResep(res.no_resep, no_rawat)
                            // }
                            $('.no_resep').val(res.no_resep)
                        })
                    } else {
                        $('.no_resep').val(setNoResep())
                        // setNoResep();
                    }
                },
                error: function(request, status, error) {
                    Swal.fire(
                        'Gagal !',
                        'Ada kesalahan pemuatan obat',
                        'error'
                    );
                }
            }).done(function(response) {
                // console.log(response)
            })
        }

        $('#modalSoap').on('hidden.bs.modal', function() {
            $('#tb-resep tbody').empty();
            $('#tb-resep-racikan tbody').empty();
            isModalShow = false;
            $('#nomor_rawat').val('-');
            $('#p_jawab').val('-');
            $('#no_rm').val('-');
            $('#nama_pasien').val('-');
            $('#nama').val('-');
            $('#nik').val('-');
            $('#jabatan').val('-');
            $('#nomor_rawat').val('-');
            $('#tgl_perawatan').val('-');
            $('#subjek').val('-');
            $('#objek').val('-');
            $('#asesmen').val('-');
            $('#plan').val('-');
            $('#instruksi').val('-');
            $('#suhu').val('-');
            $('#tensi').val('-');
            $('#tinggi').val('-');
            $('#berat').val('-');
            $('#gcs').val('-');
            $('#respirasi').val('-');
            $('#alergi').val('-')
            $('#nadi').val('-');
            $('#spo2').val('-');
            $('#body_umum').empty();
            $('#body_racikan').empty();
            $('#body_riwayat').empty();

        });

        function ambilNoRawat(no_rawat) {
            id = no_rawat;
        }

        function cariPetugas(nama) {
            // console.log()
            // alert(nama)
            $.ajax({
                url: '/erm/petugas/cari',
                data: {
                    'q': nama.value
                },
                success: function(response) {

                    html =
                        '<ul class="dropdown-menu" style="width:auto;display:block;position:absolute;border-radius:0;font-size:12px">';
                    $.map(response, function(data) {
                        html += '<li>'
                        html += '<a data-id="' + data.nip +
                            '" class="dropdown-item" onclick="setPetugas(this)">' + data
                            .nama +
                            '</a>'
                        html += '</li>'
                    })
                    html += '</ul>';
                    $('.list_petugas').fadeIn();
                    $('.list_petugas').html(html);
                    console.log('Respon Petugas', response);
                },
            })
        }

        function setPetugas(param) {
            $('#nik').val($(param).data('id'));
            $('#nama').val($(param).text());
            $('.list_petugas').fadeOut();
        }
    </script>
@endpush
