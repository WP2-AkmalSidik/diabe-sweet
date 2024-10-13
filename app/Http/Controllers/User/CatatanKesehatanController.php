<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CatatanKesehatan;
use Illuminate\Http\Request;

class CatatanKesehatanController extends Controller
{
    public function kesehatan()
    {
        $user = auth()->user();
        $catatanKesehatan = CatatanKesehatan::where('user_id', $user->id)->first();

        return view('user.catatan-kesehatan', compact('user', 'catatanKesehatan'));
    }

    public function storeOrUpdate(Request $request)
    {
        $validatedData = $request->validate([
            'umur' => 'required|integer',
            'kategori' => 'required|string',
            'gula' => 'required|numeric',
            'sistolik' => 'required|integer',
            'Diastolik' => 'required|integer',
            'berat' => 'required|numeric',
            'tinggi' => 'required|numeric',
        ]);

        $catatanKesehatan = CatatanKesehatan::where('user_id', auth()->user()->id)->first();

        if ($catatanKesehatan) {
            $catatanKesehatan->update([
                'umur' => $request->umur,
                'kategori' => $request->kategori,
                'gula' => $request->gula,
                'sistolik' => $request->sistolik,
                'diastolik' => $request->Diastolik,
                'berat' => $request->berat,
                'tinggi' => $request->tinggi,
            ]);
        } else {
            CatatanKesehatan::create([
                'user_id' => auth()->user()->id,
                'umur' => $request->umur,
                'kategori' => $request->kategori,
                'gula' => $request->gula,
                'sistolik' => $request->sistolik,
                'diastolik' => $request->Diastolik,
                'berat' => $request->berat,
                'tinggi' => $request->tinggi,
            ]);
        }

        return redirect()->route('kesehatan')->with('success', 'Data berhasil disimpan!');
    }
    public function destroy($id)
    {
        $catatanKesehatan = CatatanKesehatan::where('id', $id)->where('user_id', auth()->user()->id)->first();

        if ($catatanKesehatan) {
            $catatanKesehatan->delete();
            return redirect()->route('kesehatan')->with('success', 'Catatan kesehatan berhasil dihapus.');
        } else {
            return redirect()->route('kesehatan')->with('error', 'Catatan kesehatan tidak ditemukan atau tidak dapat dihapus.');
        }
    }
}