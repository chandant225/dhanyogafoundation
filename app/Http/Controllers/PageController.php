<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class PageController extends Controller
{
    use SEOToolsTrait;

    public function show(Page $page)
    {
        $this->seo()->setTitle($page->seoTitle());
        $this->seo()->setDescription($page->seoDescription());
        $this->seo()->opengraph()->addImage($page->seoImage());

        return view('frontend.page.show', compact('page'));
    }

    public function getInvolved()
    {
        return view('frontend.page.get-involved');
    }

    public function donation()
    {
        return view('frontend.page.donation');
    }
}
