<?php

namespace App\Http\Livewire\Backend\Download;

use App\Download;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    public $updateMode = false;
    public Download $download;
    public $file;
    public $categories;

    protected function rules()
    {
        return [
            'download.title' => 'required',
            'download.category' => 'nullable',
            'download.description' => 'nullable',
            'file' => $this->updateMode ? 'nullable' : 'required',
        ];
    }

    public function mount(Download $download = null)
    {
        if (!$download->exists) {
            $download = new Download();
        } else {
            $this->updateMode = true;
        }
        $this->download = $download;
        $this->categories = Download::select('category')->whereNotNull('category')->distinct()->get()->pluck('category');
    }

    public function save()
    {
        $this->validate();
        if ($this->file) {
            $this->download->file_path = $this->file->store('downloads');
        }
        $this->download->save();
        $this->alert('success', 'Saved successfully');
        return redirect()->route('backend.downloads.index');
    }

    public function render()
    {
        return view('livewire.backend.download.form');
    }
}
