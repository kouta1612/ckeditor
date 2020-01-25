<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;

class CkeditorController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        dd($request->toArray());
    }
}
