<?php

namespace App\Http\Controllers;

use App\Download;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $pageTitle = 'Financials/Reports';
        $downloads = Download::latest()->paginate();

        return view('report.index', [
            'pageTitle' => $pageTitle,
            'downloads' => $downloads
        ]);
    }
}
