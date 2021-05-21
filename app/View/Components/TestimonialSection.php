<?php

namespace App\View\Components;

use App\Testimonial;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class TestimonialSection extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        $testimoninals = Cache::rememberForever(Testimonial::CACHE_KEY, function () {
            return Testimonial::positioned()->get();
        });

        return view('frontend.welcome.testimonial-section', [
            'testimonials' => $testimoninals,
            'totalCount' => count($testimoninals)
        ]);
    }
}
