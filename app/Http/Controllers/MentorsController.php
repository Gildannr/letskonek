<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class MentorsController extends Controller
{
    public function index() {
        $teams = Team::where('status', '1')->orderBy('urutan', 'asc')->paginate(12); // Fetch active team members, paginate
        return view('page.mentors.mentors', compact('teams'));
    }

    public function detail($slug)
    {
        $team = Team::where('slug', $slug)->where('status', '1')->firstOrFail();
        return view('page.mentors.detail', compact('team'));
    }
}
