<?php

namespace App\Http\Livewire\Backend;

use App\Subscriber;
use Livewire\Component;
use Livewire\WithPagination;

class SubscriberList extends Component
{
    use WithPagination;

    public $paginate = 15;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['paginate'];

    public function trash(Subscriber $subscriber)
    {
        $subscriber->delete();

        $this->alert('success', 'Subscriber removed successfully');
    }

    public function render()
    {
        $subscribers = Subscriber::latest()->paginate($this->paginate);

        return view('livewire.backend.subscriber-list', [
            'subscribers' => $subscribers
        ]);
    }
}
