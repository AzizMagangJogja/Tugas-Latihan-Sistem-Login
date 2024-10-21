<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request as HttpRequest;

class RequestController extends Controller
{
    public function index() {
        $dosen = auth()->user()->dosen;

        $requests = Request::where('kelas_id', $dosen->kelas_id)->get();

        return view('dosen.req_index', compact('requests'));
    }

    public function create() {
        return view('mahasiswa.req_create');
        return redirect('/mahasiswa');
    }

    public function store(HttpRequest $request) {
        $validatedData = $request->validate([
            'keterangan' => 'required|string|max:255',
        ]);

        $mahasiswa = auth()->user()->mahasiswa;

        Request::create([
            'kelas_id' => $mahasiswa->kelas_id,
            'mahasiswa_id' => $mahasiswa->id, 
            'keterangan' => $validatedData['keterangan'],
        ]);
        return redirect()->route('mahasiswa.index')->with('success', 'Request berhasil dikirim!');
    }

    public function approve($id) {
        $request = Request::findOrFail($id);

        $mahasiswa = $request->mahasiswa;
        $mahasiswa ->edit = true;
        $mahasiswa->save();

        $request->delete();

        return redirect()->route('dosen.index')->with('success', 'Request disetujui!');
    }

    public function reject($id) {
        $request = Request::findOrFail($id);

        $mahasiswa = $request->mahasiswa;
        $mahasiswa->edit = false;
        $mahasiswa->save();

        $request->delete();

        return redirect()->route('dosen.index')->with('success', 'Request ditolak!');
    }

    public function balikmahasiswa() {
        $user = Auth::user();

        $mahasiswa = Mahasiswa::with('kelas')->where('user_id', $user->id)->first();

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function balikdosen() {
        $dosen = Auth::user()->dosen;

        if ($dosen && $dosen->kelas_id) {
            $kelas = $dosen->kelas;
            $jumlahMahasiswa = $kelas->mahasiswa()->count();
            $mahasiswa = Mahasiswa::where('kelas_id', $dosen->kelas_id)->get();
        } else {
            $kelas = null;
            $jumlahMahasiswa = 0;
            $mahasiswa = Mahasiswa::all();
        }

        return view('dosen.index', compact('mahasiswa', 'kelas', 'jumlahMahasiswa'));
    }
}