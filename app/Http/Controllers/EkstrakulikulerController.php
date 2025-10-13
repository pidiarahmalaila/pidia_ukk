<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstrakulikuler;

class EkstrakulikulerController extends Controller
{
    public function index()
    {
        $ekskuls = Ekstrakulikuler::orderBy('created_at', 'desc')->get();
        return view('ekskul.index', compact('ekskuls'));
    }

    public function create()
    {
        return view('ekskul.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:4096',
            'nama' => 'required|string|max:255',
            
        ]);

        $path = null;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('ekskul', 'public');
        }

        Ekstrakulikuler::create([
            'foto' => $path ? basename($path) : null,
            'nama' => $request->nama,
        ]);

        return redirect()->route('ekskul.index')->with('success', 'Ekstrakurikuler berhasil ditambahkan');
    }

    public function ekstrakurikuler()
    {
        $ekskuls = Ekstrakulikuler::orderBy('created_at', 'desc')->get();
        return view('ekstrakurikuler', compact('ekskuls'));
    }
}