@extends('layouts.backend')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex">
                    <h1>FAQ</h1>
                    @if(!$updateMode)
                    <a class="btn btn-outline-primary btn-sm z-depth-0 align-self-center my-0 ml-3 py-1 waves-effect waves-light" href="{{ route('backend.faqs.create') }}">Add New</a>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('backend.faqs.index') }}">FAQ</a></li>
                    <li class="breadcrumb-item active">{{ $updateMode ? 'Edit' : 'Add New' }}</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="container-fluid pb-5">
    <div class="card">
        <div class="card-body">
            <form action="{{ $updateMode ? route('backend.faqs.update', $faq) : route('backend.faqs.store') }}" method="POST" class="form">
                @csrf
                @if(!$updateMode)
                <input type="hidden" name="position" value="{{ $position }}">
                @endif
                @if($updateMode)
                @method('put')
                @endif
                <div class="form-group">
                    <label for="question">Question</label>
                    <input type="text" name="question" id="question" class="form-control {{ invalid_class('question') }}" value="{{ old('question', $faq->question) }}" @if(!$updateMode) autofocus @endif>
                    <x-invalid-feedback field="question"></x-invalid-feedback>
                </div>

                <div class="form-group">
                    <label for="answer">Answer</label>
                    <textarea name="answer" id="answer" class="form-control {{ invalid_class('answer') }}" rows="5">{{ old('answer', $faq->answer) }}</textarea>
                    <x-invalid-feedback field="answer"></x-invalid-feedback>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary px-4">{{ $updateMode ? 'Update' : 'Save' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
