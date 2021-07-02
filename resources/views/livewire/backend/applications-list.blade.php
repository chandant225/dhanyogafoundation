<div>
    <div class="btn-toolbar mb-4" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <button class="btn {{ $readFilter == null ? 'btn-primary' : 'btn-secondary' }}" wire:click="$set('readFilter', null)">All <small>({{ $allApplicationCount }})</small></button>
            <button class="btn {{ $readFilter == 1 ? 'btn-primary' : 'btn-secondary' }}" wire:click="$set('readFilter', 1)">Unread <small>({{ $unreadApplicationCount }})</small></button>
            <button class="btn {{ $readFilter == 2 ? 'btn-primary' : 'btn-secondary' }}" wire:click="$set('readFilter', 2)">Read <small>({{ $readApplicationCount }})</small></button>
        </div>
    </div>

    @forelse ($applications as $application)
    <div class="card elevation-0">
        <div class="card-body d-flex align-items-center">
            <div>
                <h6 class="h6-resonsive">{{ $application->applicant_name }}</h6>
                <small class="d-block">{{ $application->applicant_email }}</small>
            </div>
            <div class="ml-auto">
                <a class="btn btn-primary btn-sm" href="{{ route('backend.volunteer-applications.show', $application) }}">View</a>
                {{-- <button class="btn btn-danger btn-sm">Delete</button> --}}
            </div>
        </div>
    </div>
    @empty
    @include('partials.no-content')
    @endforelse

    @if($applications->hasPages())
    <div class="d-flex justify-content-end">
        {{ $applications->links() }}
    </div>
    @endif
</div>
