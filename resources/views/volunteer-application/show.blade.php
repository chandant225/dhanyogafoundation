@extends('layouts.backend')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h4 class="h4-responsive">Application for: {{ $application->vacancy->title }}</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('backend.volunteer-applications.index') }}">Applications</a></li>
                    <li class="breadcrumb-item active">View</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="px-4">
    {{-- <label for="">{{ $application->vacancy->title }}</label> --}}
    <div class="form-group">
        <label for="">Applicant's Name</label>
        <div class="answer-box">{{ $application->applicant_name }}</div>
    </div>
    <div class="form-group">
        <label for="">Applicant's Email</label>
        <div class="answer-box">{{ $application->applicant_email }}</div>
    </div>
    <div class="form-group">
        <label for="">Cover Letter</label>
        <div class="answer-box">{!! $application->cover_letter !!}</div>
    </div>

    <div class="form-group">
        <label for="">CV/Resume</label>
        @if ($application->resume)
        <div class="answer-box">
            <a href="{{ asset('storage' . '/'. $application->resume) }}" class="btn btn-primary" download target="_blank">Download</a>
        </div>
        @else
        <div>No resume provided.</div>
        @endif
    </div>

    @foreach ($questions as $question)
    <div class="form-group">
        <label for="">{{ $question['question'] }}</label>
        <div class="answer-box">{!! $question['answer'] !!}</div>
    </div>
    @endforeach

</section>
@endsection

@push('styles')
<style>
    .answer-box {
        background-color: #fff;
        border-radius: 5px;
        padding: 10px 15px;
        margin-top: 5px;
        margin-bottom: 5px;
    }

</style>
@endpush
