@extends('navbar')
@section('navbar')
    @parent
    <div class="container mt-28">
        <div class="surat-body md:px-[100px] mt-28 bg-white shadow-lg mx-4 rounded-[30px] mt-4 flex-col md:flex font cursor-default px-8 py-8 md:mx-8 top-16">
        <h2 class="mb-4 font-bold text-2xl">Surat Kuasa</h2>
        <form method="post" action="{{ url('/proses-kuasa') }}">
            {{ csrf_field() }}
            <div class="container mt-4">
                <h3  class="font-bold mt-16">TANGGAL DAN TEMPAT SURAT DIBUAT</h3>
                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="tempatsuratdibuat">Tempat Surat Dibuat</label>
                    <input type="text" class="form-control border rounded" id="isiTempatBuatSurat" name="isiTempatBuatSurat"
                        placeholder="Banda Aceh" required />
                </div>
                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="tanggalsuratdibuat">Tanggal Surat Dibuat</label>
                    <input type="date" class="form-control border rounded" id="isiTanggalBuatSurat" name="isiTanggalBuatSurat"
                        required />
                </div>
            </div>
            <div class="container mt-4">
                <h3  class="font-bold mt-16">DATA PEMBERI KUASA</h3>
                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control border rounded" id="isiNamaPemberi" name="isiNamaPemberi"
                        placeholder="Siuman Tringgadeng" required />
                </div>

                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="desa">Tempat Lahir </label>
                    <input type="text" class="form-control border rounded" id="isiTempatLahirPemberi" name="isiTempatLahirPemberi"
                        placeholder=" Darussalam " required />
                </div>
                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="desa">Tanggal Lahir </label>
                    <input type="date" class="form-control border rounded" id="isiTanggalLahirPemberi" name="isiTanggalLahirPemberi"
                        required />
                </div>


                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="telepon">No Telepon </label>
                    <input type="text" class="form-control border rounded" id="isiNoTeleponPemberi" name="isiNoTeleponPemberi"
                        placeholder=" 082398231212 " required />
                </div>
                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="kelamin">Jenis Kelamin </label>
                    <select class="form-control border rounded" name="isiKelaminPemberi" aria-label="Default select example"
                        required="">
                        <option selected="" value="">Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="desa">No. KTP </label>
                    <input type="number" class="form-control border rounded" id="isiNoKtpPemberi" name="isiNoKtpPemberi"
                        placeholder="1117291321321" required />
                </div>
                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="alamat">Alamat </label>
                    <textarea name="isiAlamatPemberi" rows="4" class="form-control border rounded"></textarea>
                </div>
            </div>
            <div class="container mt-4">
                <h3  class="font-bold mt-16">DATA PENERIMA KUASA</h3>
                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="nama">Nama Penerima</label>
                    <input type="text" class="form-control border rounded" id="isiNamaPenerima" name="isiNamaPenerima"
                        placeholder="Muzails" required />
                </div>

                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="tempat">Tempat Lahir</label>
                    <input type="text" class="form-control border rounded" id="isiTempatLahirPenerima"
                        name="isiTempatLahirPenerima" placeholder="Takengon" required />
                </div>
                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="tglOrtu">Tanggal Lahir</label>
                    <input type="date" class="form-control border rounded" id="isiTanggalLahirPenerima"
                        name="isiTanggalLahirPenerima" placeholder="Mulai Izin Masuk Kerja" required />
                </div>


                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="tglOrtu">No. Telepon</label>
                    <input type="number" class="form-control border rounded" id="isiNoTeleponPenerima" name="isiNoTeleponPenerima"
                        placeholder="082248324" required />
                </div>
                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="kelamin">Jenis Kelamin </label>
                    <select class="form-control border rounded" name="isiKelaminPenerima" aria-label="Default select example"
                        required="">
                        <option selected="" value="">Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="desa">No. KTP </label>
                    <input type="number" class="form-control border rounded" id="isiNoKtpPenerima" name="isiNoKtpPenerima"
                        placeholder="1117291321321" required />
                </div>
                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="alamat">Alamat </label>
                    <textarea name="isiAlamatPenerima" rows="4" class="form-control border rounded"></textarea>
                </div>

            </div>
            <div class="container mt-4">
                <h3  class="font-bold mt-16">ISI SURAT KUASA</h3>

                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="tujuan">Tujuan Pembuatan Surat Kuasa </label>
                    <textarea name="isiKeperluan" rows="4" class="form-control border rounded"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Download Surat" name="submit" class="flex w-[150px] mt-[20px] mx-auto px-auto bg-gradient-to-r from-yellow-600 to-yellow-300 rounded-lg p-2 hover:from-blue-500 hover:to-blue-200 md:w-[140px] md:text-sm md:mx-auto md:mx-0 md:mb-8 md:mt-8 text-white  ">
                </div>
            </div>
        </div>

        </form>
    </div>
</div>
