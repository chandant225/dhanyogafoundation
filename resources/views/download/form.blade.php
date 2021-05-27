@extends('layouts.backend')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex">
                    <h1>Downloads</h1>
                    @if($updateMode)
                    <a class="btn btn-outline-primary btn-sm z-depth-0 align-self-center my-0 ml-3 py-1 waves-effect waves-light" href="{{ route('backend.downloads.create') }}">Add New</a>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('backend.downloads.index') }}">Downloads</a></li>
                    @if($updateMode)
                    <li class="breadcrumb-item active">Create New</li>
                    @else
                    <li class="breadcrumb-item active">Edit</li>
                    @endif
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="container-fluid pb-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <livewire:backend.download.form :download="$download" />
        </div>
    </div>
</div>
@endsection
