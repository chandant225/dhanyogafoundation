<?php

namespace App\Http\Controllers;

use App\Http\Requests\VolunteerApplicationRequest;
use App\Vacancy;
use App\VolunteerApplication;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::with('questions')->latest()->get();

        return view('frontend.vacancy.index', compact('vacancies'));
    }

    public function show(Vacancy $vacancy)
    {
        $vacancy->load('questions');
        return view('frontend.vacancy.show', compact('vacancy'));
    }

    public function store(VolunteerApplicationRequest $request)
    {
        // $serialized = serialize($request->questions);
        // $questions =  unserialize($serialized);

        // foreach($questions as $question){
        //     return $question['question'];
        // }
        VolunteerApplication::create([
            'vacancy_id' => $request->vacancy_id,
            'applicant_name' => $request->applicant_name,
            'applicant_email' => $request->applicant_email,
            'cover_letter' => $request->cover_letter,
            'questions' => serialize($request->questions),
        ]);

        return redirect()->back()->with('success', 'Application has been sent.');
    }
}
