<?php

namespace App\Http\Livewire\Backend;

use App\Vacancy;
use Livewire\Component;
use Livewire\WithPagination;

class VacancyList extends Component
{
    use WithPagination;

    public function render()
    {
        $vacancies = Vacancy::latest()->paginate(10);

        return view('livewire.backend.vacancy-list', [
            'vacancies' => $vacancies
        ]);
    }
}
