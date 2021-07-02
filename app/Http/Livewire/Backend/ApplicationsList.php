<?php

namespace App\Http\Livewire\Backend;

use App\VolunteerApplication;
use Livewire\Component;
use Livewire\WithPagination;

class ApplicationsList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $queryString = ['readFilter'];

    public $readFilter = null;

    public function updatingReadFilter()
    {
        $this->resetPage();
    }

    public function render()
    {
        $applications = VolunteerApplication::when($this->readFilter, function ($query) {
            return $this->readFilter == 1 ? $query->unread() : $query->read();
        })->latest()->paginate(10);

        return view('livewire.backend.applications-list', [
            'applications' => $applications,
        ]);
    }
}
