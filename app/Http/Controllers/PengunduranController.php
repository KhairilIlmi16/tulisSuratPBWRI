<?php

namespace App\Http\Controllers;
require_once 'dompdf/autoload.inc.php' ;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
class PengunduranController extends Controller
{
    public function index()
    {
        // ...
    }

    public function store(Request $request)
    {
        // Mendapatkan data dari form
        $nama = $_POST['nama'];
        $alamatperusahaan = $_POST['alamatperusahaan'];
        $perusahaan = $_POST['perusahaan'];
        $tanggal = $_POST['tanggal'];
        $jabatan = $_POST['jabatan'];
        $divisi = $_POST['divisi'];

        // Membaca file HTML
        $html = file_get_contents('surat.html');

        // Mengganti placeholder dengan data yang diambil dari form
        $html = str_replace('{nama}', $nama, $html);
        $html = str_replace('{alamatperusahaan}', $alamatperusahaan, $html);
        $html = str_replace('{perusahaan}', $perusahaan, $html);
        $html = str_replace('{tanggal}', $tanggal, $html);
        $html = str_replace('{jabatan}', $jabatan, $html);
        $html = str_replace('{divisi}', $divisi, $html);

        // Membuat objek Dompdf
        $dompdf = new Dompdf();

        // Mengubah HTML menjadi PDF
        $dompdf->loadHtml($html);
        // Proses pembuatan file PDF
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Buat tautan unduh ke file PDF
        $filename = 'nama_file.pdf';
        $pdf_content = $dompdf->output();
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        echo $pdf_content;

        echo 'File PDF berhasil dibuat';
    }

}
