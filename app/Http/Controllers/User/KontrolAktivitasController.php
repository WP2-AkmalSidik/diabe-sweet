<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\KontrolAktivitas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KontrolAktivitasController extends Controller
{
    // Menampilkan halaman kontrol aktivitas
    public function index()
    {
        // Ambil data aktivitas pengguna saat ini
        $aktivitas = KontrolAktivitas::where('user_id', Auth::id())->get();
        return view('user.kontrol-aktivitas', compact('aktivitas'));
    }

    // Menyimpan data aktivitas yang diinputkan
    public function store(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'tanggal' => 'required|date',
            'jenis_olahraga' => 'required|string',
            'waktu_mulai' => 'required|date_format:H:i',
            'waktu_selesai' => 'required|date_format:H:i|after:waktu_mulai',
        ]);

        // Hitung durasi olahraga dalam menit
        $startTime = Carbon::parse($request->tanggal . ' ' . $request->waktu_mulai);
        $endTime = Carbon::parse($request->tanggal . ' ' . $request->waktu_selesai);
        $durationInMinutes = $startTime->diffInMinutes($endTime); // Durasi dalam menit

        // Tentukan kalori terbakar per menit berdasarkan jenis olahraga
        $kaloriPerMenit = [
            'Jogging' => 10,
            'Pilates' => 4.17,
            'Gym' => 6.67,
            'Zumba' => 8.33,
            'Yoga' => 5,
            'Bersepeda' => 8.33,
            'Berenang' => 11.67,
        ];

        // Hitung kalori yang terbakar
        $kaloriDibakar = $durationInMinutes * ($kaloriPerMenit[$request->jenis_olahraga] ?? 0);

        // Simpan data ke database
        KontrolAktivitas::create([
            'user_id' => Auth::id(), // User ID yang sedang login
            'tanggal' => $request->tanggal,
            'jenis_olahraga' => $request->jenis_olahraga,
            'waktu_mulai' => $startTime,
            'waktu_selesai' => $endTime,
            'kalori_dibakar' => $kaloriDibakar, // Simpan kalori yang dihitung
        ]);

        // Redirect ke halaman kontrol aktivitas dengan pesan sukses
        return redirect()->route('kontrol.aktivitas')->with('success', 'Data aktivitas berhasil disimpan.');
    }

    public function destroy($id)
    {
        $aktivitas = KontrolAktivitas::where('id', $id)->where('user_id', Auth::id())->first();

        if ($aktivitas) {
            $aktivitas->delete();
            return redirect()->route('kontrol.aktivitas')->with('success', 'Data aktivitas berhasil dihapus.');
        } else {
            return redirect()->route('kontrol.aktivitas')->with('error', 'Data aktivitas tidak ditemukan atau tidak dapat dihapus.');
        }
    }
}