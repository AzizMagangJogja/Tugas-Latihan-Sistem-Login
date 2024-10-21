<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dosen;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DosenController extends Controller
{
    public function index() {
        $dosens = Dosen::all();
        $dosens = Dosen::with('kelas')->get();

        $kelas = Kelas::all();
        $kelas = Kelas::with('dosen')->get();

        $jumlahMahasiswa = Kelas::sum('jumlah');
        $jumlahDosen = Dosen::count();
        $jumlahKelas = Kelas::count();

        return view('kaprodi.index', compact('dosens','kelas','jumlahMahasiswa','jumlahDosen','jumlahKelas'));
    }
    
    public function create() {
        $kelas = Kelas::all();
        return view('kaprodi.dosen.create', compact('kelas'));
    }

    public function store(Request $request) {
        $request->validate([
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'kode_dosen' => 'required|unique:dosens,kode_dosen',
            'nip' => 'required|unique:dosens,nip',
            'name' => 'required',
            'kelas_id' => 'nullable|exists:kelas,id|unique:dosens,kelas_id'
        ], [
            'kelas_id.unique' => 'Kelas ini sudah dimiliki oleh dosen lain!'
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'dosen_wali'
        ]);

        Dosen::create([
            'user_id' => $user->id,
            'kode_dosen' => $request->kode_dosen,
            'nip' => $request->nip,
            'name' => $request->name,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('kaprodi.index')->with('success', 'Data dosen baru berhasil ditambahkan!');
    }

    public function edit($id) {
        $dosen = Dosen::findOrFail($id);

        $kelas = Kelas::all();

        return view('kaprodi.dosen.edit', compact('dosen', 'kelas'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nip' => 'required|unique:dosens,nip,'.$id,
            'name' => 'required',
            'kode_dosen' => 'required|unique:dosens,kode_dosen,'.$id,
            'kelas_id' => 'nullable|exists:kelas,id|unique:dosens,kelas_id,'.$id
        ], [
            'nip.unique' => 'NIP sudah dimiliki oleh dosen lain!',
            'kode_dosen.unique' => 'Kode Dosen sudah dimiliki oleh dosen lain!',
            'kelas_id.unique' => 'Kelas ini sudah dimiliki oleh dosen lain!'
        ]);

        $dosen = Dosen::findOrFail($id);

        $dosen->update([
            'nip' => $request->nip,
            'name' => $request->name,
            'kode_dosen' => $request->kode_dosen,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('kaprodi.index')->with('success', 'Data dosen berhasil diperbarui!');
    }

    public function destroy($id) {
        $dosen = Dosen::findOrFail($id);

        $user = User::findOrFail($dosen->user_id);
        $user->delete();

        $dosen->delete();

        return redirect()->route('kaprodi.index')->with('success', 'Data dosen berhasil dihapus!');
    }
}