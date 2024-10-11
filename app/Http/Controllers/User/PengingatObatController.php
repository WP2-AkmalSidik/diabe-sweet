<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PengingatObat;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengingatObatController extends Controller
{
    public function index()
    {
        // Mengambil data pengingat obat untuk user yang sedang login
        $pengingatObat = PengingatObat::where('user_id', Auth::id())->get();

        // Mendapatkan waktu sekarang di zona WIB
        $now = now()->setTimezone('Asia/Jakarta');

        foreach ($pengingatObat as $pengingat) {
            // Menggabungkan tanggal dan pukul untuk mendapatkan datetime penuh
            $reminderDateTime = Carbon::createFromFormat('Y-m-d H:i:s', $pengingat->tanggal . ' ' . $pengingat->pukul)
                ->setTimezone('Asia/Jakarta'); // Mengatur zona waktu ke WIB

            // Memeriksa apakah waktu sekarang lebih besar dari waktu pengingat dan statusnya "Menunggu"
            if ($reminderDateTime < $now && $pengingat->status === 'Menunggu') {
                // Update status menjadi "Terlewat"
                $pengingat->status = 'Terlewatkan';
                $pengingat->save();
            }
        }

        return view('user.pengingat-obat', compact('pengingatObat'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'obat' => 'required|string|max:255',
            'kategori' => 'required|in:Sebelum,Sesudah',
            'jml_obat' => 'required|integer|min:1',
            'jenis_obat' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'pukul' => 'required|date_format:H:i',
        ]);

        // Simpan data pengingat obat
        PengingatObat::create([
            'user_id' => Auth::id(), // Mengambil user yang sedang login
            'obat' => $request->obat,
            'jml_obat' => $request->jml_obat,
            'jenis_obat' => $request->jenis_obat,
            'tanggal' => $request->tanggal,
            'pukul' => $request->pukul,
            'kategori' => $request->kategori,
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('pengingatObat')->with('success', 'Pengingat obat berhasil ditambahkan.');
    }
    public function destroy($id)
    {
        // Mencari pengingat obat berdasarkan ID
        $pengingatObat = PengingatObat::where('id', $id)->where('user_id', Auth::id())->first();

        // Memastikan pengingat obat ditemukan
        if (!$pengingatObat) {
            return redirect()->route('pengingatObat')->with('error', 'Pengingat obat tidak ditemukan.');
        }

        // Menghapus pengingat obat
        $pengingatObat->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('pengingatObat')->with('success', 'Pengingat obat berhasil dihapus.');
    }
    public function updateStatusSudah($id)
    {
        $pengingatObat = PengingatObat::where('id', $id)->where('user_id', Auth::id())->first();

        if ($pengingatObat) {
            // Update status menjadi sudah
            $pengingatObat->status = 'Sudah';
            $pengingatObat->save();
        }

        return redirect()->route('pengingatObat')->with('success', 'Status pengingat obat diperbarui menjadi Sudah.');
    }

    public function updateStatusTerlewat($id)
    {
        $pengingatObat = PengingatObat::where('id', $id)->where('user_id', Auth::id())->first();

        if ($pengingatObat) {
            // Update status menjadi terlewat
            $pengingatObat->status = 'Terlewatkan';
            $pengingatObat->save();
        }

        return redirect()->route('pengingatObat')->with('success', 'Status pengingat obat diperbarui menjadi Terlewat.');
    }
}
