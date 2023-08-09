<form action="" method="POST" class="form-soap">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <table class="borderless">
                <tr>
                    <td width="10%" style="font-size:11px">Pasien:</td>
                    <td width="15%">
                        <input type="text" class="form-control form-control-sm" id="nomor_rawat" name="nomor_rawat" placeholder="" style="font-size:11px;min-height:20px;border-radius:0;" readonly>
                    </td>
                    <td width="30%" colspan="3">
                        <input type="text" class="form-control form-control-sm" id="nm_pasien" name="nm_pasien" placeholder="" style="font-size:11px;min-height:20px;border-radius:0;" readonly>
                    </td>
                </tr>
                <tr>
                    <td style="font-size:11px">Dilakukan Oleh :</td>
                    <td width="15%">
                        <input type="text" class="form-control form-control-sm" id="nik" name="nik"
                            placeholder="" style="font-size:11px;min-height:20px;border-radius:0;" readonly>
                    </td>
                    <td colspan="2" width="40%">
                        <input type="search" class="form-control form-control-sm" id="nama" name="nama"
                            placeholder="" style="font-size:11px;min-height:20px;border-radius:0;" onkeyup="cariPetugas(this)">
                        <div class="list_petugas"></div>
                    </td>
                </tr>
                <tr>
                    <td style="font-size:11px">Subjek : </td>
                    <td colspan="3">
                        <textarea class="form-control" name="subjek" id="subjek" cols="30" rows="5"
                            style="font-size:11px;min-height:20px;border-radius:0;resize:none" onfocus="removeZero(this)"
                            onblur="cekKosong(this)">-</textarea>
                    </td>
                </tr>
                <tr>
                    <td style="font-size:11px">Objek : </td>
                    <td colspan="3">
                        <textarea class="form-control" name="objek" id="objek" cols="30" rows="5"
                            style="font-size:11px;min-height:20px;border-radius:0;resize:none" onfocus="removeZero(this)"
                            onblur="cekKosong(this)">-</textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="3">
                        <table>
                            <td width="12%" style="font-size:11px">
                                Suhu (<sup>0</sup>C) : <input type="text" class="form-control form-control-sm"
                                    id="suhu" name="suhu" placeholder="" maxlength="5"
                                    style="font-size:11px;min-height:20px;border-radius:0;" value="-"
                                    onfocus="removeZero(this)" onblur="cekKosong(this)" value="-">
                            </td>
                            <td width="12%" style="font-size:11px">
                                Tinggi (Cm): <input type="text" class="form-control form-control-sm" id="tinggi"
                                    name="tinggi" placeholder="" maxlength="5"
                                    style="font-size:11px;min-height:20px;border-radius:0;" onfocus="removeZero(this)"
                                    onblur="cekKosong(this)" value="-">
                            </td>
                            <td width="12%" style="font-size:11px">
                                Berat (Kg) : <input type="text" class="form-control form-control-sm" id="berat"
                                    name="berat" placeholder="" maxlength="5"
                                    style="font-size:11px;min-height:20px;border-radius:0;" onfocus="removeZero(this)"
                                    onblur="cekKosong(this)" value="-">
                            </td>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="3">
                        <table>
                            <td width="12%" style="font-size:11px">
                                Tensi : <input type="text" class="form-control form-control-sm" id="tensi"
                                    name="tensi" placeholder="" maxlength="8"
                                    style="font-size:11px;min-height:20px;border-radius:0;" onfocus="removeZero(this)"
                                    onblur="cekKosong(this)" value="-">
                            </td>
                            <td width="12%" style="font-size:11px">
                                Respirasi (/mnt): <input type="text" class="form-control form-control-sm"
                                    id="respirasi" name="respirasi" placeholder="" maxlength="3"
                                    style="font-size:11px;min-height:20px;border-radius:0;" onfocus="removeZero(this)"
                                    onblur="cekKosong(this)" value="-">
                            </td>
                            <td width="12%" style="font-size:11px">
                                Nadi (/mnt) : <input type="text" class="form-control form-control-sm"
                                    id="nadi" name="nadi" placeholder="" maxlength="3"
                                    style="font-size:11px;min-height:20px;border-radius:0;" onfocus="removeZero(this)"
                                    onblur="cekKosong(this)" value="-">
                            </td>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="3">
                        <table>
                            <td width="12%" style="font-size:11px">
                                SpO2 (%): <input type="text" class="form-control form-control-sm" id="spo2"
                                    name="spo2" placeholder="" maxlength="3"
                                    style="font-size:11px;min-height:20px;border-radius:0;" onfocus="removeZero(this)"
                                    onblur="cekKosong(this)" value="-">
                            </td>
                            <td width="12%" style="font-size:11px">
                                GCS (E,V,M): <input type="text" class="form-control form-control-sm"
                                    id="gcs" name="gcs" placeholder="" maxlength="10"
                                    style="font-size:11px;min-height:20px;border-radius:0;" onfocus="removeZero(this)"
                                    onblur="cekKosong(this)" value="-">
                            </td>
                            <td width="12%" style="font-size:11px">
                                Kesadaran :
                                <select class="form-select" name="kesadaran" id="kesadaran"
                                    style="font-size:11px;min-height:20px;border-radius:0;>">
                                    <option value="Compos Mentis">Compos Mentis</option>
                                    <option value="Somnolence">Somnolence</option>
                                    <option value="Sopor">Sopor</option>
                                    <option value="Coma">Coma</option>
                                </select>
                            </td>
                        </table>
                    </td>
                </tr>
            </table>
            <input type="hidden" name="nik" id="nik" value={{ session()->get('pegawai')->nik }}>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <table class="borderless">
                <tr>
                    <td width="5%" style="font-size:11px">Alergi :</td>
                    <td width="65%">
                        <input type="text" class="form-control form-control-sm" id="alergi" name="alergi"
                            placeholder="" style="font-size:11px;min-height:20px;border-radius:0;width:100%"
                            onfocus="removeZero(this)" onblur="cekKosong(this)" value="-">
                    </td>
                </tr>
                <tr>
                    <td style="font-size:11px" width="5%">Asesmen : </td>
                    <td colspan="3" width="5%">
                        <textarea class="form-control" name="asesmen" id="asesmen" cols="30" rows="5"
                            style="font-size:11px;min-height:20px;border-radius:0;resize:none" onfocus="removeZero(this)"
                            onblur="cekKosong(this)">-</textarea>
                    </td>
                </tr>
                <tr>
                    <td style="font-size:11px">Plan : </td>
                    <td colspan="3">
                        <textarea class="form-control" name="plan" id="plan" cols="30" rows="5"
                            style="font-size:11px;min-height:20px;border-radius:0;resize:none" onfocus="removeZero(this)"
                            onblur="cekKosong(this)">-</textarea>
                    </td>
                </tr>
                <tr>
                    <td style="font-size:11px">Instruksi : </td>
                    <td colspan="3">
                        <textarea class="form-control" name="instruksi" id="instruksi" cols="30" rows="5"
                            style="font-size:11px;min-height:20px;border-radius:0;resize:none" onfocus="removeZero(this)"
                            onblur="cekKosong(this)">-</textarea>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</form>
