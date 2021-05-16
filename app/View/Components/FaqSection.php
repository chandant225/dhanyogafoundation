<?php

namespace App\View\Components;

use App\Faq;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class FaqSection extends Component
{
    public function render()
    {
        $faqs = Cache::rememberForever('faqs', function () {
            return Faq::select(['question', 'answer'])->positioned()->get();
        });

        return view('frontend.welcome.faq-section', [
            'faqs' => $faqs
        ]);
    }
}
