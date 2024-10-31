<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all()->map(function ($user) {
            $user->umur = Carbon::parse($user->tanggal_lahir)->age;
            $user->nama_singkat = Str::limit($user->name, 6, '..');
            $user->alamat_singkat = Str::limit($user->alamat, 8, '..');
            return $user;
        });

        return view('admin.admin', compact('users'));
    }

}