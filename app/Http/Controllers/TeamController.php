<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display the specified team member.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $team = Team::where('slug', $slug)
                    ->where('status', '1') // Assuming status '1' is active
                    ->firstOrFail();

        // Pass the team member data to the view
        return view('page.team.detail', compact('team'));
    }
} 