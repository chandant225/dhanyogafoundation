<?php

namespace App\Http\Controllers\Backend;

use App\Alert\Facades\Alert;
use App\Faq;
use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('faq.index');
    }

    public function create()
    {
        return $this->showForm();
    }

    public function store(FaqRequest $request)
    {
        Faq::create($request->validated());
        Faq::clearCache();

        Alert::message('FAQ Saved')->send();
        
        return redirect()->route('backend.faqs.index');
    }

    public function edit(Faq $faq)
    {
        return $this->showForm($faq);
    }

    public function update(FaqRequest $request, Faq $faq)
    {
        $faq->update($request->validated());
        Faq::clearCache();

        Alert::message('Changes Saved')->send();
        
        return redirect()->back();
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        Faq::clearCache();

        Alert::message('FAQ Deleted')->send();

        return redirect()->route('backend.faqs.index');
    }

    public function showForm(Faq $faq = null)
    {
        $updateMode = true;
        $currentMaxPosition = Faq::max('position');
        $position = $currentMaxPosition ? ++$currentMaxPosition : 1;

        if (!$faq) {
            $updateMode = false;
            $faq = new Faq();
        }

        return view('faq.form', compact(['faq', 'updateMode', 'position']));
    }
}
