<?php

namespace App\Http\Controllers\Backend;

use App\Department;
use App\Http\Controllers\Controller;
use App\OurTeam;
use App\Alert\Facades\Alert;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function index()
    {
        return view('our-team.index');
    }

    public function create()
    {
        return $this->showCreateEditPage(new OurTeam());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'email' => 'nullable',
            'facebook_link' => 'nullable',
            'twitter_link' => 'nullable',
            'linkedin_link' => 'nullable',
            'department_id' => 'required',
            'about' => 'required',
            'photo' => 'nullable|image|max:1024',
        ]);

        OurTeam::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'email' => $request->email,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'linkedin_link' => $request->linkedin_link,
            'department_id' => $request->department_id,
            'about' => $request->about,
            'photo' => $request->hasFile('photo') ? $request->file('photo')->store('photo') : null,
        ]);

        Alert::success()->message('Saved successfully')->send();
        return redirect()->route('backend.our-team.index');
    }

    public function edit(OurTeam $ourTeam)
    {
        return $this->showCreateEditPage($ourTeam);
    }

    public function update(Request $request, OurTeam $ourTeam)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'email' => 'nullable',
            'facebook_link' => 'nullable',
            'twitter_link' => 'nullable',
            'linkedin_link' => 'nullable',
            'department_id' => 'required',
            'about' => 'required',
            'photo' => 'nullable|image|max:1024',
        ]);

        $ourTeam->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'email' => $request->email,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'linkedin_link' => $request->linkedin_link,
            'department_id' => $request->department_id,
            'about' => $request->about,
        ]);

        if ($request->hasFile('photo')) {
            $ourTeam->update(['photo' =>  $request->file('photo')->store('photo')]);
        }

        Alert::success()->message('Saved successfully')->send();
        return redirect()->route('backend.our-team.index');
    }

    public function showCreateEditPage(OurTeam $ourTeam)
    {
        $departments = Department::positioned()->get();
        $updateMode = false;

        if ($ourTeam->exists) {
            $updateMode = true;
        }

        return view('our-team.create-edit', [
            'ourTeam' => $ourTeam,
            'updateMode' => $updateMode,
            'departments' => $departments
        ]);
    }
}
