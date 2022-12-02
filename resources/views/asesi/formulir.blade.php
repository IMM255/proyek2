@extends('layouts.asesi.asesi')
@section('title','formulir')
@section('halaman','formulir')
@section('content')
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">



<link href="https://sertifikasi.lspdigital.id/assets/plugins/select2-4.0.3/dist/css/select2.min.css" rel="stylesheet" type="text/css"/>
<link href="https://sertifikasi.lspdigital.id/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
    .stepwizard-step p {
        margin-top: 2px;
    }

    .stepwizard-row {
        display: table-row;
    }

    .stepwizard {
        display: table;
        width: 100%;
        position: relative;
    }

    .stepwizard-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }

    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;

    }

    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }

    .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 3px 0;
        font-size: 11px;
        line-height: 1.428571429;
        border-radius: 19px;
    }
    .harus_diisi{
        color:red;
        font-weight:bold;
    }
    .tabbable-panel {
        border:1px solid #eee;
        padding: 10px;
    }

    /* Default mode */
    .tabbable-line > .nav-tabs {
        border: none;
        margin: 0px;
    }
    .tabbable-line > .nav-tabs > li {
        margin-right: 2px;
    }
    .tabbable-line > .nav-tabs > li > a {
        border: 0;
        margin-right: 0;
        color: #737373;
    }
    .tabbable-line > .nav-tabs > li > a > i {
        color: #a6a6a6;
    }
    .tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {
        border-bottom: 4px solid #fbcdcf;
    }
    .tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {
        border: 0;
        background: none !important;
        color: #333333;
    }
    .tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {
        color: #a6a6a6;
    }
    .tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
        margin-top: 0px;
    }
    .tabbable-line > .nav-tabs > li.active {
        border-bottom: 4px solid #f3565d;
        position: relative;
    }
    .tabbable-line > .nav-tabs > li.active > a {
        border: 0;
        color: #333333;
    }
    .tabbable-line > .nav-tabs > li.active > a > i {
        color: #404040;
    }
    .tabbable-line > .tab-content {
        margin-top: -3px;
        background-color: #fff;
        border: 0;
        border-top: 1px solid #eee;
        padding: 15px 0;
    }
    .portlet .tabbable-line > .tab-content {
        padding-bottom: 0;
    }

    /* Below tabs mode */

    .tabbable-line.tabs-below > .nav-tabs > li {
        border-top: 4px solid transparent;
    }
    .tabbable-line.tabs-below > .nav-tabs > li > a {
        margin-top: 0;
    }
    .tabbable-line.tabs-below > .nav-tabs > li:hover {
        border-bottom: 0;
        border-top: 4px solid #fbcdcf;
    }
    .tabbable-line.tabs-below > .nav-tabs > li.active {
        margin-bottom: -2px;
        border-bottom: 0;
        border-top: 4px solid #f3565d;
    }
    .tabbable-line.tabs-below > .tab-content {
        margin-top: -10px;
        border-top: 0;
        border-bottom: 1px solid #eee;
        padding-bottom: 15px;
    }
    input:focus{
        background-color:#7AFFCA !important;
    }
    #myOverlay{
        position:fixed;
        top:0px;
        bottom:0px;
        width:100%;
        overflow-y:auto;
    }
    #myOverlay{background:black;opacity:.7;z-index:2000;}
    #loadingGIF{position:fixed;top:40%;left:45%;z-index:3000;}

    .input-container {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        width: 100%;
        margin-bottom: 2px;
    }

    .icon {
        padding: 10px;
        background: dodgerblue;
        color: white;
        min-width: 30px;
        text-align: center;
    }

    .input-field {
        width: 100%;
        padding: 10px;
        outline: none;
    }

    .input-field:focus {
        border: 2px solid dodgerblue;
    }
</style>



<script src="https://sertifikasi.lspdigital.id/_assets/jquery/js/jquery.min.js"></script>
<script src="https://sertifikasi.lspdigital.id/_assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://sertifikasi.lspdigital.id/assets/js/jquery.v2.min.js" type="text/javascript"></script>
<link href="https://sertifikasi.lspdigital.id/_assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div id="myOverlay"></div>
    <div id="loadingGIF"><img src="https://sertifikasi.lspdigital.id/load.gif" /></div>
    <div class="container" style="margin-bottom: 60px;" >
        <div class="col-md-12 col-sm-12" style="background-color: white; padding-top: 5px;">

            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx        START FIXED        xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
            <!-- <div style="position: fixed; top: 0; width: 100%;" id="myFixed">  -->

            <div class="stepwizard" style="margin-bottom: 5px;">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle"><i style="margin-top:5px;" class="fa fa-archive"></i></a>
                        <p> Profil Peserta </p><br/>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled"><i style="margin-top:5px;" class="fa fa-upload"></i></a>
                        <p>Dokumen Portofolio</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled"><i style="margin-top:5px;" class="fa fa-question"></i></a>
                        <p>Asesmen Mandiri</p>
                    </div>

                </div>
            </div>

            <form role="form" method="post" action="https://sertifikasi.lspdigital.id/welcome/uji_kompetensi_save" id="form_submit" enctype="multipart/form-data">
                <input type="hidden" name="skema_yang_dipilih" id="skema_yang_dipilih" value="0"/>

                <div class="row setup-content" id="step-1">

                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx        START STEP 1        xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->


                    <div class="col-md-12 formStep2" style="margin-bottom: 10px;border-style: solid;border-color: green;">
                        <div class="fixed" >

                            <fieldset><legend><h3> FR-APL-01. FORMULIR PERMOHONAN SERTIFIKASI KOMPETENSI</h3>
                                    <h5>Pada bagian ini,  cantumlan data pribadi, data pendidikan formal serta data pekerjaan anda pada saat ini.</h5>
                                <h3>Bagian 1 :  Rincian Data Pemohon Sertifikasi</h3></legend></fieldset>
                        </div>

                        <div class="col-md-12" style="font-weight: bold;color: green;margin-bottom: 20px;background-color: #223434; color:white;width: 97%;margin-left: 15px;">DATA PRIBADI</div>

                        <div class="col-md-3">
                            <label class="control-label">No. KTP/NIK/Paspor<b class="harus_diisi">*</b></label>
                        </div>

                        <div class="col-md-9">
                            <div class="form-group">
                                <input  maxlength="20" type="text" name="no_identitas" id="no_identitas" required class="form-control input-number-ktp input-number" placeholder="Masukkan Nomor Induk Kependudukan"  />
                                <label id="label_no_identitas" style="font-size:10px;color: red;"></label>       </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Nama Lengkap<b class="harus_diisi">*</b> </label>
                        </div>

                        <div class="col-md-9">
                            <div class="form-group">
                                <input  maxlength="100" type="text" name="nama_lengkap" id="nama_lengkap" required class="form-control" placeholder="Masukkan Nama Lengkap" onkeypress="return hanyaHuruf(event)"  />
                                <label id="label_nama_lengkap" style="font-size:10px;color: red;"></label>      </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Tempat Lahir<b class="harus_diisi">*</b></label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input  maxlength="100" type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir"  required onkeypress="return hanyaHuruf(event)" />
                                <label id="label_tempat_lahir" style="font-size:10px;color: red;"></label>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Tanggal Lahir<b class="harus_diisi">*</b></label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input style="border-radius:5px; padding-top:0px; margin:0px; font-size:10pt; border:1px solid #888; width:100%;" type="date" id="tanggal"   name="tanggal_lahir"  class="tanggal_lahir" required/>

                                <label id="label_tanggal_lahir" style="font-size:10px;color: red;"></label><br/>
                                <label style="font-size:10px;color: green;font-weight: bold;">Format Bulan-Tanggal-Tahun</label></div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Jenis Kelamin<b class="harus_diisi">*</b> </label>
                        </div>

                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="radio" name="jenis_kelamin" required id="jenis_kelamin" value="1"> Laki-Laki  &nbsp; &nbsp; <input type="radio" name="jenis_kelamin" required id="jenis_kelamin" value="2"> Perempuan
                                <label id="label_jenis_kelamin" style="font-size:10px;color: red;"></label>
                            </div>

                            <div id="div_bukti" style="display:none;"></div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Kebangsaan<b class="harus_diisi">*</b> </label>
                        </div>

                        <div class="col-md-9">
                            <div class="form-group">
                                <input  maxlength="100" type="text" name="nama_lengkap" id="nama_lengkap" required class="form-control" placeholder="Masukkan Kebangsaan" onkeypress="return hanyaHuruf(event)"  />
                                <label id="label_nama_lengkap" style="font-size:10px;color: red;"></label>      </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Alamat Domisili / Sesuai KTP<b class="harus_diisi">*</b></label>
                        </div>

                        <div class="col-md-9">
                            <div class="form-group">
                                <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat Lengkap Domisili atau Sesuai dengan KTP" required></textarea>
                                <label id="label_alamat" style="font-size:10px;color: red;"></label>
                            </div>
                        </div>
                        <hr style="border: 2px #333333;" />
                        <div class="col-md-3">
                            <label class="control-label"></label>
                        </div>

                        <div class="col-md-9">
                            <div class="form-group">
                                <select name="id_provinsi_ktp" id="id_provinsi_ktp" class="combobox form-control" required >
                                    <option value="0">-- PILIH PROVINSI --</option>
                                                                            <option value="11">
                                            ACEH                                        </option>
                                                                            <option value="12">
                                            SUMATERA UTARA                                        </option>
                                                                            <option value="13">
                                            SUMATERA BARAT                                        </option>
                                                                            <option value="14">
                                            RIAU                                        </option>
                                                                            <option value="15">
                                            JAMBI                                        </option>
                                                                            <option value="16">
                                            SUMATERA SELATAN                                        </option>
                                                                            <option value="17">
                                            BENGKULU                                        </option>
                                                                            <option value="18">
                                            LAMPUNG                                        </option>
                                                                            <option value="19">
                                            KEPULAUAN BANGKA BELITUNG                                        </option>
                                                                            <option value="21">
                                            KEPULAUAN RIAU                                        </option>
                                                                            <option value="31">
                                            DKI JAKARTA                                        </option>
                                                                            <option value="32">
                                            JAWA BARAT                                        </option>
                                                                            <option value="33">
                                            JAWA TENGAH                                        </option>
                                                                            <option value="34">
                                            DI YOGYAKARTA                                        </option>
                                                                            <option value="35">
                                            JAWA TIMUR                                        </option>
                                                                            <option value="36">
                                            BANTEN                                        </option>
                                                                            <option value="51">
                                            BALI                                        </option>
                                                                            <option value="52">
                                            NUSA TENGGARA BARAT                                        </option>
                                                                            <option value="53">
                                            NUSA TENGGARA TIMUR                                        </option>
                                                                            <option value="61">
                                            KALIMANTAN BARAT                                        </option>
                                                                            <option value="62">
                                            KALIMANTAN TENGAH                                        </option>
                                                                            <option value="63">
                                            KALIMANTAN SELATAN                                        </option>
                                                                            <option value="64">
                                            KALIMANTAN TIMUR                                        </option>
                                                                            <option value="65">
                                            KALIMANTAN UTARA                                        </option>
                                                                            <option value="71">
                                            SULAWESI UTARA                                        </option>
                                                                            <option value="72">
                                            SULAWESI TENGAH                                        </option>
                                                                            <option value="73">
                                            SULAWESI SELATAN                                        </option>
                                                                            <option value="74">
                                            SULAWESI TENGGARA                                        </option>
                                                                            <option value="75">
                                            GORONTALO                                        </option>
                                                                            <option value="76">
                                            SULAWESI BARAT                                        </option>
                                                                            <option value="81">
                                            MALUKU                                        </option>
                                                                            <option value="82">
                                            MALUKU UTARA                                        </option>
                                                                            <option value="91">
                                            PAPUA BARAT                                        </option>
                                                                            <option value="94">
                                            PAPUA                                        </option>
                                                                    </select>
                                <label id="label_id_provinsi_ktp" style="font-size:10px;color: red;"></label>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label class="control-label"></label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <select name="id_kabupaten_ktp" id="kabupaten" class="form-control comboSelect2" required>
                                    <option value="0">-PILIH PROVINSI DULU-</option>
                                    <option value="32">-Kab.Indramayu-</option>
                                </select>
                                <label id="label_id_kabupaten" style="font-size:10px;color: red;"></label>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label class="control-label"></label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <select name="id_kecamatan_ktp" id='kecamatan' class="form-control comboSelect2" required>
                                    <option value="0">-PILIH KABUPATEN DULU-</option>
                                    <option value="32">-Kec.Lohbener-</option>
                                </select>
                                <label id="label_id_kecamatan" style="font-size:10px;color: red;"></label>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label class="control-label">No.Telp<b class="harus_diisi">*</b>   </label>
                        </div>

                        <div class="col-md-9">
                            <div class="form-group">
                                <input  maxlength="100" type="text" name="no_telp" id="no_telp" required class="form-control input-number" placeholder="Masukkan No Telp"  onkeypress="return hanyaAngka(event)"/>
                                <label id="label_no_telp" style="font-size:10px;color: red;"></label>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label class="control-label">Email<b class="harus_diisi">*</b>   </label>
                        </div>

                        <div class="col-md-9">
                            <div class="form-group">
                                <input  maxlength="100" type="text" name="email" id="email" required class="form-control input-email" placeholder="Masukkan Email"  />
                                <label id="label_email" style="font-size:10px;color: red;"></label>
                                <input type="hidden" id="validasi_email">
                                <input type="hidden" name="kewarganegaraan" id="kewarganegaraan" value="1">
                            </div>
                        </div>

                        <div class="col-md-12" style="font-weight: bold;color: green;margin-bottom: 20px;background-color: #223434; color:white;width: 97%;margin-left: 15px;">DATA PEKERJAAN</div>
                        <div class="col-md-3">
                            <label class="control-label">Pekerjaan<b class="harus_diisi">*</b></label>
                        </div>

                        <div class="col-md-9">
                            <div class="form-group">
                                <select class="form-control select2" name="id_pekerjaan" id="id_pekerjaan" required>
                                    <option value="">Pilih</option>
                                                                            <option value="1">Belum/Tidak Bekerja</option>
                                                                            <option value="2">Mengurus Rumah Tangga</option>
                                                                            <option value="3">Pelajar/Mahasiswa</option>
                                                                            <option value="4">Pensiunan</option>
                                                                            <option value="5">Pegawai Negeri Sipil (PNS)</option>
                                                                            <option value="8">Perdagangan</option>
                                                                            <option value="12">Industri</option>
                                                                            <option value="13">Konstruksi</option>
                                                                            <option value="14">Transportasi</option>
                                                                            <option value="15">Karyawan Swasta</option>
                                                                            <option value="16">Karyawan BUMN</option>
                                                                            <option value="17">Karyawan BUMD</option>
                                                                            <option value="18">Karyawan Honorer</option>
                                                                            <option value="64">Dosen</option>
                                                                            <option value="65">Guru</option>
                                                                            <option value="69">Arsitek</option>
                                                                            <option value="70">Akuntan</option>
                                                                            <option value="71">Konsultan</option>
                                                                            <option value="82">Pialang</option>
                                                                            <option value="84">Pedagang</option>
                                                                            <option value="88">Wiraswasta</option>
                                                                            <option value="89">Lainnya</option>
                                                                    </select>
                                <label id="label_id_pekerjaan" style="font-size:10px;color: red;"></label>
                                <label id="label_pekerjaan" style="font-size:10px;color: red;"></label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Nama Institusi/ Perusahaan</label>
                        </div>

                        <div class="col-md-9">
                            <div class="form-group">
                                <input  maxlength="100" type="text" name="organisasi" id="organisasi" class="form-control" placeholder="Organisasi / Tempat Bekerja / Institusi terkait / Freelance / - (bila tidak ada)"  />
                                <label id="label_organisasi" style="font-size:10px;color: red;"></label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Jabatan</label>
                        </div>

                        <div class="col-md-9">
                            <div class="form-group">
                                <input  maxlength="100" type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Jabatan di Perusahaan"  />
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label class="control-label">Alamat Kantor</label>
                        </div>

                        <div class="col-md-9">
                            <div class="form-group">
                                <textarea name="alamat_perusahaan" id="alamat_perusahaan" class="form-control"  placeholder="Alamat Lengkap Perusahaan"> </textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Kode Pos Perusahaan</label>
                        </div>

                        <div class="col-md-9">
                            <div class="form-group">
                                <input  maxlength="100" type="text" name="kode_pos_company" id="kode_pos_company" class="form-control"  placeholder="Masukkan Kode POS Perusahaan"  />
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label class="control-label">No.Telp Perusahaan</label>
                        </div>

                        <div class="col-md-9">
                            <div class="form-group">
                                <input  maxlength="100" type="text" name="no_telp_company" id="no_telp_company"  class="form-control" placeholder="Masukkan No Telp Perusahaan"  />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Email Perusahaan</label>
                        </div>

                        <div class="col-md-9">
                            <div class="form-group">
                                <input  maxlength="100" type="text" id="email_company" name="email_companny"  class="form-control" placeholder="Masukkan Email Perusahaan"  />
                            </div>
                        </div>



                        <div class="col-md-3 col-xs-12"></div>
                        <div style="margin-top:20px; margin-bottom:20px;" class="col-md-9 col-xs-12">
                        Note : <b class="harus_diisi">*</b> Wajib di isi
                            <button id="selanjutnya-2" class="btn btn-success nextBtn btn-md pull-left col-xs-12" type="button" >Selanjutnya (Langkah 2)</button>
                        </div>

                    </div>


                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx        END STEP 1        xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

                </div>
                <div class="row setup-content" id="step-2">

                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx        START STEP 2        xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="col-md-12 formStep3">

                        <div class="col-md-12" id="div_unit_dipilih">
                            <div id="unit_dipilih"></div>
                        </div>

                        <div class="col-md-12" id="div_list_bukti_pendukung">
                        <h3> PERSYARATAN DASAR & ADMINISTRASI PENDUKUNG</h3>
                        <div class="col-md-12" id="div_skema_syarat">
                            <div id="skema_syarat"></div>
                        </div>
                        <h5>Upload <b>Bukti Pendidikan</b>(Ijazah atau Transkrip), <b>Bukti Pelatihan</b>(Sertifikat Pelatihan) atau <b>Bukti Pengalaman Kerja</b>(Surat Keterangan/CV)</h5>
                            <div class="alert alert-info">
                                1. Upload dapat lebih dari 1 file. Klik Browse. <br/>
                                2. Ekstensi file yang di perbolehkan Image dan PDF

                            </div>



                            <div class="col-md-6 col-xs-12" align="right">Pasfoto <b class="harus_diisi">*</b> :</div>
                            <div class="col-md-6 col-xs-12">
                                <div id="fotodiv"></div>
                                <input accept="image/*" type="file" id="foto" class="form-control input-sm uploadData" required />
                            </div>
                            <div style="clear: both;margin-bottom: 10px;"></div>

                            <div class="col-md-6 col-xs-12" align="right">Identitas Pribadi (KTP / Kartu Pelajar) <b class="harus_diisi">*</b> :</div>
                            <div class="col-md-6 col-xs-12">
                                <div id="ktp_kkdiv"></div>
                                <input accept="image/*" type="file"  id="ktp_kk" class="form-control input-sm uploadData" required />
                            </div>

                            <div style="clear: both;margin-bottom: 10px;"></div>
                            <div class="col-md-6 col-xs-12" align="right">Bukti Pendidikan
                                <b class="harus_diisi">*</b> :</div>
                            <div class="col-md-6 col-xs-12"><div id="pendidikandiv"></div>
                                <input accept="image/*,.pdf" type="file" id="pendidikan"  class="form-control input-sm uploadData" required />
                            </div>
                            <div style="clear: both;margin-bottom: 10px;"></div>
                            <div class="col-md-6 col-xs-12" align="right">Bukti Pelatihan :</div>
                            <div class="col-md-6 col-xs-12">
                                <div id="bukti_pelatihandiv"></div>
                                <input accept='image/*,.pdf'  type="file" name="file_data[]" id="bukti_pelatihan" class="form-control input-sm uploadData"/>
                            </div>

                            <div style="clear: both;margin-bottom: 10px;"></div>
                            <div class="col-md-6 col-xs-12" align="right">Bukti Pengalaman Kerja :</div>
                            <div class="col-md-6 col-xs-12">
                                <div id="bukti_bekerjadiv"></div>
                                <input accept='image/*,.pdf'  type="file" name="file_data[]" id="bukti_bekerja" class="form-control input-sm uploadData" />
                            </div>


                            <div style="clear: both;margin-bottom: 10px;"></div>
                            <h3> BUKTI RELEVAN / PORTOFOLIO</h3>
                        <h5>Contoh Bukti relevan antara lain Laporan Project, Sertifikat Kompetensi, Penghargaan dan Job Sheet</h5>

                            <div class="col-md-6 col-xs-12" align="right">Portofolio:</div>
                            <div class="col-md-6 col-xs-12">
                                <div id="portfoliodiv"></div>
                                <input accept='image/*,.pdf'  type="file" name="file_data[]" id="portfolio" class="form-control input-sm uploadData"/>
                            </div>
                            <div style="clear: both;margin-bottom: 10px;"></div>


                            <br />
                            <div class="col-md-6" >

                            </div>
                            <div class="col-md-6" style="margin-bottom: 20px;">
                                <button class="btn btn-success nextBtn btn-md pull-left" type="button" id="selanjutnya-3">Selanjutnya (Langkah 3)</button>
                            </div>
                        </div>

                    </div>

                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx       END STEP 2       xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->


                </div>
                <div class="row setup-content" id="step-3">
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx          START STEP 3         xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="col-xs-12">

                        <div class="col-md-12">
                            <fieldset><legend><h3> FR-APL 02 ASESMEN MANDIRI</h3>
                                    <h5> Pastikan anda kompeten sesuai dengan elemen dan kuk yang ada pada setiap unit-unit kompetensi berikuti ini. <b>K(Kompeten) dan BK(Belum Kompeten)</b>K .Pilih Bukti Kompetensi yang relevan dari file yang telah anda upload di tahap sebelumnya.</h5></legend></fieldset>


                            <div class="table-responsive" id="div_skema_yang_dipilih">
                                <div id="div_inner"></div>
                            </div>
                            <div class="col-md-12" style="margin-bottom: 20px;">
                                <button class="btn btn-success nextBtn btn-md pull-left col-md-12" type="button" id="selanjutnya-4">Selesai dan Kirim</button>
                            </div>
                        </div>

                        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx          END STEP 3         xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

                    </div>

                </div>


        </div>
    </form>
</div>
<!-- <script src="https://sertifikasi.lspdigital.id/assets/global/plugins/jquery.min.js" type="text/javascript"></script> -->
<script src="https://sertifikasi.lspdigital.id/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://sertifikasi.lspdigital.id/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script>

 function hanyaHuruf(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
            return false;
        return true;
    }
    var values = '1.2.2013'.split("."); //Default date
    var parsed_date = new Date(values[2], values[1] - 1, values[0]);



    $(function () {

        // $( "#tanggal_lahir" ).datepicker({
        //     changeYear: true,
        //     minDate: '-3M',
        //     maxDate: '+28D',
        //     defaultDate: parsed_date,
        // });
    });

    //^ not working

    //$('.tanggal_lahir').pickadate();
    //  var picker = $('.tanggal_lahir').pickadate('picker');
    //  picker.set('min', new Date(2015,4,14));
    //  $('.change-date').on('click', function() {
    //   picker.set('max', new Date(2018,4,25));
    // });

    var base_url = "https://sertifikasi.lspdigital.id/";
    function add_combo() {
        var hasil = [];
        $(".input-field").each(function () {
            var fileName = $(this).val().split('/').pop().split('\\').pop();
            //console.log(fileName);
            hasil.push(fileName);
        });
        return hasil;
    }
    function create_combo() {
        var bukti_sertifikat = "";
        var bukti_s = "";
        var pilih = "";
        var port = "";
        var data = add_combo();
        $.each(data, function (key, value) {
            port = value.substr(0,4);
            if(port != "foto" && port != "ktp_" ){
            pilih = "<option value=''>-Pilih Bukti-</option>";
            bukti_sertifikat = bukti_sertifikat + "<option value='" + value + "'>" + value + "</option>";
            bukti_s = bukti_s + "<option selected value='" + value + "'>" + value + "</option>";
            }
        })

        if(port == "bukt" || port == "port"){
        //alert(bukti_sertifikat);
        $(".select_bukti").text('');
        $(".select_bukti").append("<select name='pilih[]' required class='form-control drop-pilih'>"+ pilih + " " + bukti_sertifikat+ "</select>");
        $("#div_bukti").append("<select multiple name='bukti_pendukung[]'>" + bukti_s + "</select>");
    }else{
            $(".select_bukti").text('Tidak ada');
        }
        //$("#div_bukti").show();

    }
    $('#all_k').on('click', function () {
        alert('ok');
    })
    $('#all_bk').on('click', function () {
        alert('ok');
    })

    $(document).ready(function () {
        $('#email').val();
        $('#validasi_email').val();
        $("#selanjutnya-4").click(function () {
            // $('#selanjutnya-4').prop('disabled', true);
            $('#step_langkah').val('5');
            var valuess = $("select[name^='pilih']").map(function (idx, ele) {
                $('#div_pilih').append('<input type="hidden" name="pilih_array[]" value="' + $(ele).val() + '" />');
            }).get();
            var cek_radio = $("input:radio[class='value_bk']").is(":checked");
            if (cek_radio == true) {
                alert("Semua Elemen Kompetensi atau KUK harus Kompeten");
            } else {
                var tanya = confirm('Apakah Data yang anda isi sudah benar ?');
                if (tanya) {
                    $('#form_submit').submit();
                }

            }
        })
        $("#selanjutnya-3").on('click', function () {
            var cekStep3 = $(".formStep3 input:required");
            var cekNamaDok = $(".formStep3 select:required");
            var countDt = 0;
            $.each(cekStep3, function (key, value) {
                if (value.value == "") {
                    $("#" + value.id).focus();
                    return false;
                } else {
                    countDt++;
                }
            })

            var countDok = 0;
            $.each(cekNamaDok, function (key, value) {
                if (value.value != "") {
                    countDok++;
                }
            })

            if (countDok < cekNamaDok.length) {
                alert("Piih Nama Dokumen terlebih dahulu !");
                preventDefault();
            }

            if (countDt < cekStep3.length) {
                alert("Tanda * Wajib Diisi !");
                return false;
            }

            $('#step_langkah').val('4');
            var validasiwajib1 = $('#wajib1').val();
            var drophidden = $('#drophidden').val();
            var class_evidence_required = $('.class_evidence_required').val();
            //alert(drophidden);
            //console.log(validasiwajib1);

            if (class_evidence_required === 'undefined' || class_evidence_required == "") {
                alert('Masukkan Nama Bukti Pendukung. !');
                return false;
            }
            if (validasiwajib1 == '') {
                alert('Bukti Pendukung Kosong. Klik Add More!');
                preventDefault();
            } else if (drophidden == "") {
                alert('Upload Bukti Pendukung');
                preventDefault();
            } else {
                id = $('#skema_sertifikasi').val();
                $.ajax({
                    type: 'post',
                    url: base_url + 'welcome/uji_kompetensi_skema',
                    data: {id: id},
                    cache: false,
                    success: function (data) {
                        $('#div_inner').remove();
                        $('#div_skema_yang_dipilih').append('<div id="div_inner"></div>');
                        $('#div_inner').append(data);
                        create_combo();
                        $('#all_bk').attr('checked', true);
                        $('.value_bk').attr('checked', true);
                        $('#all_k').change(function () {
                            $('#all_bk').attr('checked', false);
                            $('.value_k').prop('checked', $(this).prop("checked"));
                        })
                        $('#all_bk').click(function () {
                            $('#all_k').attr('checked', false);
                            $('.value_bk').prop('checked', $(this).prop("checked"));
                        })
                    }
                });
            }
        });


        $("#selanjutnya-2").click(function (e) {
            var cekRequired = $(".formStep2 input:required")
            var countRequired = 0
            $.each(cekRequired, function (key, value) {
                if (value.value === "") {
                    $("#" + value.id).focus();
                    return false;
                }
                countRequired++;
            })
            if (countRequired < cekRequired.length) {
                return false;
            }

            $('#step_langkah').val('3');
            $('#wajib1').val("");
            $('#drophidden').val("");
            id = $('#skema_sertifikasi').val();
            $.ajax({
                type: 'post',
                url: base_url + 'welcome/detail',
                data: {id: id},
                cache: false,
                success: function (data) {
                    $('#unit_dipilih').remove();
                    $('#div_unit_dipilih').append('<div id="unit_dipilih"></div>');
                    $('#unit_dipilih').append(data);
                    create_combo();
                    $('#all_bk').attr('checked', true);
                    $('.value_bk').attr('checked', true);
                    $('#all_k').change(function () {
                        $('#all_bk').attr('checked', false);
                        $('.value_k').prop('checked', $(this).prop("checked"));
                    })
                    $('#all_bk').click(function () {
                        $('#all_k').attr('checked', false);
                        $('.value_bk').prop('checked', $(this).prop("checked"));
                    })
                    $('#file_bukti_pendukung').focus();
                }
            });
            $.ajax({
                type: 'post',
                url: base_url + 'welcome/skema_syarat',
                data: {id: id},
                cache: false,
                success: function (data) {
                    $('#skema_syarat').remove();
                    $('#div_skema_syarat').append('<div id="skema_syarat"></div>');
                    $('#skema_syarat').append(data);
                }
            });
        });
        $(document).on('change', '#id_pekerjaan', function(){
                if($(this).val() == 1 || $(this).val() == 3)
                {

                    var perg_tinggi = $('#perg_tinggi').val();
                    //$('#organisasi').append('<input type="hidden" name="organisasi" value="'+perg_tinggi+'" />');
                    //$('#jabatan').append('<input type="hidden" name="jabatan" value="-" />');
                    //$('#alamat_perusahaan').append('<input type="hidden" name="alamat_perusahaan" value="-" />');
                    //$('#kode_pos_company').append('<input type="hidden" name="kode_pos_company" value="-" />');
                    //$('#no_telp_company').append('<input type="hidden" name="no_telp_company" value="-" />');
                    //$('#email_company').append('<input type="hidden" name="email_company" value="-" />');

                    //$('#organisasi').val(perg_tinggi);
                    //$('#email_company,#no_telp_company,#kode_pos_company,#alamat_perusahaan,#jabatan').val('-');

                    $('#organisasi').attr('disabled', true);
                    $('#jabatan').attr('disabled', true);
                    $('#alamat_perusahaan').attr('disabled', true);
                    $('#kode_pos_company').attr('disabled', true);
                    $('#no_telp_company').attr('disabled', true);
                    $('#email_company').attr('disabled', true);
                }else {
                    $('#organisasi').removeAttr('disabled');
                    $('#organisasi').val('');
                    $('#jabatan').removeAttr('disabled');
                    $('#alamat_perusahaan').removeAttr('disabled');
                    $('#kode_pos_company').removeAttr('disabled');
                    $('#no_telp_company').removeAttr('disabled');
                    $('#email_company').removeAttr('disabled');
                }
        })
    });</script>
<script type="text/javascript">
    function pilih_skema(id) {
        $('#skema_yang_dipilih').val(id);
        $('#step_langkah').val('2');
    }
    function hapus_evidence(id) {
        $(".evidence-" + id).remove();
        var isiwajib1 = parseInt($('#wajib1').val());
        $('#wajib1').val(isiwajib1 - 1);
    }
    function hapus_evidence2(id) {
        $(".evidence2-" + id).remove();
    }
    function hapus_evidence3(id) {
        $(".evidence3-" + id).remove();
    }
    $(document).ready(function () {
        $('#login-btn').hide();
        var i = 2;

        var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn'),
                allPrevBtn = $('.prevBtn');
        allWells.hide();
        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                    $item = $(this);
            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });
        allNextBtn.click(function (e) {
            var steps = $('#step_langkah').val();
            var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='radio'],input[type='url'],input[type='file'],select,textarea"),
                    isValid = true;
            //console.log(curInputs[0].id);
            $(".form-group").removeClass("has-error");
            for (var i = 0; i < curInputs.length; i++) {
                //alert(curInputs[i].id);
                //console.log(curInputs[i].id);
                if (curInputs[i].id != 'alamat' || curInputs[i].id != 'jenis_kelamin') {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                        $('#label_' + curInputs[i].id).text('Isian Harus Diisi!');
                    } else {
                        $('#label_' + curInputs[i].id).text('');
                    }
                } else {
                    //var isiAlamat = curInputs[i].value;
                    //alert('#label_'+curInputs[i].value);
                    //console.log(curInputs[i].valsue);
                    if (curInputs[i].value === "") {
                        isValid = false;
                        $('#label_' + curInputs[i].id).text('Isian Harus Diisi!');
                        //alert(curInputs[i].value);
                    } else {

                        $('#label_' + curInputs[i].id).text('');
                    }

                }

            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });
        allPrevBtn.click(function () {
            var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");
            $(".form-group").removeClass("has-error");
            prevStepWizard.removeAttr('disabled').trigger('click');
        });
        $('div.setup-panel div a.btn-primary').trigger('click');
        $('#myOverlay').hide();
        $('#loadingGIF').hide();
    });

</script>


<!-- START ASSET STEP 1 -->
<!-- <script src="https://sertifikasi.lspdigital.id/assets/js/jquery.min.js" type="text/javascript"></script> -->
<script src="https://sertifikasi.lspdigital.id/assets/plugins/select2-4.0.3/dist/js/select2.full.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-chained/1.0.1/jquery.chained.js"></script>
<script type="text/javascript">
    $("#id_provinsi_ktp").select2({
        placeholder: "Cari Provinsi",
        allowClear: true

    });
    $(".comboSelect2").select2({
        placeholder: "Pilih Data",
        allowClear: true
    });

    $("#id_provinsi_ktp").change(function () {
        //alert('ok');
        $('#myOverlay').show();
        $('#loadingGIF').show();

        var urlLink = "https://sertifikasi.lspdigital.id/welcome/get_subkabupaten/" + $(this).val();
        $('#kabupaten').load(urlLink);

        $('#myOverlay').hide();
        $('#loadingGIF').hide();
        return false;
    })

    $("#kabupaten").change(function () {
        $('#myOverlay').show();
        $('#loadingGIF').show();
        var url = "https://sertifikasi.lspdigital.id/welcome/get_subkecamatan/" + $(this).val();
        $('#kecamatan').load(url);
        $('#myOverlay').hide();
        $('#loadingGIF').hide();
        return false;
    })

    $(function () {
        $('#tanggal_lahir').datepicker({
            dateFormat: 'yy-mm-dd',
            changeYear: true,
            yearRange: "1995:2005"
        });
        $('.input-number').keypress(validateNumber);
        $('.input-number-ktp').keypress(validateNumberKtp);
        $('.input-email').focusout(ValidateEmail);
        $("#jadwal_id").select2({
            placeholder: "Jadwal Uji Kompetensi",
            allowClear: true
        });
    })
    $('select').val('');
    // $("#jadwal_id").select2({
    //   placeholder: "Jadwal Uji Kompetensi",
    //   allowClear: true
    // });

    $("#skema_sertifikasi").select2({
        placeholder: "Pilih Skema",
        allowClear: true
    });
    $("#jadwal_id").chained("#skema_sertifikasi");
    $("#id_sumber_anggaran").chained("#jadwal_id");
    $("#id_instansi_anggaran").chained("#jadwal_id");
    //$("#id_jurusan").change(function (){
//        //alert('ok');
//        $('#myOverlay').show();
//        $('#loadingGIF').show();
//        var url = "https://sertifikasi.lspdigital.id/welcome/get_jadwal_ajax/"+$(this).val();
//
//        $('#jadwal_id').load(url);
//        $('#myOverlay').hide();
//        $('#loadingGIF').hide();
//        return false;
//      });

    // $("#jadwal_id").change(function (){
//        //alert('ok');
//        $('#myOverlay').show();
//        $('#loadingGIF').show();
//        var id_skema = "https://sertifikasi.lspdigital.id/welcome/get_mapping_skema/"+$(this).val();
//
//        $('#id').load(id_skema);
//        $('#myOverlay').hide();
//        $('#loadingGIF').hide();
//        return false;
//      });

    //$("#jadwal_id").chained("#id_jurusan");


    // $("#jadwal_id").select2().on("change", function (e) {
    //     $('#myOverlay').show();
    //               $('#loadingGIF').show();
    //       var id = $(this).val();
    //       $.ajax({
    //           url: 'welcome/get_asesor',
    //           method: 'POST',
    //           data: {id: id},
    //           dataType: 'JSON',
    //           success: function (data) {
    //               var html = '<select required class="form-control" name="id_asesor" id="id_asesor"><option value="">--Pilih--</option>';
    //               var i;
    //               for (i = 0; i < data.length; i++) {
    //                   html += '<option value="' + data[i].id + '">' + data[i].users + '</option>';
    //               }
    //               html += '</select>';
    //               $('#id_asesor').val(data);
    //               $('#myOverlay').hide();
    //                       $('#loadingGIF').hide();
    //           }
    //       });
    //   });

        function validateNumber(event) {
        var key = window.event ? event.keyCode : event.which;
        if (event.keyCode === 8 || event.keyCode === 46) {
            return true;
        } else if (key < 48 || key > 57) {
            return false;
        } else {
            return true;
        }
    }
    ;
    function validateNumberKtp(event) {

        var max_chars = 15;
        var key = window.event ? event.keyCode : event.which;
        //console.log(key);
        if (event.keyCode === 8 || event.keyCode === 46) {
            return true;
        } else if (key < 48 || key > 57) {
            return false;
        } else {
            // console.log($(this).val().length);
            if ($(this).val().length > max_chars) {
                return false;
            } else {
                return true;
            }
            //return true;
        }


    }
    ;

    function ValidateEmail(mail)
    {
        alamatEmail = $('#email').val();
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(alamatEmail))
        {
            return (true)
        }
        alert("Masukkan alamat email yang valid!");
        $('#email').val('');
        return (false)
    }
</script>
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx      END ASSET STEP 1        xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx      START ASSET STEP 2      xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx  -->
<script type="text/javascript">
    $(document).ready(function () {
        // $('.input-number').keypress(validateNumber);
        // $('.input-number-ktp').keypress(validateNumberKtp);
        // $('.input-number-hp').keypress(validateNumberHP);
        // $('.input-number-th').keypress(validateNumberth);
        // $('.input-number-kodepos').keypress(validateNumberkodepos);


        // $('[data-toggle="tooltip"]').tooltip();
        // upload_file_ajax("welcome/upload_ajax/pendidikan", "pendidikan", "pendidikan");
        upload_file_ajax("welcome/upload_ajax/pendidikan", "pendidikan", "pendidikan");
        upload_file_ajax("welcome/upload_ajax/foto", "foto", "foto");
        upload_file_ajax("welcome/upload_ajax/ktp_kk", "ktp_kk", "ktp_kk");
        upload_file_ajax("welcome/upload_ajax/bukti_kompetensi", "bukti_kompetensi", "bukti_kompetensi");
        upload_file_ajax("welcome/upload_ajax/bukti_bekerja", "bukti_bekerja", "bukti_bekerja");
        upload_file_ajax("welcome/upload_ajax/bukti_pelatihan", "bukti_pelatihan", "bukti_pelatihan");


        upload_file_ajax("welcome/upload_ajax/portfolio", "portfolio", "portfolio");

    });
    var baseUrl = 'https://sertifikasi.lspdigital.id/';
    function hapusFile(e) {
        $('#myOverlay').show();
        $('#loadingGIF').show();
        objectSebelumnya = e.next();
        //console.log(objectSebelumnya[0].value);

        $.ajax({
            url: baseUrl + 'welcome/hapus_file',
            type: 'POST',
            data: 'nama_file=' + objectSebelumnya[0].value,
            success: function () {
                $('#myOverlay').hide();
                $('#loadingGIF').hide();
                return false;
            },
            error: function (request, status, error) {
                alert(request.responseText);
                $('#myOverlay').hide();
                $('#loadingGIF').hide();
            }
        });
        objectBerikutnya = objectSebelumnya.next();
        objectSebelumnya.remove();
        objectBerikutnya.remove();
        e.remove();
    }
    function upload_file_ajax(toUrl, stringDiv, stringReturnName) {
        $('#' + stringDiv).on('change', function (e) {

            //alert(stringDiv);
            e.preventDefault();
            var urlTarget = baseUrl + toUrl;
            var f = $('#' + stringDiv);
            var listFiles = f[0].files;
            var formData = new FormData();
            formData.append('file', listFiles[0]);
            $('#myOverlay').show();
            $('#loadingGIF').show();
            $.ajax({
                url: base_url+""+urlTarget + '/' + stringDiv,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {
                    data = JSON.parse(data);
                    if (data.error) {
                        $('#myOverlay').hide();
                        $('#loadingGIF').hide();
                        $(stringDiv + "div").val("");
                        alert(data.error);
                        //alert('dasd');
                    } else {
                        var txt = "<div class='input-container'><i onclick='hapusFile($(this))' class='fa fa-remove icon'></i><input type='text' name='file_upload[]' class='form-control input-field' value='" + data.upload_data.file_name + "' readonly /><input type='hidden' name='jenis_file[]' value='" + stringDiv + "' /></div>";
                        $("#" + stringDiv + "div").append(txt);
                        $('#myOverlay').hide();
                        $('#loadingGIF').hide();
                    }
                },
                error: function (request, status, error) {
                    alert(request.responseText);
                    $('#myOverlay').hide();
                    $('#loadingGIF').hide();
                }
            });
            return false;
        });
    }
    $("#btn_addmore").click(function () {

        var addmore = $(".dokumen_tambah");
        var item = "<div class='cAddmore'>";
        item += "<div style='clear:both;margin-top:20px;'></div>";
        item += "<div class='col-md-6 col-xs-12'>";

        item += dropdown_dokumen();

        item += "</div>";
        item += "<div class='col-md-5 col-xs-12'><input type='file' name='file_data[]' class='form-control inputControl uploadData' required /></div>";
        item += "<div class='col-md-1 col-xs-12'><button type='button' class='btn btn-danger btn-sm btn-remove' onclick='remove_dokumen(this);'> - </button></div>";
        item += "<div style='clear:both;margin-top:10px;'></div>";
        item += "</div>";

        addmore.append(item);

        return false;
    })

    function dropdown_dokumen() {
        var data = [
            {name: '', value: '- Nama Dokumen -'},
            {name: 'foto', value: 'Foto'},
            {name: 'kartu_pelajar', value: 'Kartu Pelajar'},
            {name: 'pendidikan', value: 'pendidikan'},
            {name: 'pelatihan', value: 'Sertifikat Pelatihan'},
            {name: 'penghargaan', value: 'Penghargaan'},
            {name: 'prakarya', value: 'Tugas / Pra karya '},
            {name: 'lain-lain', value: 'Lain-lain'},
        ];

        var dropdown = "<select name='nama_dokumen[]' class='form-control nmdokumen' required>";
        $.each(data, function (key, hasil) {
            console.log(hasil);
            console.log(key);
            dropdown += "<option value='" + hasil.name + "'>" + hasil.value + "</option>";
        });
        dropdown += "</select>";

        return dropdown;
    }

    function remove_dokumen(data) {
        console.log(data);
        $(data).closest('.cAddmore').remove();
        return false;
    }
    function ValidateEmail(mail)
    {
        alamatEmail = $('#email').val();
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(alamatEmail))
        {
            return (true)
        }
        alert("Masukkan alamat email yang valid!");
        $('#email').val('');
        return (false)
    }

</script>

<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx     END ASSET 2     xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

@endsection
@section('administrasi','active')
