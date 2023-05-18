@extends('navbar')
@section('navbar')
    @parent
    <div class="container mt-28">
        <div class="surat-body md:px-[100px] mt-28 bg-white shadow-lg mx-4 rounded-[30px] mt-4 flex-col md:flex font cursor-default px-8 py-8 md:mx-8 top-16">
        <h2 class="mb-4 font-bold text-2xl">Surat Izin Orang Tua</h2>
        <form method="post" action="{{ url('/proses-izinOrtu') }}">
            {{ csrf_field() }}
            <div class="container mt-4">
                <h3>Biodata Orang Tua :</h3>
                <div class="form-group mt-8">
                    <label for="nama">Nama Orang Tua</label>
                    <input type="text" class="border rounded-lg border-gray" id="isiNamaOrtu" name="isiNamaOrtu"
                        placeholder="Masukkan Nama Lengkap Anda" required />
                </div>
                <div class="form-group mt-8">
                    <label for="ktp">No. KTP</label>
                    <input type="text" class="border rounded-lg border-gray" id="isiNoKtp" name="isiNoKtp"
                        placeholder="xxxxxxxxxxxxxx" required />
                </div>
                <div class="form-group mt-8">
                    <label for="tempatLahir">Tempat Lahir</label>
                    <input type="text" class="border rounded-lg border-gray" id="isiTempatLahirOrtu" name="isiTempatLahirOrtu"
                        placeholder="Masukkan Tempat Lahir Anda" required />
                </div>

                <div class="form-group mt-8">
                    <label for="tglOrtu">Tangal Lahir</label>
                    <input type="date" class="border rounded-lg border-gray" id="isiTglLahirOrtu" name="isiTglLahirOrtu"
                        placeholder="Masukkan Tanggal Lahir Orang Tua" required />
                </div>

                <div class="form-group mt-8">
                    <label for="pekerjaanOrtu">Pekerjaan Orang Tua</label>
                    <input type="text" class="border rounded-lg border-gray" id="isiPekerjaanOrtu" name="isiPekerjaanOrtu"
                        placeholder="Masukkan Pekerjaan Orang Tua" required />
                </div>
                <div class="form-group mt-8">
                    <label for="noTeleponOrtu">No. Telepon Orang Tua</label>
                    <input type="text" class="border rounded-lg border-gray" id="isiNoTeleponOrtu" name="isiNoTeleponOrtu"
                        placeholder="08xx xxxx xxxx" required />
                </div>
                <div class="form-group mt-8">
                    <label for="alamatOrtu">Alamat Orang Tua</label>
                    <textarea name="isiAlamatOrtu" rows="4" class="border rounded-lg border-gray"></textarea>
                </div>

            </div>

            <div class="container mt-4">
                <h3>Biodata Anak</h3>
                <div class="form-group mt-8">
                    <label for="nama">Nama Anak</label>
                    <input type="text" class="border rounded-lg border-gray" id="isiNamaAnak" name="isiNamaAnak"
                        placeholder="Masukkan Nama Lengkap Anak" required />
                </div>
                <div class="form-group mt-8">
                    <label for="pendidikan">Pendidikan</label>
                    <select class="border rounded-lg border-gray" name="isiPendidikanAnak" aria-label="Default select example"
                        required="">
                        <option selected="" value="">Pilih Jenjang Pendidikan</option>
                        <option value="TK">TK/PAUD</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                    </select>
                </div>
                <div class="form-group mt-8">
                    <label for="tempatLahir">Tempat Lahir Anak</label>
                    <input type="text" class="border rounded-lg border-gray" id="isiTempatLahirAnak" name="isiTempatLahirAnak"
                        placeholder="Masukkan Tempat Lahir Anda" required />
                </div>

                <div class="form-group mt-8">
                    <label for="tglAnak">Tangal Lahir</label>
                    <input type="date" class="border rounded-lg border-gray" id="isiTglLahirAnak" name="isiTglLahirAnak"
                        placeholder="Masukkan Tanggal Lahir Anak" required />
                </div>

                <div class="form-group mt-8">
                    <label for="alamatAnak">Alamat Anak</label>
                    <textarea name="isiAlamatAnak" rows="4" class="border rounded-lg border-gray"></textarea>
                </div>
                <div class="form-group mt-8">
                    <label for="organisasi">Kegiatan</label>
                    <input type="text" class="border rounded-lg border-gray" id="isiKegiatan" name="isiKegiatan"
                        placeholder="Masukkan Kegiatan yang akan anda lakukan" required />
                </div>
                <div class="form-group mt-8">
                    <label for="nama">Tempat Pembuatan Surat</label>
                    <input type="text" class="border rounded-lg border-gray" id="isiTempatBuatSurat" name="isiTempatBuatSurat"
                        placeholder="Masukkan Tempat Pembuatan Surat" required />
                </div>
                <div class="form-group mt-8">
                    <label for="nama">Tangal Pembuatan Surat</label>
                    <input type="date" class="border rounded-lg border-gray" id="isiTanggalSurat" name="isiTanggalSurat"
                        placeholder="Masukkan Tanggal Pembuatan Surat" required />
                </div>
                
                    <div class="form-group mt-2 text-end">
                        <input type="submit" value="Download Surat" name="submit" class="flex w-[150px] mt-[20px] mx-auto px-auto bg-gradient-to-r from-yellow-600 to-yellow-300 rounded-lg p-2 hover:from-blue-500 hover:to-blue-200 md:w-[140px] md:text-sm md:mx-auto md:mx-0 md:mb-8 md:mt-8 text-white  ">
                    </div>
            </div>
    </div>
<br>
<br>
<br>
    </form>
    </div>
</div>