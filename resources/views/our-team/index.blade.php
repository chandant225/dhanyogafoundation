@extends('layouts.backend')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex">
                    <h1>Our Team</h1>
                    {{-- <button class="btn btn-outline-primary btn-sm z-depth-0 align-self-center my-0 ml-3 py-1 waves-effect waves-light" role="button"  class="btn btn-primary" data-toggle="modal" data-target="#ourTeamFormModal">Add New</button> --}}
                    <a href="{{ route('backend.our-team.create') }}" class="btn btn-outline-primary btn-sm z-depth-0 align-self-center my-0 ml-3 py-1 waves-effect waves-light">Add New</a>
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
    <livewire:backend.our-team.listing />
    <div class="modal fade" id="ourTeamFormModal" tabindex="-1" role="dialog" aria-labelledby="ourTeamFormModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ourTeamFormModalLabel">Our Team</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <livewire:backend.our-team.form />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        window.addEventListener('show-our-team-form', function() {
            $('#ourTeamFormModal').modal('show')
        });

        window.addEventListener('hide-our-team-form', function() {
            $('#ourTeamFormModal').modal('hide')
        });
    });

</script>
@endpush
