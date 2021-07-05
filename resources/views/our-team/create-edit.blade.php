@extends('layouts.backend')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex">
                    <h1>Our Team</h1>
                    {{-- <button class="btn btn-outline-primary btn-sm z-depth-0 align-self-center my-0 ml-3 py-1 waves-effect waves-light" role="button"  class="btn btn-primary" data-toggle="modal" data-target="#ourTeamFormModal">Add New</button> --}}
                </div>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Our Team</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="container-fluid pb-5">
    <form action="{{ $updateMode ? route('backend.our-team.update', $ourTeam) : route('backend.our-team.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @if ($updateMode)
        @method('put')
        @endif
        <div class="form-group">
            <label class="text-sm">Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $ourTeam->name) }}">
            <x-invalid-feedback field="name"></x-invalid-feedback>
        </div>
        <div class="form-group">
            <label class="text-sm">Client Title</label>
            <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror" value="{{ old('designation', $ourTeam->designation) }}">
            <x-invalid-feedback field="designation"></x-invalid-feedback>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label class="text-sm">E-mail</label>
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $ourTeam->email) }}">
                <x-invalid-feedback field="email"></x-invalid-feedback>
            </div>

            <div class="col-md-6">
                <label class="text-sm">Facebook Link</label>
                <input type="text" name="facebook_link" class="form-control @error('facebook_link') is-invalid @enderror" value="{{ old('facebook_link', $ourTeam->facebook_link) }}">
                <x-invalid-feedback field="facebook_link"></x-invalid-feedback>
            </div>

            <div class="col-md-6">
                <label class="text-sm">Twitter Link</label>
                <input type="text" name="twitter_link" class="form-control @error('twitter_link') is-invalid @enderror" value="{{ old('twitter_link', $ourTeam->twitter_link) }}">
                <x-invalid-feedback field="twitter_link"></x-invalid-feedback>
            </div>

            <div class="col-md-6">
                <label class="text-sm">LinkedIn Link</label>
                <input type="text" name="linkedin_link" class="form-control @error('linkedin_link') is-invalid @enderror" value="{{ old('linkedin_link', $ourTeam->linkedin_link) }}">
                <x-invalid-feedback field="linkedin_link"></x-invalid-feedback>
            </div>
        </div>
        <div class="form-group">
            <label class="text-sm">Department</label>
            <select name="department_id" class="custom-select @error('department_id') is-invalid @enderror">
                <option value="">Select Department</option>
                @foreach ($departments as $department)
                <option value="{{ $department->id }}" @if(old('department_id', $ourTeam->department_id) == $department->id) selected @endif>{{ $department->name }}</option>
                @endforeach
            </select>
            <x-invalid-feedback field="department_id"></x-invalid-feedback>
        </div>
        <div class="form-group">
            <label class="text-sm">Photo</label>
            <div class="row">
                <div class="col-md-6">
                    <input type="file" name="photo" class="@error('photo') is-invalid @enderror">
                    <x-invalid-feedback field="photo"></x-invalid-feedback>
                </div>
                @if ($updateMode)
                <div class="col-md-6">
                    <img src="{{ $ourTeam->photoUrl() }}" class="rounded" style="height: 4rem; width: 4rem;">
                </div>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label class="text-sm">About</label>
            <textarea name="about" class="editor form-control @error('about') is-invalid @enderror" cols="30" rows="8">{{ old('about', $ourTeam->about) }}</textarea>
            <x-invalid-feedback field="about"></x-invalid-feedback>
        </div>
        <div class="form-group d-flex mt-4">
            <button type="submit" class="btn btn-primary ml-auto">Save</button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    $(function() {
        $('.editor').summernote({
            placeholder: 'Content goes here...'
            , tabsize: 2
            , height: 800
        });
    });

</script>
@endpush
