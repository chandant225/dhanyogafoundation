<?php

namespace App\Http\Controllers;

use App\Department;
use App\OurTeam;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function index()
    {
        $pageTitle = 'Our Team';

        $departments = Department::with(['members' => function ($query) {
            return $query->positioned();
        }])->positioned()->get();

        return view('frontend.our-team.index', [
            'pageTitle' => $pageTitle,
            'departments' => $departments
        ]);
    }

    public function show($slug)
    {
        $pageTitle = 'Our Team';

        $member = OurTeam::where('slug', $slug)->firstOrFail();

        return view('frontend.our-team.show', [
            'pageTitle' => $pageTitle,
            'member' => $member
        ]);
    }
}
