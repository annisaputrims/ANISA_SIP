<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class GelombangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gelombang = Gelombang::all();
        return view('dashboard.gelombang.index', compact('gelombang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.gelombang.tambah-gelombang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'nama_gelombang' => 'required'
        ]);
        $val['aktif'] = $val['aktif'] ?? 0;
        Gelombang::create($val);
        return redirect()->route('gelombang.index')->with('success', 'Data Berhasil Ditambahkan');

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
    public function status(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'aktif' => 'required|boolean',
        ]);

        // Begin a database transaction
        DB::beginTransaction();

        try {
            // Set the status of all records to 0
            Gelombang::query()->update(['aktif' => 0]);

            // Update the status of the selected record
            $gelombang = Gelombang::findOrFail($id);
            $gelombang->aktif = $request->input('aktif');
            $gelombang->save();

            // Commit the transaction
            DB::commit();

            // Return a successful response
            return response()->json(['message' => 'Status telah diperbarui!'], 200);
        } catch (\Exception $e) {
            // Rollback the transaction in case of an error
            DB::rollBack();

            // Log the error (optional)
            Log::error('Error updating status: ' . $e->getMessage());

            // Return an error response
            return response()->json(['message' => 'Terjadi kesalahan saat memperbarui status.'], 500);
        }
    }
}
