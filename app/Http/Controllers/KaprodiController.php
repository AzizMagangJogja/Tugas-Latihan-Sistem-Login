<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KaprodiController extends Controller
{
    function index() {
        return view('kaprodi.index');
    }

    function kaprodi() {
        $dosens = Dosen::all();
        $dosens = Dosen::with('kelas')->get();

        $kelas = Kelas::all();
        $kelas = Kelas::with('dosen')->get();

        $jumlahMahasiswa = Kelas::sum('jumlah');
        $jumlahDosen = Dosen::count();
        $jumlahKelas = Kelas::count();

        return view('kaprodi.index', compact('dosens','kelas','jumlahMahasiswa','jumlahDosen','jumlahKelas'));
    }

    function dosen_wali() {
        $dosen = Auth::user()->dosen;

        if ($dosen && $dosen->kelas_id) {
            $kelas = $dosen->kelas;
            $jumlahMahasiswa = $kelas->mahasiswa()->count();
            $mahasiswa = Mahasiswa::where('kelas_id', $dosen->kelas_id)->get();
        } else {
            $kelas = null;
            $jumlahMahasiswa = Mahasiswa::count();
            $mahasiswa = Mahasiswa::all();
        }

        return view('dosen.index', compact('mahasiswa','kelas', 'jumlahMahasiswa'));
    }

    function mahasiswa() {
        $user = Auth::user();

        $mahasiswa = Mahasiswa::with('kelas')->where('user_id', $user->id)->first();

        return view('mahasiswa.index', compact('mahasiswa'));
    }
}
