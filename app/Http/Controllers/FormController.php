<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlamatRequest;
use App\Http\Requests\BerkasRequest;
use App\Http\Requests\DataDiriRequest;
use App\Http\Requests\OrtuRequest;
use App\Http\Requests\ProdiRequest;
use App\Models\Agama;
use App\Models\FormPendaftaran;
use App\Models\JenisTinggal;
use App\Models\Kelas;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Penghasilan;
use App\Models\Prodi;
use App\Models\TransaksiPendaftaran;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class FormController extends Controller
{
    public function index()
    {
        $pmb = FormPendaftaran::all();
        return view('formPendaftaran.index', compact('pmb'));
    }

    // view data diri

    public function formDataDiri(Request $request)
    {

        $pmb = $request->session()->get('pmb');

        $jenisKelamin = [
            'L' => 'Laki laki',
            'P' => 'Perempuan'
        ];

        $agama = Agama::select('value', 'name')->get()->pluck('name', 'value')->toArray();
        return view('formPendaftaran.data-diri', compact('jenisKelamin', 'agama', 'pmb'));
    }

    // post data diri
    public function postDataDiri(DataDiriRequest $request)
    {
        $validateData = $request->validated();

        if (empty($request->session()->get('pmb'))) {
            $pmb = new FormPendaftaran();
            $pmb->fill($validateData);
            $request->session()->put('pmb', $pmb);
        } else {
            $pmb = $request->session()->get('pmb');
            $pmb->fill($validateData);
            $request->session()->put('pmb', $pmb);
        }

        return redirect()->route('form.pendaftaran.alamat');
    }

    public function formAlamat(Request $request)
    {
        $pmb = $request->session()->get('pmb');

        // data-jenis-tinggal
        $jenis_tinggal = JenisTinggal::select('value', 'name')->get()->pluck('name', 'value')->toArray();

        $url = 'https://fajarcodeee.github.io/api-wilayah-indonesia/api/provinces.json';
        $response = Http::get($url);
        if ($response->successful()) {
            $dataProvinsi = $response->json();
            return view('formPendaftaran.form-alamat.index', compact('dataProvinsi', 'jenis_tinggal', 'pmb'));
        } else {
            $dataProvinsi = [];
            return view('formPendaftaran.form-alamat.index', compact('dataProvinsi', 'jenis_tinggal', 'pmb'));
        }
    }

    // post data alamat
    public function postFormAlamat(AlamatRequest $request)
    {

        $validateData = $request->validated();

        $pmb = $request->session()->get('pmb');
        $pmb->fill($validateData);
        $request->session()->put('pmb', $pmb);

        return redirect()->route('form.pendaftaran.data-orangtua');
    }

    // view data ortu
    public function formOrangTua(Request $request)
    {
        $pmb = $request->session()->get('pmb');

        $pekerjaan = Pekerjaan::select('value', 'name')->get()->pluck('name', 'value')->toArray();
        $pendidikan = Pendidikan::select('value', 'name')->get()->pluck('name', 'value')->toArray();
        $penghasilan = Penghasilan::select('value', 'name')->get()->pluck('name', 'value')->toArray();

        return view('formPendaftaran.form-orang-tua.index', compact('pendidikan', 'pekerjaan', 'penghasilan', 'pmb'));
    }

    // post data ortu
    public function postFormOrangTua(OrtuRequest $request)
    {
        $validateData = $request->validated();

        $pmb = $request->session()->get('pmb');
        $pmb->fill($validateData);
        $request->session()->put('pmb', $pmb);

        return redirect()->route('form.pendaftaran.prodi');
    }

    // view data prodi
    public function formProdi(Request $request)
    {

        $pmb = $request->session()->get('pmb');

        $prodi = Prodi::all();

        $kelas = Kelas::all();

        return view('formPendaftaran.formProdi.index', compact('prodi', 'kelas', 'pmb'));
    }

    // post data prodi
    public function postFormProdi(ProdiRequest $request)
    {
        $validateData = $request->validated();

        $pmb = $request->session()->get('pmb');
        $pmb->fill($validateData);
        $request->session()->put('pmb', $pmb);

        return redirect()->route('form.pendaftaran.administrasi');
    }

    // view data administrasi
    public function formAdministrasi(Request $request)
    {
        $pmb = $request->session()->get('pmb');

        return view('formPendaftaran.formAdministrasi.index', compact('pmb'));
    }

    // post data administrasi
    public function postFormAdministrasi(BerkasRequest $request)
    {
        $pmb = $request->session()->get('pmb');

        $uploadedFiles = [];

        $fields = ['ktp', 'kk', 'ijazah', 'foto', 'akte'];

        // Proses setiap file
        foreach ($fields as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $filename = time() . '-' . rand(1, 100000);
                $path = $file->storeAs('uploads', $filename, 'public');
                $uploadedFiles[$field] = $path;
            }
        }

        $pmb->kk = $uploadedFiles['kk'] ?? null;
        $pmb->ktp = $uploadedFiles['ktp'] ?? null;
        $pmb->ijazah = $uploadedFiles['ijazah'] ?? null;
        $pmb->foto = $uploadedFiles['foto'] ?? null;
        $pmb->akte = $uploadedFiles['akte'] ?? null;
        $pmb->save();

        $formId = $pmb->id;

        $request->session()->forget('pmb');

        return redirect()->to('/form/p/' . $formId);
    }

    public function showForm($id)
    {
        // $dataResult = FormPendaftaran::findOrFail($id);
        $dataResult = FormPendaftaran::with(['prodi', 'kelas'])->findOrFail($id);
        $agama = Agama::where('value', $dataResult->agama)->get();
        // dd(Agama::find($dataResult->agama));
        // dd(Agama::where('value', $dataResult->agama)->get());
        // die;

        $biayaPendaftaran = 'xxxxxx';
        $biayaRegistrasi = 'xxxxxx';

        return view('formPendaftaran.result', compact('dataResult', 'agama', 'biayaPendaftaran', 'biayaRegistrasi'));
    }

    public function postTf(Request $request)
    {
        $request->validate([
            'bukti_tf' => 'required',
            'form_id' => 'required'
        ], [
            'bukti_tf.required' => 'Silahkan lampirkan bukti transfer dahulu!'
        ]);

        $insert = TransaksiPendaftaran::create([
            'form_id' => $request->form_id,
            'nama_cmb' => $request->nama_cmb,
            'bukti_tf' => $request->bukti_tf
        ]);

        return redirect()->to('/');
    }
}
