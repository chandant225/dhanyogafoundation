<?php

namespace App\Http\Controllers\Backend;

use App\Download;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {
        return view('download.index');
    }

    public function create()
    {
        return $this->showForm(new Download());
    }

    public function edit(Download $download)
    {
        return $this->showForm($download);
    }

    protected function showForm(Download $download)
    {
        $updateMode = false;

        if (!$download->exists) {
            $updateMode = true;
        }

        return view('download.form', compact('updateMode', 'download'));
    }
}
