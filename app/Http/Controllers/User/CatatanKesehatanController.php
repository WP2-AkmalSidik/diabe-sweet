<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatatanKesehatanController extends Controller
{
    public function kesehatan()
    {
        return view('user.catatan-kesehatan');
    }
}
