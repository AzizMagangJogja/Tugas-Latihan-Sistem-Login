<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dosen;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KelasController extends Controller
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
        $dosens = Dosen::all();
        return view('kaprodi.kelas.create', compact('dosens'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'dosen_id' => 'nullable|exists:dosens,id'
        ], [
            'dosen_id.unique' => 'Kelas ini sudah dimiliki oleh dosen lain!'
        ]);
    
        $kelas = Kelas::create([
            'name' => $request->name,
            'jumlah' => $request->jumlah,
        ]);
    
        if ($request->filled('dosen_id')) {
            $dosen = Dosen::findOrFail($request->dosen_id); 
            $dosen->kelas_id = $kelas->id;
            $dosen->save();
        }
    
        return redirect()->route('kaprodi.index')->with('success', 'Data kelas baru berhasil ditambahkan!');
    }    

    public function edit($id) {
        $kelas = Kelas::with('dosen')->findOrFail($id);

        $dosens = Dosen::all();

        return view('kaprodi.kelas.edit', compact('kelas','dosens'));
    }

    public function update(Request $request, $id) {

        $request->validate([
            'name' => 'required|string|max:255|unique:kelas,name,' . $id,
            'jumlah' => 'required|integer|min:1',
            'dosen_id' => 'nullable|exists:dosens,id'
        ], [
            'name.unique' => 'Nama kelas sudah ada, silakan pilih nama yang lain!'
        ]);

        $kelas = Kelas::findOrFail($id);

        if ($request->dosen_id) {
            $dosenWithClass = Dosen::where('id', $request->dosen_id)
                                   ->whereNotNull('kelas_id')
                                   ->where('kelas_id', '!=', $kelas->id)
                                   ->first();
    
            if ($dosenWithClass) {
                return redirect()->back()->withErrors(['dosen_id' => 'Dosen tersebut sudah memiliki kelas!'])->withInput();
            }
    
            $existingDosen = Dosen::where('kelas_id', $kelas->id)->first();
            if ($existingDosen) {
                $existingDosen->kelas_id = null;
                $existingDosen->save();
            }

            $dosen = Dosen::findOrFail($request->dosen_id);
            $dosen->kelas_id = $kelas->id;
            $dosen->save();
        } else {
            $dosen = Dosen::where('kelas_id', $kelas->id)->first();
            if ($dosen) {
                $dosen->kelas_id = null;
                $dosen->save();
            }
        }

        $kelas->update([
            'name' => $request->name,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('kaprodi.index')->with('success', 'Data kelas berhasil diperbarui!');
    }



    public function destroy($id) {
        $kelas = Kelas::findOrFail($id);
    
        $dosen = Dosen::where('kelas_id', $kelas->id)->first();
    
        if ($dosen) {
            $dosen->kelas_id = null;
            $dosen->save();
        }
    
        $kelas->delete();

        return redirect()->route('kaprodi.index')->with('success', 'Data kelas berhasil dihapus dihapus!');
    }    
}