<?php

namespace App\Http\Controllers;

use App\Models\Levels;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('dashboard.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $level = Levels::all();
        return view('dashboard.user.tambah-user', compact('level'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'nama_lengkap' => 'required',
            'id_level' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $cekEmail = User::where('email', $request->email)->exists();
        if ($cekEmail) {
            return redirect()->route('user.create')->withInput()->with('error', 'Email sudah digunakan')->withInput();
        }
        User::create($val);
        return redirect()->route('user.index')->with('success', 'User Berhasil ditambahkan');
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
        $user = user::find($id);
        $level = Levels::all();
        return view('dashboard.user.edit-user', compact('user', 'level'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $val = $request->validate([
            'nama_lengkap' => 'required',
            'id_level' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $val['password'] = Hash::make($val['password']);
        $user->update($val);
        return redirect()->route('user.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return view('dashboard.user.index')->with('success', 'Data Berhasil Dihapus');
    }
}
