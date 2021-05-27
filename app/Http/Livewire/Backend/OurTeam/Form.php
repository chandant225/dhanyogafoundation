<?php

namespace App\Http\Livewire\Backend\OurTeam;

use App\Department;
use App\OurTeam;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    public OurTeam $ourTeam;
    public $photo;
    public $departments;

    protected $listeners = [
        'editOurTeam' => 'editOurTeam'
    ];

    protected function rules()
    {
        return [
            'ourTeam.name' => 'required',
            'ourTeam.designation' => 'required',
            'ourTeam.email' => 'nullable',
            'ourTeam.department_id' => 'required',
            'ourTeam.about' => 'required',
            'photo' => 'nullable|image|max:1024',
        ];
    }

    public function mount()
    {
        $this->ourTeam = new OurTeam();
        $this->departments = Department::positioned()->get();
    }

    public function save()
    {
        $this->validate();
        if ($this->photo) {
            $this->ourTeam->photo = $this->photo->store('photo');
        }
        $this->ourTeam->save();
        $this->ourTeam = new OurTeam();
        $this->reset('photo');
        $this->alert('success', 'Record saved');
        $this->emit('ourTeamCreated');
        $this->dispatchBrowserEvent('hide-our-team-form');
    }

    public function editOurTeam(OurTeam $ourTeam)
    {
        $this->ourTeam = $ourTeam;
        $this->dispatchBrowserEvent('show-our-team-form');
    }

    public function deletePhoto()
    {
        $this->reset('photo');
    }

    public function render()
    {
        return view('livewire.backend.our-team.form');
    }
}
