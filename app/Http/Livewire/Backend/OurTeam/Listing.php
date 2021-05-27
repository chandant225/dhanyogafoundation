<?php

namespace App\Http\Livewire\Backend\OurTeam;

use App\OurTeam;
use App\Service\ImageService;
use Livewire\Component;

class Listing extends Component
{
    public $sortMode = false;

    protected $listeners = [
        'ourTeamCreated' => 'reload',
        'ourTeamUpdated' => 'reload',
        'deleteOurTeam' => 'deleteOurTeam',
    ];

    public function reload()
    {
        //
    }

    public function deleteOurTeam(OurTeam $ourTeam)
    {
        $imageService = new ImageService();
        $imageService->unlinkImage($ourTeam->photo);
        $ourTeam->delete();
        $this->alert('success', 'Record deleted');
        $this->dispatchBrowserEvent('hide-our-team-form');
    }

    public function render()
    {
        $ourTeams = OurTeam::positioned()->get();

        return view('livewire.backend.our-team.listing', compact('ourTeams'));
    }

    public function sortOurTeams($items)
    {
        foreach ($items as $item) {
            OurTeam::where('id', $item['value'])->update(['position' => $item['order']]);
        }
    }
}
