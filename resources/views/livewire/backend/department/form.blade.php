<form wire:submit.prevent="save">
    <div class="form-group">
        <label class="text-sm">Name</label>
        <input type="text" wire:model="department.name" class="form-control @error('department.name') is-invalid @enderror">
        <x-invalid-feedback field="department.name"></x-invalid-feedback>
    </div>
    <div class="form-group d-flex mt-4">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary ml-auto">Save changes</button>
    </div>
</form>
