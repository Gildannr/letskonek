<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;

class MentorsController extends Controller
{
    public function index() {
        $mentors = Mentor::where('status', '2')->orderBy('mentros_name', 'asc')->paginate(12); // Fetch active mentors, paginate
        return view('page.mentors.mentors', compact('mentors'));
    }

    public function detail($slug)
    {
        $mentor = Mentor::where('slug', $slug)->where('status', '2')->firstOrFail();
        return view('page.mentors.detail', compact('mentor'));
    }
}
