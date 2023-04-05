<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use App\Models\dataSuratModel;

class SuratController extends Controller
{
    public function index()
    {
        // ...
    }

    public function generateSurat(Request $request)
    {
        
        // Get the form input values
        $nama = $request->input('nama');
        $tempat_lahir = $request->input('tplahir');
        $tanggal_lahir = $request->input('tanggal-lahir');
        $jenis_kelamin = $request->input('kelamin');
        $pendidikan_terakhir = $request->input('pendidikan');
        $perusahaan = $request->input('perusahaan');
        $posisi = $request->input('posisi');
        $tglsurat = $request->input('tglsurat');
        $alamat = $request->input('alamat');
        $kabupaten = $request->input('kabupaten');
        $provinsi = $request->input('provinsi');
        $agama = $request->input('agama');
        $telepon = $request->input('nohp');
        $lampiran = $request->input('lampiran');

        // Load the template file
        $template = new TemplateProcessor(public_path('template.docx'));

        // Replace the placeholders with form input values
        $template->setValue('isiNama', $nama);
        $template->setValue('isiTempat', $tempat_lahir);
        $template->setValue('isiTgl', $tanggal_lahir);
        $template->setValue('isiJK', $jenis_kelamin);
        $template->setValue('isiPendidikan', $pendidikan_terakhir);
        $template->setValue('isiAlamat', $alamat);
        $template->setValue('isiKabupaten', $kabupaten);
        $template->setValue('isiProvinsi', $provinsi);
        $template->setValue('isiTS', $kabupaten);
        $template->setValue('isiAgama', $agama);
        $template->setValue('isiTelepon', $telepon);
        $template->setValue('isiNamaPerusahaan', $perusahaan);
        $template->setValue('isiPosisi', $posisi);
        $template->setValue('isiTglSurat', $tglsurat);
        $lampiranSip = str_replace("\n", "</w:t><w:br/><w:t>", $lampiran);
        $template->setValue('isiLampiran', $lampiranSip);
        $template->setValue('isiPT', $perusahaan);
        // Set the output filename
        $filename = 'Surat Lamaran Kerja - ' . $nama . '.docx';

        // Download the generated file
        $headers = [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];

        $path = public_path($filename);
        $template->saveAs($path);

        


        // simpan input user ke dalam database
        $model = new dataSuratModel();
        $model->nama = $nama;
        $model->tempat_lahir = $tempat_lahir;
        $model->tanggal_lahir = $tanggal_lahir;
        $model->pendidikan_terakhir = $pendidikan_terakhir;
        $model->perusahaan = $perusahaan;
        $model->posisi = $posisi;
        $model->tglsurat = $tglsurat;
        $model->alamat = json_encode($alamat);
        $model->agama = $agama;
        $model->telepon = $telepon;
        $model->save();

        return response()->download($path, $filename, $headers);

    }
}
?>