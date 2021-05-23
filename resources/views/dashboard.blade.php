@extends('layouts.backend')

@section('content')
<div id="dashboard-page" class="container-fluid py-5">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                {{-- Stats --}}
                <div class="col-md-4">
                    <div class="info-box shadow-none">
                        <span class="info-box-icon">
                            <span class="nav-icon svg-icon svg-baseline">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </span>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Posts</span>
                            <span class="info-box-number"><span class="font-weight-normal">Total:</span> {{ $postsCount }} <span class="font-weight-normal">({{ $postCategoriesCount }} Categories)</span></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-box shadow-none">
                        <span class="info-box-icon">
                            <span class="nav-icon svg-icon svg-baseline">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                                </svg>
                            </span>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Subscribers</span>
                            <span class="info-box-number"><span class="font-weight-normal">Total</span> {{ $subscribersCount }}</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-box shadow-none">
                        <span class="info-box-icon">
                            <span class="nav-icon svg-icon svg-baseline">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-journal-check" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                </svg>
                            </span>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Pages</span>
                            <span class="info-box-number"><span class="font-weight-normal">Total</span> {{ $pagesCount }}</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <livewire:dashboard.recent-posts-tile />
                </div>
                <div class="col-md-12">
                    <livewire:dashboard.recent-pages-tile />
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="info-box shadow-none">
                <span class="info-box-icon">
                    <img src="{{ auth()->user()->avatar() }}" class="img-circle elevation-1" alt="{{ auth()->user()->name }}" style="height: 50px;">
                </span>
                <div class="info-box-content">
                    <span class="info-box-number">{{ Auth::user()->name }}</span>
                    <span class="info-box-text">{{ Auth::user()->email }}</span>
                </div>
            </div>
            <h6 class="h6-responsive">Quick Links</h6>
            <a class="d-block bg-white p-4 rounded text-center my-3" href="{{ route('backend.posts.create') }}">New Post</a>
            <a class="d-block bg-white p-4 rounded text-center my-3" href="{{ route('backend.pages.create-or-edit') }}">New Page</a>
            <a class="d-block bg-white p-4 rounded text-center my-3" href="{{ route('backend.contact-us.index') }}">Contact Messages</a>
            <a class="d-block bg-white p-4 rounded text-center my-3" href="{{ route('backend.settings.general.index') }}">General Settings</a>
        </div>
    </div>
</div>
@endsection
@push('styles')
<style>
    .dashboard-page {
        color: #283541;
    }

</style>
@endpush
