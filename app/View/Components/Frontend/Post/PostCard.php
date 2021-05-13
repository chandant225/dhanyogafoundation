<?php

namespace App\View\Components\Frontend\Post;

use App\Post;
use Illuminate\View\Component;

class PostCard extends Component
{
    public Post $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('components.frontend.post.post-card');
    }
}
