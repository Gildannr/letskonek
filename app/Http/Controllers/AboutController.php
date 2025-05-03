<?php

namespace App\Http\Controllers;

use App\Models\CMSAbout;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $cmsAbout = CMSAbout::orderBy('id_about_us')->get();
        
        return view('page.about', compact('cmsAbout'));
    }
}
