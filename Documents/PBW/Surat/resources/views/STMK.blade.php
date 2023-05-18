@extends('navbar')
@section('navbar')
    @parent
    <div class="container mt-28">
        <div class="surat-body md:px-[100px] mt-28 bg-white shadow-lg mx-4 rounded-[30px] mt-4 flex-col md:flex font cursor-default px-8 py-8 md:mx-8 top-16">
        <h2 class="mb-4 font-bold text-2xl">Surat Tidak Masuk Kerja</h2>
        <form method="post" action="{{ url('/proses-tidakMasukKerja') }}">
            {{ csrf_field() }}
            <div class="container mt-4">
                <h3 class="font-bold mt-16">Biodata</h3>
                <div class="form-group mt-8 rounded-sm drop-shadow-lg">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="isiNama" name="isiNama"
                        placeholder="Masukkan Nama Lengkap Anda" required />
                </div>
                <div class="form-group mt-8 rounded-sm drop-shadow-lg">
                    <label for="desa">Desa/Kelurahan </label>
                    <input type="text" class="form-control" id="isiDesa" name="isiDesa"
                        placeholder="Desa Durian Runtuh" required />
                </div>
                <div class="form-group mt-8 rounded-sm drop-shadow-lg">
                    <label for="desa">Kecamatan </label>
                    <input type="text" class="form-control" id="isiKecamatan" name="isiKecamatan"
                        placeholder="Darussalam" required />
                </div>
                <div class="form-group mt-8 rounded-sm drop-shadow-lg">
                    <label for="desa">Kabupaten </label>
                    <input type="text" class="form-control" id="isiKabupaten" name="isiKabupaten"
                        placeholder="Aceh Besar" required />
                </div>

                <div class="form-group mt-8 rounded-sm drop-shadow-lg">
                    <label for="jenis">Jenis Identitas </label>
                    <select class="form-control" name="isiJenisIdentitas" aria-label="Default select example"
                        required="">
                        <option selected="" value="">Pilih Jenis Identitas</option>
                        <option value="KTP">KTP</option>
                        <option value="KIK">KIK</option>
                        <option value="KTK">KTK</option>

                    </select>
                </div>
                <br>
                <div class="form-group mt-8 rounded-sm drop-shadow-lg">
                    <label for="desa">No. Identitas </label>
                    <input type="text" class="form-control" id="isiNomorIdentitas" name="isiNomorIdentitas"
                        required />
                </div>

            </div>
            <div class="container mt-4">
                <div class="form-group mt-8 rounded-sm drop-shadow-lg">
                    <label for="desa">Jabatan</label>
                    <input type="text" class="form-control" id="isiJabatan" name="isiJabatan"
                        placeholder="Mis. Staf Regist" required />
                </div>
                <div class="form-group mt-8 rounded-sm drop-shadow-lg">
                    <label for="tglOrtu">Mulai Izin Kerja</label>
                    <input type="date" class="form-control" id="isiMulaiIzin" name="isiMulaiIzin"
                        placeholder="Mulai Izin Masuk Kerja" required />
                </div>

                <div class="form-group mt-8 rounded-sm drop-shadow-lg">
                    <label for="tglOrtu">Akhir Izin Kerja</label>
                    <input type="date" class="form-control" id="isiAkhirIzin" name="isiAkhirIzin"
                        placeholder="Akhir Izin Masuk Kerja" required />
                </div>
                <div class="form-group mt-8 rounded-sm drop-shadow-lg">
                    <label for="sebab">Sebab</label>
                    <input type="text" class="form-control" id="isiSebab" name="isiSebab"
                        placeholder="Berhalangan/Sakit" required />
                </div>

                <div class="form-group mt-8 rounded-sm drop-shadow-lg">
                    <label for="keteranganizin">Keterangan Izin</label>
                    <input type="text" class="form-control" id="isiAlasanIzin" name="isiAlasanIzin" required />
                </div>
            </div>
            <div class="container mt-4">

                <div class="form-group mt-8 rounded-sm drop-shadow-lg">
                    <label for="nama">Kepala Instansi</label>
                    <input type="text" class="form-control" id="isiKepalaInstansi" name="isiKepalaInstansi"
                        placeholder="Masukkan Nama Instansi" required />
                </div>
                <div class="form-group mt-8 rounded-sm drop-shadow-lg">
                    <label for="nama">Alamat Instansi</label>
                    <input type="text" class="form-control" id="isiAlamatInstansi" name="isiAlamatInstansi"
                        placeholder="Masukkan Alamat Instansi" required />
                </div>
                <div class="form-group mt-8 rounded-sm drop-shadow-lg">
                    <label for="tempatbuatsurat">Tempat Pembuatan Surat Instansi</label>
                    <input type="text" class="form-control" id="isiTempatBuatSurat" name="isiTempatBuatSurat"
                        placeholder="Masukkan Tempat Pembuatan Surat" required />
                </div>
                <div class="form-group mt-8 rounded-sm drop-shadow-lg">
                    <label for="tanggal">Tangal Pembuatan Surat</label>
                    <input type="date" class="form-control" id="isiTanggalBuatSurat" name="isiTanggalBuatSurat"
                        placeholder="Masukkan Tanggal Pembuatan Surat" required />
                </div>
                <div class="form-group mt-8 rounded-sm drop-shadow-lg mt-2 text-end">
                    <input type="submit" value="Download Surat" name="submit" class="flex w-[150px] mt-[20px] mx-auto px-auto bg-gradient-to-r from-yellow-600 to-yellow-300 rounded-lg p-2 hover:from-blue-500 hover:to-blue-200 md:w-[140px] md:text-sm md:mx-auto md:mx-0 md:mb-8 md:mt-8 text-white  ">
                </div>
            </div>
    </div>

    </form>
    </div>
</div>