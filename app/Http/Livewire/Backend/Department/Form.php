<?php

namespace App\Http\Livewire\Backend\Department;

use App\Department;
use Livewire\Component;

class Form extends Component
{
    public Department $department;

    protected $listeners = [
        'editDepartment' => 'editDepartment'
    ];

    protected function rules()
    {
        return [
            'department.name' => 'required',
        ];
    }

    public function mount()
    {
        $this->department = new Department();
    }

    public function save()
    {
        $this->validate();
        $this->department->save();
        $this->department = new Department();
        $this->alert('success', 'Department saved');
        $this->emit('departmentCreated');
        $this->dispatchBrowserEvent('hide-department-form');
    }

    public function editDepartment(Department $department)
    {
        $this->department = $department;
        $this->dispatchBrowserEvent('show-department-form');
    }

    public function render()
    {
        return view('livewire.backend.department.form');
    }
}
