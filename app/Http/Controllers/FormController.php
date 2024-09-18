<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use App\Models\Jurusan;
use App\Models\Peserta;
use Illuminate\Http\Request;


class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        $gelombang = Gelombang::where('aktif', 1)->first();
        return view('form.form-index', compact('jurusan', 'gelombang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =  $request->validate([
            'id_jurusan' => 'required|exists:jurusans,id',
            'id_gelombang' => 'required|exists:gelombangs,id',
            'nama_lengkap' => 'required|string',
            'nik' => 'required|numeric',
            'kartu_keluarga' => 'required|numeric',
            'jenis_kelamin' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'pendidikan_terakhir' => 'required|string',
            'nama_sekolah' => 'required|string',
            'kejuruan' => 'required|string',
            'nomor_hp' => 'required|numeric',
            'email' => 'required|email',
            'aktivitas_saat_ini' => 'required|string',
        ]);
        // dd($data);
        // Simpan data
        Peserta::create($data);

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('thanks')->with('success', 'Pendaftaran berhasil!');



        // // Simpan data ke database
        // $pendaftaran = new Peserta();
        // $pendaftaran->id_jurusan = $request->id_jurusan;
        // $pendaftaran->id_gelombang = $request->id_gelombang;
        // $pendaftaran->nama_lengkap = $request->nama_lengkap;
        // $pendaftaran->nik = $request->nik;
        // $pendaftaran->kartu_keluarga->kartu_keluarga;
        // $pendaftaran->jenis_kelamin = $request->jenis_kelamin;
        // $pendaftaran->tempat_lahir = $request->tempat_lahir;
        // $pendaftaran->tanggal_lahir = $request->tanggal_lahir;
        // $pendaftaran->pendidikan_terakhir = $request->pendidikan_terakhir;
        // $pendaftaran->nama_sekolah = $request->nama_sekolah;
        // $pendaftaran->kejuruan = $request->kejuruan;
        // $pendaftaran->nomor_hp = $request->nomor_hp;
        // $pendaftaran->email = $request->email;
        // $pendaftaran->aktivitas_saat_ini = $request->aktivitas_saat_ini;

        // // if ($request->hasFile('kartu_keluarga')) {
        // //     $pendaftaran->kartu_keluarga = $request->kartu_keluarga->storeAs('public/kartu_keluarga', $request->kartu_keluarga->getClientOriginalName());
        // // }
        // $pendaftaran->save();

        // // Redirect ke halaman sukses
        // // Alert::success('Success', 'Data telah berhasil disimpan, mohon tunggu konfirmasi dari panitia');
        // return redirect()->route('')->with('success', 'Data Berhasil Disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function thanks()
    {
        return view('thanks');
    }

}
