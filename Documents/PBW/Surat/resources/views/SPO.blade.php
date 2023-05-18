@extends('navbar')
@section('navbar')
    @parent
    <div class="container mt-28">
        <div class="surat-body md:px-[100px] mt-28 bg-white shadow-lg mx-4 rounded-[30px] mt-4 flex-col md:flex font cursor-default px-8 py-8 md:mx-8 top-16">
        <h2 class="mb-4 font-bold text-2xl">Surat Penghasilan Orang Tua</h2>
        <form method="post" action="{{ url('/proses-penghasilanOrtu') }}">
            {{ csrf_field() }}
            <div class="container mt-4">
                <div class="container mt-4">

                    <h3 class="font-bold mt-16">TANGGAL DAN TEMPAT BUAT SURAT</h3>

                    <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                        <label for="nama">Tanggal Buat Surat</label>
                        <input type="date" class="form-control  border rounded" id="isiTanggalBuatSurat" name="isiTanggalBuatSurat"
                            placeholder="Masukkan Nama Lengkap Anda" required />
                    </div>
                    <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                        <label for="ktp">Tempat Buat Surat</label>
                        <input type="text" class="form-control  border rounded" id="isiTempatBuatSurat" name="isiTempatBuatSurat"
                            placeholder="Contoh: Bener Meriah" required />
                    </div>
                    <br>
                    <h3 class="font-bold mt-16">KETERANGAN GAJI</h3>
                    <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                        <label for="ktp">Jumlah Gaji Orang Tua</label>
                        <input type="number" class="form-control  border rounded" id="isiPenghasilanOrtu" name="isiPenghasilanOrtu"
                            placeholder="Contoh: 1000000" required />
                    </div>
                    <br>
                    <h3 class="font-bold mt-16">PENGESAHAN</h3>
                    <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                        <label for="ktp">Nama Kepala Desa</label>
                        <input type="text" class="form-control  border rounded" id="isiKepalaDesa" name="isiKepalaDesa"
                            placeholder="Contoh: Edy Fitra" required />
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="container mt-4">
                    <h3 class="font-bold mt-16">DATA ORANG TUA</h3>
                    <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                        <label for="tempatLahir">Nama Lengkap</label>
                        <input type="text" class="form-control  border rounded" id="isiNamaOrtu" name="isiNamaOrtu"
                            placeholder="Joko Andoko" required />
                    </div>
                    <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                        <label for="tempatLahir">Jenis Kelamin</label>
                        <select class="form-control  border rounded" name="isiJenisKelaminOrtu" aria-label="Default select example"
                            required="">
                            <option selected="" value="">Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                        <label for="tempatLahir">Tempat Lahir</label>
                        <input type="text" class="form-control  border rounded" id="isiTempatLahirOrtu" name="isiTempatLahirOrtu"
                            placeholder="Jakarta" required />
                    </div>
                    <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                        <label for="tglOrtu">Tangal Lahir</label>
                        <input type="date" class="form-control  border rounded" id="isiTanggalLahirOrtu" name="isiTanggalLahirOrtu"
                            placeholder="Masukkan Tanggal Lahir Orang Tua" required />
                    </div>
                    <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                        <label for="">Agama <span class="text-danger">*<span></span></span></label>
                        <select class="form-control  border rounded" name="isiAgamaOrtu" aria-label="Default select example"
                            required="">
                            <option selected="" value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Protestan">Kristen Protestan</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>

                        </select>
                    </div>
                    <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                        <label for="tempatLahir">Pekerjaan</label>
                        <input type="text" class="form-control  border rounded" id="isiPekerjaanOrtu" name="isiPekerjaanOrtu"
                            placeholder="Camat" required />
                    </div>
                    <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                        <label for="alamatOrtu">Alamat Lengkap</label>
                        <textarea name="isiAlamatOrtu" rows="4" class="form-control  border rounded"></textarea>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="container mt-4">
                    <h3 class="font-bold mt-16">DATA ANAK</h3>
                    <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                        <label for="tempatLahir">Nama Lengkap</label>
                        <input type="text" class="form-control  border rounded" id="isiNamaAnak" name="isiNamaAnak"
                            placeholder="Joko Andoko" required />
                    </div>
                    <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                        <label for="tempatLahir">Jenis Kelamin</label>
                        <select class="form-control  border rounded" name="isiJenisKelaminAnak" aria-label="Default select example"
                            required="">
                            <option selected="" value="">Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                        <label for="tempatLahir">Tempat Lahir</label>
                        <input type="text" class="form-control  border rounded" id="isiTempatLahirAnak" name="isiTempatLahirAnak"
                            placeholder="Jakarta" required />
                    </div>
                    <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                        <label for="tglAnak">Tangal Lahir</label>
                        <input type="date" class="form-control  border rounded" id="isiTanggalLahirAnak"
                            name="isiTanggalLahirAnak" placeholder="Masukkan Tanggal Lahir Orang Tua" required />
                    </div>
                    <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                        <label for="">Agama <span class="text-danger">*<span></span></span></label>
                        <select class="form-control  border rounded" name="isiAgamaAnak" aria-label="Default select example"
                            required="">
                            <option selected="" value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Protestan">Kristen Protestan</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>

                        </select>
                    </div>
                    <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                        <label for="tempatLahir">Pekerjaan</label>
                        <input type="text" class="form-control  border rounded" id="isiPekerjaanAnak" name="isiPekerjaanAnak"
                            placeholder="Jakarta" required />
                    </div>
                    <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                        <label for="alamatAnak">Alamat Lengkap</label>
                        <textarea name="isiAlamatAnak" rows="4" class="form-control  border rounded"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Download Surat" name="submit" class="flex w-[150px] mt-[20px] mx-auto px-auto bg-gradient-to-r from-yellow-600 to-yellow-300 rounded-lg p-2 hover:from-blue-500 hover:to-blue-200 md:w-[140px] md:text-sm md:mx-auto md:mx-0 md:mb-8 md:mt-8 text-white  ">
                    </div>
                </div>
            </div>
    </div> 
 </form>
    </div>
</div>
