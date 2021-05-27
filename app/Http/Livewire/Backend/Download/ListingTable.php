<?php

namespace App\Http\Livewire\Backend\Download;

use App\Download;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class ListingTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function delete(Download $download)
    {
        Storage::delete($download->file_path);
        $download->delete();
        $this->alert('Deleted Successfully');
    }

    public function render()
    {
        $downloads =  Download::latest()->paginate();

        return view('livewire.backend.download.listing-table', [
            'downloads' => $downloads
        ]);
    }
}
