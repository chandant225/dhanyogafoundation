<?php

namespace App\View\Components;

use App\Post;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class LatestBlogsSection extends Component
{
    public function render()
    {
        $posts = Cache::remember('latest-blogs-section', now()->addMinutes(5) , function () {
            return Post::with(['category'])->published()->latest()->limit(3)->get();
        });

        return view('frontend.welcome.latest-blogs-section', [
            'posts' => $posts
        ]);
    }
}
