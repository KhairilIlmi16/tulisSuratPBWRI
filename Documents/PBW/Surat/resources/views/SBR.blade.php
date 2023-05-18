@extends('navbar')
@section('navbar')
    @parent
    <div class="container mt-28">
        <div class="surat-body md:px-[100px] mt-28 bg-white shadow-lg mx-4 rounded-[30px] mt-4 flex-col md:flex font cursor-default px-8 py-8 md:mx-8 top-16">
        <h2 class="mb-4 font-bold text-2xl">Surat Permohonan Blokir Rekening</h2>
        <form method="post" action="{{ url('/proses-Blokir') }}">
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
                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="tempatsuratdibuat">Tujuan *</label>
                    <input type="text" class="form-control border rounded" id="isiTujuanInstansi" name="isiTujuanInstansi"
                        placeholder="Bank Aceh" required />
                </div>
            </div>
            <div class="container mt-4">
                <h3  class="font-bold mt-16">DATA DIRI PELAPOR</h3>
                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control border rounded" id="isiNama" name="isiNama"
                        placeholder="Siuman Tringgadeng" required />
                </div>

                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="desa">Nomor Rekening </label>
                    <input type="number" class="form-control border rounded" id="isiNoRekening" name="isiNoRekening"
                        placeholder=" 12134567890" required />
                </div>
                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="alamat">Alamat Lengkap </label>
                    <textarea name="isiAlamat" rows="4" class="form-control border rounded"></textarea>
                </div>
                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="desa">No. Telepon </label>
                    <input type="number" class="form-control border rounded" id="isiNoTelepon" name="isiNoTelepon"
                        placeholder=" 0822231322" required />
                </div>
            </div>
            <div class="container mt-4">
                <h3  class="font-bold mt-16">DATA REKENING YANG AKAN DILAPORKAN</h3>
                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="nama">Nama Pemilik Rekening</label>
                    <input type="text" class="form-control border rounded" id="isiNamaPemilikRekening" name="isiNamaPemilikRekening"
                        placeholder="Muzails" required />
                </div>

                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="tempat">No. Rekening</label>
                    <input type="number" class="form-control border rounded" id="isiNoRekeningLaporkan" name="isiNoRekeningLaporkan"
                        placeholder="12134354678909" required />
                </div>
                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="tglOrtu">Alasan Pemblokiran</label>
                    <input type="text" class="form-control border rounded" id="isiAlasanBlokir" name="isiAlasanBlokir"
                        placeholder="Contoh: Melakukan penipun pada saat jual beli" required />
                </div>
            </div>
            <div class="container mt-4">
                <h3  class="font-bold mt-16">KRONOLOGI TRANSAKSI</h3>
                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="tglOrtu">Jumlah Transfer</label>
                    <input type="number" class="form-control border rounded" id="isiJumlahTransfer" name="isiJumlahTransfer"
                        placeholder="Contoh: 5000000" required />
                </div>
                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="tglOrtu">Melalui</label>
                    <input type="text" class="form-control border rounded" id="isiMelaluiInstansi" name="isiMelaluiInstansi"
                        placeholder="Contoh: Bank Aceh" required />
                </div>
                <div class="form-group mt-8 border rounded-md drop-shadow-sm">
                    <label for="tglOrtu">Waktu Transaksi</label>
                    <input type="date" class="form-control border rounded" id="isiWaktuTransaksi" name="isiWaktuTransaksi"
                        required />
                </div>
                <div class="form-group">
                    <input type="submit" value="Download Surat" name="submit" class="flex w-[150px] mt-[20px] mx-auto px-auto bg-gradient-to-r from-yellow-600 to-yellow-300 rounded-lg p-2 hover:from-blue-500 hover:to-blue-200 md:w-[140px] md:text-sm md:mx-auto md:mx-0 md:mb-8 md:mt-8 text-white  ">
                </div>
            </div>
    </div>

    </form>
    </div>
</div>
