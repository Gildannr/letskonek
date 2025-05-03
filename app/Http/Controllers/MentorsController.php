<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentorsController extends Controller
{
    public function index() {
        return view('page.mentors.mentors');
    }
}
