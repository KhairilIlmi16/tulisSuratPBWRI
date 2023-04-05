<!DOCTYPE html>
<html>

<head>
    <title>Form Surat Pengunduran Diri</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-4">Form Surat Pengunduran Diri</h2>
        <form method="post" action="{{ url('/proses-pengunduran') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama"
                    placeholder="Masukkan Nama Lengkap Anda" required />
            </div>
            <div class="form-group">
                <label for="pekerjaan">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan"
                    placeholder="Masukkan Pekerjaan Anda" required />
            </div>
            <div class="form-group">
                <label for="pekerjaan">Divisi</label>
                <input type="text" class="form-control" id="divisi" name="divisi"
                    placeholder="Masukkan Pekerjaan Anda" required />
            </div>
            <div class="form-group">
                <label for="nama">Nama Perusahaan</label>
                <input type="text" class="form-control" id="perusahaan" name="perusahaan"
                    placeholder="Masukkan Nama Lengkap Anda" required />
            </div>
            <div class="form-group">
                <label for="nama">Alamat Perusahaan</label>
                <input type="text" class="form-control" id="alamatperusahaan" name="alamatperusahaan"
                    placeholder="Masukkan Nama Lengkap Anda" required />
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal Surat</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required />
            </div>
            <button type="submit" class="btn btn-primary">Buat Surat</button>
        </form>
    </div>
</body>

</html>
