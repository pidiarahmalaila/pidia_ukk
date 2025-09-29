<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index() : View
    {
        $profils = Profil::latest()->paginate(10);

        return view('profil.index', compact('profil'));
    }
}
