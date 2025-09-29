<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakulikuler;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EkstrakulikulerController extends Controller
{
    public function index() : View
    {
        $ekstrakulikulers = Ekstrakulikuler::latest()->paginate(10);

        return view('ekstrakulikuler.index', compact('ekstrakulikuler'));
    }
}
