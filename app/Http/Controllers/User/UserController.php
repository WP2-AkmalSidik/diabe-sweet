<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CatatanKesehatan;
use App\Models\User; // Pastikan untuk mengimpor model User
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function profile()
    {
        $user = Auth::user();
        $umur = Carbon::parse($user->tanggal_lahir)->age;
        $catatanKesehatan = CatatanKesehatan::where('user_id', $user->id)->latest()->first();
        $gulaDarah = $catatanKesehatan ? $catatanKesehatan->gula : null;

        if ($gulaDarah === null) {
            $statusDiabetes = 'Data Gula Tidak Tersedia';
        } elseif ($gulaDarah < 140) {
            $statusDiabetes = 'Non Diabetes';
        } elseif ($gulaDarah < 200) {
            $statusDiabetes = 'Waspada';
        } else {
            $statusDiabetes = 'Diabetes Parah';
        }

        return view('user.profile', [
            'user' => $user,
            'umur' => $umur,
            'statusDiabetes' => $statusDiabetes,
        ]);
    }

    public function updateProfile(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();

        $user->name = $validated['name'];

        if ($request->hasFile('foto')) {
            if ($user->foto && \Storage::exists('public/' . $user->foto)) {
                \Storage::delete('public/' . $user->foto);
            }

            $file = $request->file('foto');
            $path = $file->store('foto', 'public');

            $user->foto = $path;
        }

        $user->save();

        return redirect()->route('profile')->with('success', 'Profile berhasil diperbarui!');
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $user = Auth::user();
        $user->password = Hash::make($validated['password']);
        $user->save();

        return redirect()->route('profile')->with('success', 'Password berhasil diperbarui!');
    }
}
