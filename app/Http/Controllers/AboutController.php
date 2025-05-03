<?php

namespace App\Http\Controllers;

use App\Models\CMSAbout;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $cmsAbout = CMSAbout::orderBy('id_about_us')->get();
        
        $teams = Team::where('status', '1')
                     ->orderBy('urutan', 'asc')
                     ->take(4)
                     ->get();

        return view('page.about', compact('cmsAbout', 'teams'));
    }
}
