<?php

namespace App\Http\Livewire\Backend;

use App\Faq;
use Livewire\Component;
use Livewire\WithPagination;

class FaqList extends Component
{
    public $sortMode = false;

    public function render()
    {
        $faqs = Faq::positioned()->get();

        return view('livewire.backend.faq-list', [
            'faqs' => $faqs
        ]);
    }

    public function updateFaqPosition($items)
    {
        foreach ($items as $item) {
            Faq::where('id', $item['value'])->update(['position' => $item['order']]);
        }
        Faq::clearCache();
    }
}
