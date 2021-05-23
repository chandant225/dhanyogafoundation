<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Page;
use App\Post;
use App\PostCategory;
use App\Subscriber;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totals = collect(DB::select("SELECT 
            (select count('id') from posts) as postsCount,
            (select count(*) from post_categories) as postCategoriesCount,
            (select count(*) from pages) as pagesCount,
            (select count(*) from subscribers) as subscribersCount
            "))->first();

        return view('dashboard', [
            'postsCount' => $totals->postsCount,
            'postCategoriesCount' => $totals->postCategoriesCount,
            'pagesCount' => $totals->pagesCount,
            'subscribersCount' => $totals->subscribersCount,
        ]);
    }
}
