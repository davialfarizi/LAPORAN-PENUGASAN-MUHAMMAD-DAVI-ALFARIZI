<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class AkademikController extends Controller
{
    public function dashboard(): View
    {
        return view('akademik.dashboard');
    }

    public function manajemenPengguna(): View
    {
        $users = User::all();
        return view('akademik.manajemen_pengguna', compact('users'));
    }

    public function kelolaMateri(): View
    {
        return view('akademik.kelola_materi');
    }

    public function lihatMateri(): View
    {
        return view('akademik.lihat_materi');
    }

    public function kelolaNilai(): View
    {
        return view('akademik.kelola_nilai');
    }

    public function lihatNilai(): View
    {
        return view('akademik.lihat_nilai');
    }
}