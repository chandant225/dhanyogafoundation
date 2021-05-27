<?php

namespace App\Http\Livewire\Backend\Department;

use App\Department;
use Livewire\Component;

class Listing extends Component
{
    public $sortMode = false;

    protected $listeners = [
        'departmentCreated' => 'reload',
        'departmentUpdated' => 'reload',
        'deleteDepartment' => 'deleteDepartment',
    ];

    public function reload()
    {
        //
    }

    public function deleteDepartment(Department $department)
    {
        // check for members under department
        $department->delete();
        $this->alert('success', 'Record deleted');
        $this->dispatchBrowserEvent('hide-department-form');
    }

    public function sortDepartments($items)
    {
        foreach ($items as $item) {
            Department::where('id', $item['value'])->update(['position' => $item['order']]);
        }
    }

    public function render()
    {
        $departments = Department::positioned()->get();

        return view('livewire.backend.department.listing', compact('departments'));
    }
}
