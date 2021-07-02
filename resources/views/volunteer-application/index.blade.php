@extends('layouts.backend')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Applications</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Category</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="px-4">
    @include('alerts.all')
    <livewire:backend.applications-list />
</section>
@endsection
@push('scripts')
@endpush
