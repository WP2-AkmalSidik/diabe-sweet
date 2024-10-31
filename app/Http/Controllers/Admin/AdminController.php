<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        // Mengambil query dari input pencarian
        $query = $request->input('search');

        // Filter pengguna dengan role 0 dan berdasarkan pencarian
        $users = User::where('role', 0)
            ->when($query, function ($queryBuilder) use ($query) {
                $queryBuilder->where('name', 'like', "%$query%");
            })
            ->get()
            ->map(function ($user) {
                $user->umur = Carbon::parse($user->tanggal_lahir)->age;
                $user->nama_singkat = Str::limit($user->name, 6, '..');
                $user->alamat_singkat = Str::limit($user->alamat, 8, '..');
                return $user;
            });

        return view('admin.admin', compact('users'));
    }
}