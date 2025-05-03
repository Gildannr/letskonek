<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonekController extends Controller
{
    public function index() {
        return view('page.konek.konek');
    }
}
