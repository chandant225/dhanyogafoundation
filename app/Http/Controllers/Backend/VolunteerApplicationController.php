<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\VolunteerApplication;
use Illuminate\Http\Request;

class VolunteerApplicationController extends Controller
{
    public function show(VolunteerApplication $volunteerApplication)
    {
        $volunteerApplication->load('vacancy');
        $volunteerApplication->update(['read_at' => now()]);

        return view('volunteer-application.show', [
            'application' => $volunteerApplication,
            'questions' => unserialize($volunteerApplication->questions) ?? []
        ]);
    }
}
