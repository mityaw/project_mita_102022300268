<?php

namespace App\Http\Controllers;

use App\Models\Super;
use Illuminate\Http\Request;

class SuperController extends Controller
{
    public function index()
    {
        $supers = Super::all();
        return view('welcome', compact('supers'));
    }
}
