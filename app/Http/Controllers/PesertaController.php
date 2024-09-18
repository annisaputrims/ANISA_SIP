<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use App\Models\Jurusan;
use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Peserta::all();
        $jurusan = Jurusan::all();
        $gelombang = Gelombang::all();
        return view('dashboard.peserta.index', compact('data', 'jurusan', 'gelombang'));
    }

    public function formindex()
    {
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

        // Validasi input
    }

    /**
     * Display the specified resource.
     */
    public function show() {}
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

    public function status(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
        ]);
        try {
            $peserta = Peserta::find($id);
            $peserta->status = $request->status;
            $peserta->save();
        } catch (\Throwable $th) {
            return response()->json([
                'error' => $th->getMessage()
            ]);
        }
    }
    public function detail($id)
    {
        $peserta = Peserta::find($id);
        return view('dashboard.peserta.detail', compact('peserta'));
    }
    // public function cariPeserta(Request $request)
    // {
    //     // dd($request->all());
    //     $jurusanId = $request->input('jurusan_id');
    //     $gelombangId = $request->input('gelombang_id');

    //     // Query untuk memfilter peserta
    //     $query = Peserta::query();

    //     if ($jurusanId) {
    //         $query->where('id_jurusan', $jurusanId);
    //     }

    //     if ($gelombangId) {
    //         $query->where('id_gelombang', $gelombangId);
    //     }

    //     $peserta = $query->get();

    //     // Mengambil data jurusan dan gelombang untuk ditampilkan di form
    //     $jurusan = Jurusan::all(); // Asumsikan model Jurusan ada
    //     $gelombang = Gelombang::all(); // Asumsikan model Gelombang ada
    //     return view('dashboard.peserta.index', compact('peserta', 'jurusan', 'gelombang'));
    // }
}
