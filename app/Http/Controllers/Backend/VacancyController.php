<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewVacancyRequest;
use App\Question;
use App\Vacancy;
use App\Alert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class VacancyController extends Controller
{
    public function index()
    {
        return view('vacancy.index');
    }

    public function create()
    {
        $vacancy = new Vacancy();
        return view('vacancy.create', compact('vacancy'));
    }

    public function store(NewVacancyRequest $request)
    {
        try {
            DB::beginTransaction();
            $vacancy = Vacancy::create([
                'title' => $request->title,
                'description' => $request->description,
                'apply_link' => $request->apply_link,
                'deadline_date' => $request->deadline,
                'show_cover_letter' => $request->show_cover_letter,
            ]);

            if ($request->has('questions')) {
                foreach ($request->questions as $question) {
                    Question::firstOrCreate(
                        [
                            'question' => $question['question'],
                            'vacancy_id' => $vacancy->id
                        ],
                        [
                            'answer_type' => $question['answer_type'],
                        ]
                    );
                }
            }

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            Log::error($ex);
            return redirect()->back()->with('error', 'Whoops! something went wrong')->withInput();
        }

        return redirect()->route('backend.vacancy.index')->with('success', 'Vacancy posted successfully.');
    }

    
    public function destroy(Vacancy $vacancy)
    {
        $vacancy->delete();
        Alert::success()->message('Product added successfully')->send();
        return redirect()->route('backend.vacancy.index');
    }

}
