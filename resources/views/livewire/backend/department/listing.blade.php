<div class="container-fluid">
    <div class="mb-3">
        @if($sortMode)
        <button wire:click.prevsent="$set('sortMode', false)" class="btn btn-primary">Done</button>
        @else
        <button wire:click.prevsent="$set('sortMode', true)" class="btn btn-primary">Arrange Order</button>
        @endif
    </div>
    <div class="row" wire:sortable="sortDepartments">
        @foreach ($departments as $department)
        <div class="col-md-12" @if($sortMode) wire:sortable.item="{{ $department->id }}" wire:key="testimonial-{{ $department->id }}" @endif>
            <div class="card my-3 rounded shadow-none">
                <div class="card-body">
                    <div class="d-flex">
                        @if ($sortMode)
                        <div class="mr-2">
                            <button wire:sortable.handle type="button" class="btn btn-link btn-sm mb-0"><i class="fas fa-arrows-alt"></i></button>
                        </div>
                        @endif
                        <div class="flex-grow-1">
                            <p class="card-text">
                                {{ $department->name }}
                            </p>
                        </div>
                        <div class="ml-auto">
                            <button wire:click="$emit('editDepartment', '{{ $department->id }}')" class="btn btn-sm btn-success px-3">Edit</button>
                            <button wire:click="$emit('deleteDepartment', '{{ $department->id }}')" onclick="confirm('Are you sure to delete?') || event.stopImmediatePropagation()" class="btn btn-sm btn-danger px-3">Del</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @if (!count($departments))
    @include('partials.no-content')
    @endif

</div>
@push('styles')
<style>
    .draggable--over {
        border: 1px dashed #ccc;
        background-color: #fff;
    }

</style>
@endpush
