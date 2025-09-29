<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index() : View
    {
        $beritas = Berita::latest()->paginate(10);

        return view('berita.index', compact('berita'));
    }
}
