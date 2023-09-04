<div class="modal fade" id="modalRiwayat" tabindex="-1" aria-labelledby="modalRiwayat" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">RIWAYAT PASIEN</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-riwayat">
                <table id="tb_riwayat" class="table table-bordered table-responsive" cellpadding="5" cellspacing="0"
                    style="padding-left:50px;"></table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" style="font-size:12px" data-bs-dismiss="modal"><i
                        class="bi bi-x-circle"></i> Keluar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-image" aria-hidden="true" aria-labelledby="modal-image" tabindex="-1" style="background-color:#0006;box-shadow: inset 0px -1rem 20rem 20px #000;">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <img src="" class="img-thumbnails popup" width="100%" />
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-bs-dismiss="modal" style="font-size:12px"><i class="bi bi-x-circle"></i> Tutup Gambar</button>
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        var no_rm = '';
        $('#modalRiwayat').on('shown.bs.modal', function() {
            isModalShow = true;
            modalRiwayat(no_rm);
        });

        $('#modalRiwayat').on('hidden.bs.modal', function() {
            $('#tb_riwayat').empty();
            detail = '';
            isModalShow = false;
        });

        function modalRiwayat(no_rm) {
            $.ajax({
                url: '/erm/registrasi/riwayat',
                data: {
                    'no_rkm_medis': no_rm,
                    'sortir': 'DESC',
                },
                dataType: 'JSON',
                method: 'GET',
                success: function(response) {
                    if (Object.keys(response.reg_periksa).length == 0) {
                        Swal.fire(
                            'Kosong!', 'Belum ada riwayat perawatan', 'error'
                        );
                        $('#modalRiwayat').modal('hide');
                    } else {
                        riwayatPasien(response);
                    }
                }
            });
        }

        var detail = '';
        var pemeriksaan = '';
        var diagnosa = '';

        function fotoPemeriksaan(foto) {
            var hasilFoto = '<table>';
            if (Object.keys(foto).length > 0) {
                foto.forEach(function(f) {
                    let arrFoto = f.file.split(',')
                    let kategori = f.kategori;
                    hasilFoto += '<tr>'
                    arrFoto.forEach(function(fx) {
                        hasilFoto += '<td><img src="https://sim.rsiaaisyiyah.com/erm/public/erm/' + fx + '" class="img-thumbnail position-relative" width="300px" onclick="popup(\'' +
                            fx +
                            '\')" "><figcaption align="center">' + kategori.toUpperCase() + '</figcaption></td>'
                    })
                    hasilFoto += '</tr>'
                })
                hasilFoto += '</table>';
                return '<tr><th>Berkas Penunjang : </th><td>' + hasilFoto + '</td></tr>';
            }
            return '';
        }

        function popup(foto) {
            $('#modal-image').modal('show');
            let src = "https://sim.rsiaaisyiyah.com/erm/public/erm/" + foto;
            $('.popup').attr('src', src)
        }


        function riwayatPasien(d) {
            d.reg_periksa.forEach(function(i) {
                // console.log(i.operasi)
                if (i.status_lanjut == 'Ranap') {
                    status_lanjut = 'RAWAT INAP';
                    class_status = 'background:rgb(152, 0, 175);color:white';
                } else {
                    status_lanjut = 'RAWAT JALAN';
                    class_status = 'background:rgb(255 193 7);color:black';
                }

                if (i.catatan_perawatan == null) {
                    catatan = '<strong>Tidak ada catatan</strong>';
                } else {
                    catatan = i.catatan_perawatan.catatan.replace(/\n/g, '<br/>');
                }
                x = i.pemeriksaan_ralan;
                if (x) {
                    pemeriksaan += '<tr><th>Pemeriksaan</th><td>' +
                        '<div class="row">' +
                        '<div class="col-sm-4">' +
                        '<table class="table table-sm text-sm borderless mb-2" style="background-color:#e1ffe3">' +
                        '<tr><td style="width=12%">Tanggal Rawat</td><td>: ' + formatTanggal(x
                            .tgl_perawatan) + ' ' + x
                        .jam_rawat + '</td></tr>' +
                        '<tr><td>Tinggi</td><td>: ' + isKosong(x.tinggi, ' cm') + '</td><tr>' +
                        '<tr><td>Berat Badan</td><td>: ' + isKosong(x.berat, ' Kg') + '</td><tr>' +
                        '<tr><td>Suhu</td><td>: ' + isKosong(x.suhu_tubuh, ' <sup>o</sup>C') +
                        '</td><tr>' +
                        '<tr><td>Tensi</td><td>: ' + isKosong(x.tensi) + '</td><tr>' +
                        '<tr><td>Kesadaran</td><td>: ' + isKosong(x.kesadaran) + '</td><tr>' +
                        '<tr><td>Respirasi</td><td>: ' + isKosong(x.respirasi) +
                        '<tr><td>GCS(E,V,M)</td><td>: ' + isKosong(x.gcs) +
                        '<tr><td>Alergi</td><td>: ' + isKosong(x.alergi) +
                        '<tr><td>Imunisasi</td><td>: ' + isKosong(x.imun_ke) +
                        '</td><tr>' +
                        '</tr>' +
                        '</table>' +
                        '</div>' +
                        '<div class="col-sm-8">' +
                        '<table class="table table-sm text-sm borderless" style="background-color:#e1ffe3">' +
                        '<tr>' +
                        '<tr><td style="width:10%">Subject</td><td>: ' + isKosong(x.keluhan) +
                        '</td><tr>' +
                        '<tr><td>Object</td><td>: ' + isKosong(x.pemeriksaan) + '</td><tr>' +
                        '<tr><td>Assesment</td><td>: ' + isKosong(x.penilaian) + '</td><tr>' +
                        '<tr><td>Plan</td><td>: ' + isKosong(x.rtl) + '</td><tr>' +
                        '<tr><td>Instruksi</td><td>: ' + isKosong(x.instruksi) + '</td><tr>' +
                        '</table>' +
                        '<table class="table table-sm text-sm borderless" style="background-color:#e1ffe3">' +
                        '<tr>' +
                        '<tr><td style="width:10%">Catatan Perawatan / Dokter </td><tr>' +
                        '<tr><td> ' + isKosong(catatan) +
                        '</td><tr>' +
                        '</table>' +
                        '</div>' +
                        '</td></tr>';
                }
                hasilOperasi(i.operasi, i.no_rawat)
                detail +=
                    '<tr>' +
                    '<th colspan="2" style="' + class_status + '"><h6 align="center">' + status_lanjut +
                    '</h6></th>' +
                    '</tr>' +
                    '<tr><th style="width:15%">Tanggal Daftar</th><td>: ' + formatTanggal(i.tgl_registrasi) +
                    ' ' +
                    i.jam_reg +
                    '<tr><th>Nama (Nomor RM)</th><td>: ' + d.nm_pasien + ' (' + i.no_rkm_medis + ')</td></tr>' +
                    '<tr><th>Nomor Rawat</th><td>: ' + i.no_rawat + '</td></tr>' +
                    '</td></tr>' +
                    '<tr><th>Unit/Poliklinik</th><td>: ' + i.poliklinik.nm_poli + '</td></tr>' +
                    '<tr><th>Dokter</th><td>: ' + i.dokter.nm_dokter + '</td></tr>' +
                    '<tr><th>Cara Bayar</th><td>: ' + i.penjab.png_jawab + '</td></tr>' +
                    diagnosaPasien(i.diagnosa_pasien) + prosedurPasien(i.prosedur_pasien) + pemeriksaan +
                    '<tr class="operasi-' + textRawat(i.no_rawat) + '" style="display:none"><th>Laporan Operasi</th><td class="laporan-op-' + textRawat(i.no_rawat) + '"></td>' +
                    pemberianObat(i.detail_pemberian_obat) +
                    pemeriksaanLab(i.detail_pemeriksaan_lab, i.umurdaftar, d.jk) +
                    fotoPemeriksaan(i.upload) +
                    '</tr>';

                pemeriksaan = '';

            });
            $('#tb_riwayat').append(detail);
        }

        function getAturanPakai(no_rawat, obat) {

            var aturan = '';
            var ajaxAturan = $.ajax({
                url: '/erm/aturan',
                data: {
                    'no_rawat': no_rawat,
                    'kode_brng': obat
                },
                dataType: 'JSON',
                // async: false,
                success: function(response) {
                    $('.aturan-' + textRawat(no_rawat) + '-' + obat).text(response.aturan)
                }
            })
        }

        function pemberianObat(obat) {
            if (Object.keys(obat).length > 0) {
                var pemberian = '<table class="table borderless mb-0" style="background-color:#e1ffe3">';
                let tgl_sekarang = ''
                obat.forEach(function(o) {
                    if (o.data_barang.kdjns != 'J024') {
                        pemberian += '<tr><td width="20%">' + (tgl_sekarang != o.tgl_perawatan ? formatTanggal(o
                                    .tgl_perawatan) +
                                ', Jam ' +
                                o.jam : '') +
                            '</td><td>: <strong>' + o.data_barang.nama_brng +
                            '</strong></td><td> ' + o.jml + '</td><td class="aturan-' + textRawat(o.no_rawat) +
                            '-' + o
                            .kode_brng + '"></td><tr>';
                        tgl_sekarang = o.tgl_perawatan;
                        getAturanPakai(o.no_rawat, o.kode_brng)
                    }
                })
                pemberian += '</table>'
                return '<tr><th>Pemberian Obat</th><td>' + pemberian + '</td></tr>';
            }
            return '';
        }


        function hasilOperasi(operasi, no_rawat) {
            if (operasi) {
                $.ajax({
                    url: '/erm/operasi/laporan/' + textRawat(no_rawat, '-'),
                    dataType: 'JSON',
                    success: function(response) {
                        var html = '<table class="table borderless mb-0" style="background-color:#e1ffe3">';

                        html += '<tr>'
                        html += '<td width="30%"><strong>Jenis Operasi<strong></td>'
                        html += '<td>:</td>'
                        html += '<td>' + operasi.paket_operasi.nm_perawatan + '</td>'
                        html += '</tr>'

                        html += '<tr>'
                        html += '<td width="30%"><strong>Operator<strong></td>'
                        html += '<td>:</td>'
                        html += '<td>' + operasi.op1.nm_dokter + '</td>'
                        html += '</tr>'

                        html += '<tr>'
                        html += '<td width="30%"><strong>Asisten 1<strong></td>'
                        html += '<td>:</td>'
                        html += '<td>' + operasi.asisten_op1.nama + '</td>'
                        html += '</tr>'

                        html += '<tr>'
                        html += '<td width="30%"><strong>Asisten 2<strong></td>'
                        html += '<td>:</td>'
                        html += '<td>' + operasi.asisten_op2.nama + '</td>'
                        html += '</tr>'

                        html += '<tr>'
                        html += '<td width="30%"><strong>Jam Mulai<strong></td>'
                        html += '<td>:</td>'
                        html += '<td>' + response.tanggal + '</td>'
                        html += '</tr>'

                        // html += '<tr>'
                        // html += '<td width="30%"><strong>Jam Selesai<strong></td>'
                        // html += '<td>:</td>'
                        // html += '<td>' + response.selesaioperasi + '</td>'
                        // html += '</tr>'

                        html += '<tr>'
                        html += '<td width="20%"><strong>Diagnosa Pre-Operasi<strong></td>'
                        html += '<td>:</td>'
                        html += '<td>' + response.diagnosa_preop + '</td>'
                        html += '</tr>'

                        html += '<tr>'
                        html += '<td width="20%"><strong>Diagnosa Post-Operasi<strong></td>'
                        html += '<td>:</td>'
                        html += '<td>' + response.diagnosa_postop + '</td>'
                        html += '</tr>'

                        html += '<tr>'
                        html += '<td width="20%"><strong>Jaringan Dieksekusi<strong></td>'
                        html += '<td>:</td>'
                        html += '<td>' + response.jaringan_dieksekusi + '</td>'
                        html += '</tr>'

                        html += '<tr>'
                        html += '<td width="20%"><strong>Permintaan PA.<strong></td>'
                        html += '<td>:</td>'
                        html += '<td>' + response.permintaan_pa + '</td>'
                        html += '</tr>'

                        html += '<tr>'
                        html += '<td width="20%"><strong>Laporan<strong></td>'
                        html += '<td>:</td>'
                        html += '<td>' + response.laporan_operasi + '</td>'
                        html += '</tr>'
                        html += '</table>'
                        $('.operasi-' + textRawat(no_rawat)).removeAttr('style');
                        $('.laporan-op-' + textRawat(no_rawat)).append(html);
                    }
                })
            } else {
                // $('.operasi').css('display', 'hidden');
                // $('.laporan-op').empty();
            }


        }

        function petugasLab(no_rawat, lab) {
            $.ajax({
                url: '/erm/lab/petugas',
                data: {
                    'no_rawat': no_rawat,
                    'kd_jenis_prw': lab,
                },
                dataType: 'JSON',
                method: 'GET',
                success: function(response) {
                    $('.dr-' + textRawat(no_rawat) + '-' + lab).text(response.dokter.nm_dokter);
                    $('.petugas-' + textRawat(no_rawat) + '-' + lab).text(response.petugas.nama);
                }
            })

        }

        function pemeriksaanLab(lab, umur, jk) {
            if (Object.keys(lab).length > 0) {
                var hasilLab = '<table class="table mb-0" style="background-color:#e1ffe3">';
                let tgl_sekarang = '';
                let jnsPeriksa = '';
                let nmPerawatan = '';
                let no = 1;
                let rujukan = '';
                let classDokter = '';
                let classDokterSekarang = '';
                let classPetugas = '';
                let classPetugasSekarang = '';
                let barisTanggal = '';

                lab.forEach(function(l) {
                    classDokterSekarang = classDokter;
                    classPetugasSekarang = classPetugas;

                    classDokter = 'dr-' + textRawat(l.no_rawat) + '-' + l.kd_jenis_prw;
                    classPetugas = 'petugas-' + textRawat(l.no_rawat) + '-' + l.kd_jenis_prw;

                    tgl_sekarang != l.tgl_periksa || nmPerawatan != l.jns_perawatan_lab.nm_perawatan ? no = 1 : '';

                    hasilLab += (tgl_sekarang != l.tgl_periksa ?
                            '<tr class="table-warning" border=1><td style="width:9%">' +
                            formatTanggal(l.tgl_periksa) + ', Jam ' + l.jam + '</td>' +
                            '</td><td class="dr-' + textRawat(l.no_rawat) + '-' + l.kd_jenis_prw + '"></td>' +
                            '<td class="petugas-' + textRawat(l.no_rawat) + '-' + l.kd_jenis_prw +
                            '"></td>' +
                            '</tr>' : nmPerawatan != l.jns_perawatan_lab.nm_perawatan ?
                            '<tr class="">' : '') +
                        (jnsPeriksa == l.kd_jenis_prw ? (tgl_sekarang != l.tgl_periksa ?
                                '<td style="width:30%" colspan="3"><strong>' + l
                                .jns_perawatan_lab
                                .nm_perawatan +
                                '</tr>' +
                                '</tr>' +
                                '<tr><th>Pemeriksaan</th><th>Hasil</th><th>Rujukan</th></tr>' : '') :
                            '<td style="width:30%" colspan="3"><p style="padding:0;margin:0"><strong>' +
                            l
                            .jns_perawatan_lab.nm_perawatan +
                            '</strong></p></td>' +
                            '</tr>' +
                            '<tr><th>Pemeriksaan</th><th>Hasil</th><th>Rujukan</th></tr>') +
                        '<tr><td>' + no + '. ' + l.template.Pemeriksaan + '</td><td>' + l.nilai +
                        ' ' + l.template.satuan + (l.keterangan != '' ? ' (' + l.keterangan + ')' : '') +
                        '</td><td>' + l.nilai_rujukan + ' ' + l.template.satuan + '</td></tr>';
                    barisTanggal = tgl_sekarang != l.tgl_periksa ? '<td>' + formatTanggal(l.tgl_periksa) + ' ' +
                        l
                        .jam + '</td>' : '';
                    barisPerawatan = nmPerawatan != l.jns_perawatan_lab.nm_perawatan ?
                        '<td></td><td colspan="3""><strong>' +
                        l
                        .jns_perawatan_lab
                        .nm_perawatan + '</strong></td>' : '';
                    barisDokter = tgl_sekarang != l.tgl_periksa && classDokterSekarang != classDokter ?
                        '<td class="' + classDokter + '">' + '</td>' : '';
                    barisPetugas = tgl_sekarang != l.tgl_periksa && classPetugasSekarang != classPetugas ?
                        '<td class="' + classPetugas + '" colspan="2">' + '</td>' +
                        '<tr><td></td><th>Pemeriksaan</th><th>Hasil</th><th>Rujukan</th></tr>' : '';
                    tgl_sekarang = l.tgl_periksa;
                    jnsPeriksa = l.kd_jenis_prw;
                    nmPerawatan = l.jns_perawatan_lab.nm_perawatan;
                    petugasLab(l.no_rawat, l.kd_jenis_prw);
                    no++;

                })
                hasilLab += '</table>'
                return '<tr><th>Laboratorium </th><td>' + hasilLab + '</td></tr>';
            }
            return '';
        }

        function diagnosaPasien(diagnosa) {
            let prioritas = '';
            if (Object.keys(diagnosa).length > 0) {
                var diagnosaPasien = '<table class="table borderless mb-0" style="background-color:#e1ffe3">';
                diagnosa.forEach(function(d) {
                    prioritas = d.prioritas == 1 ? '<span class="text-danger" title="Prioritas"> *</span>' : '';
                    diagnosaPasien +=
                        '<tr><td style="width:5%"><strong>' + d.kd_penyakit + '</strong></td><td>: ' + d
                        .penyakit
                        .nm_penyakit + ' ' + prioritas + '</td><tr>';
                })
                diagnosaPasien += '</table>'
                return '<tr><th>Diagnosa</th><td>' + diagnosaPasien + '</td></tr>';
            }
            return '';
        }

        function prosedurPasien(prosedur) {
            if (Object.keys(prosedur).length > 0) {
                var prosedurPasien = '<table class="table borderless mb-0" style="background-color:#e1ffe3">';
                prosedur.forEach(function(p) {
                    prosedurPasien +=
                        '<tr><td style="width:5%"><strong>' + p.kode + '</strong> : ' + p.icd9.deskripsi_panjang +
                        '</td><tr>';
                })
                prosedurPasien += '</table>'
                return '<tr><th>Prosedur </th><td>' + prosedurPasien + '</td></tr>';
            }
        }
    </script>
@endpush