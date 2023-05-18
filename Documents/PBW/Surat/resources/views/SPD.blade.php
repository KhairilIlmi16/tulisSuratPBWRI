@extends('navbar')
@section('navbar')
    @parent
        <div class="container mt-28">
        <div class="surat-body md:px-[100px] mt-28 bg-white shadow-lg mx-4 rounded-[30px] mt-4 flex-col md:flex font cursor-default px-8 py-8 md:mx-8 top-16">
        <h2 class="mb-4">Form Surat Pengunduran Diri</h2>
        <form method="post" action="{{ url('/proses-pengunduran') }}">
            {{ csrf_field() }}
            <div class="border rounded-lg p-4 mt-8">
              <label for="nama" class="block">Nama Lengkap</label>
              <input type="text" class="form-input mt-2" id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda" required>
            </div>
            <div class="border rounded-lg p-4 mt-8">
              <label for="jabatan" class="block">Jabatan</label>
              <input type="text" class="form-input mt-2" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan Anda" required>
            </div>
            <div class="border rounded-lg p-4 mt-8">
              <label for="divisi" class="block">Divisi</label>
              <input type="text" class="form-input mt-2" id="divisi" name="divisi" placeholder="Masukkan Divisi Anda" required>
            </div>
            <div class="border rounded-lg p-4 mt-8">
              <label for="perusahaan" class="block">Nama Perusahaan</label>
              <input type="text" class="form-input mt-2" id="perusahaan" name="perusahaan" placeholder="Masukkan Nama Perusahaan Anda" required>
            </div>
            <div class="border rounded-lg p-4 mt-8">
              <label for="alamatperusahaan" class="block">Alamat Perusahaan</label>
              <input type="text" class="form-input mt-2" id="alamatperusahaan" name="alamatperusahaan" placeholder="Masukkan Alamat Perusahaan Anda" required>
            </div>
            <div class="border rounded-lg p-4 mt-8">
              <label for="tanggal" class="block">Tanggal Surat</label>
              <input type="date" class="form-input mt-2" id="tanggal" name="tanggal" required>
            </div>
            <div class="form-group mt-2 text-end">
                <input type="submit" value="Download Surat" name="submit" class="flex w-[150px] mt-[20px] mx-auto px-auto bg-gradient-to-r from-yellow-600 to-yellow-300 rounded-lg p-2 hover:from-blue-500 hover:to-blue-200 md:w-[140px] md:text-sm md:mx-auto md:mx-0 md:mb-8 md:mt-8 text-white  ">
            </div>
          </form>
    </div>
    </div>

