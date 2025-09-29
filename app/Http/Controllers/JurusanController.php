<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index() : View
    {
        $jurusans = Jurusan::latest()->paginate(10);

        return view('jurusan.index', compact('jurusan'));
    }
}
