<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    public function edit($id) {
        $kelas = Kelas::all();
        $mahasiswa = Mahasiswa::findOrFail($id);

        if (!$mahasiswa->edit) {
            return redirect()->route('mahasiswa.index')->with('success','Anda tidak diizinkan untuk mengedit data!');
        }

        return view('mahasiswa.edit', compact('mahasiswa','kelas'));
    }

    public function update(Request $request, $id) {
        $mahasiswa = Mahasiswa::findOrFail($id);

        if (!$mahasiswa->edit) {
            return redirect()->route('mahasiswa.index')->with('success','Anda tidak diizinkan untuk mengedit data lagi!');
        }

        $validatedData =$request->validate([
            'name' => 'required|string|max:255',
            'nim' => [
            'required',
            'string',
            'max:20',
            Rule::unique('mahasiswas')->ignore($mahasiswa->id),],
            'kelas_id' => 'required|exists:kelas,id',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date'
        ], [
            'nim.unique' => 'NIM sudah dimiliki oleh mahasiswa lain!',
        ]);

        $mahasiswa->update($validatedData);
        $mahasiswa->edit = false;
        $mahasiswa->save();

        return redirect()->route('mahasiswa.index')->with('success', 'Data Anda berhasil diperbarui, Anda tidak diperbolehkan mengedit lagi!');
    }

    public function createMhs() {
        $kelas = Kelas::all();
        return view('dosen.create', compact('kelas'));
    }

    public function storeMhs(Request $request) {
        $dosen = auth()->user()->dosen_wali;

        $request->validate([
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'nim' => 'required|string|max:20|unique:mahasiswas,nim',
            'name' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date'
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'mahasiswa'
        ]);

        Mahasiswa::create([
            'user_id' => $user->id,
            'nim' => $request->nim,
            'name' => $request->name,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'kelas_id' => $request->kelas_id,
            'edit' => false
        ]);

        return redirect()->route('dosen.index')->with('success','Data mahasiswa berhasil ditambahkan!');
    }

    public function editMhs($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('dosen.edit', compact('mahasiswa'));
    }

    public function updateMhs(Request $request, $id) {
        $request->validate([
            'nim' => 'required|string|max:20|unique:mahasiswas,nim,' . $id,
            'name' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date'
        ], [
            'nim.unique' => 'NIM sudah dimiliki oleh mahasiswa lain!',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->update([
            'nim' => $request->nim,
            'name' => $request->name,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir
        ]);

        return redirect()->route('dosen.index')->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    public function destroyMhs($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $user = User::findOrFail($mahasiswa->user_id);
        $user->delete();

        $mahasiswa->delete();

        return redirect()->route('dosen.index')->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}