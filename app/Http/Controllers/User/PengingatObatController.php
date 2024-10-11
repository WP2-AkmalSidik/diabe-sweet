<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PengingatObat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengingatObatController extends Controller
{
    public function index()
    {
        // Mengambil data pengingat obat untuk user yang sedang login
        $pengingatObat = PengingatObat::where('user_id', Auth::id())->get();
        return view('user.pengingat-obat', compact('pengingatObat'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'obat' => 'required|string|max:255',
            'jml_obat' => 'required|integer',
            'tanggal' => 'required|date',
            'pukul' => 'required|date_format:H:i',
            'kategori' => 'required|in:Sebelum Makan,Sesudah Makan',
            'jenis_obat' => 'required|string|max:255', // Validasi untuk jenis obat
        ]);

        // Menyimpan data pengingat obat
        PengingatObat::create([
            'user_id' => Auth::id(),
            'nama_obat' => $request->obat,
            'jumlah_obat' => $request->jml_obat,
            'jenis_obat' => $request->jenis_obat,
            'waktu_makan_obat' => $request->tanggal . ' ' . $request->pukul,
            'sebelum_sesudah_makan' => $request->kategori,
            'status' => 'Terlewatkan',
        ]);

        return redirect()->route('pengingatObat')->with('success', 'Pengingat obat berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        // Menghapus pengingat obat berdasarkan ID
        $pengingat = PengingatObat::findOrFail($id);
        $pengingat->delete();

        return redirect()->route('pengingatObat')->with('success', 'Pengingat obat berhasil dihapus!');
    }
}
