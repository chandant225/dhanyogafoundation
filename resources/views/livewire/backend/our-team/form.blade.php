<form wire:submit.prevent="save">
    <div class="form-group">
        <label class="text-sm">Name</label>
        <input type="text" wire:model.defet="ourTeam.name" class="form-control @error('ourTeam.name') is-invalid @enderror">
        <x-invalid-feedback field="ourTeam.name"></x-invalid-feedback>
    </div>
    <div class="form-group">
        <label class="text-sm">Client Title</label>
        <input type="text" wire:model.defer="ourTeam.designation" class="form-control @error('ourTeam.designation') is-invalid @enderror">
        <x-invalid-feedback field="ourTeam.designation"></x-invalid-feedback>
    </div>
    <div class="form-group">
        <label class="text-sm">E-mail</label>
        <input type="text" wire:model.defer="ourTeam.email" class="form-control @error('ourTeam.email') is-invalid @enderror">
        <x-invalid-feedback field="ourTeam.email"></x-invalid-feedback>
    </div>
    <div class="form-group">
        <label class="text-sm">Department</label>
        <select wire:model.defer="ourTeam.department_id" class="custom-select @error('ourTeam.department_id') is-invalid @enderror">
            <option value="">Select Department</option>
            @foreach ($this->departments as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
            @endforeach
        </select>
        <x-invalid-feedback field="ourTeam.department_id"></x-invalid-feedback>
    </div>
    <div class="form-group">
        <label class="text-sm">About</label>
        <textarea wire:model.defer="ourTeam.about" class="form-control @error('ourTeam.about') is-invalid @enderror" cols="30" rows="8"></textarea>
        <x-invalid-feedback field="ourTeam.about"></x-invalid-feedback>
    </div>
    <div class="form-group">
        <div class="d-flex">
            <div class="align-self-center">
                @if($photo)
                <img src="{{ $photo->temporaryUrl() }}" style="height: 3rem; width: 3rem; border-radius: 50%;">
                @else
                <img src="https://ui-avatars.com/api/?background=4f46e5&color=fff" style="height: 3rem; width: 3rem; border-radius: 50%;">
                @endif
            </div>
            <div class="ml-2 align-self-center">
                <input type="file" wire:model="photo" class="d-none" id="profile-photo">
                @if($photo)
                <button wire:click="deletePhoto" type="button" role="button" class="btn btn-sm btn-light">Remove</button>
                @else
                <label class="btn btn-primary btn-sm mb-0" for="profile-photo" style="font-size: .8rem; font-weight: normal;">Upload a new photo</label>
                @endif
            </div>
        </div>
        @error('photo')
        <small class="text-red">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group d-flex mt-4">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary ml-auto">Save changes</button>
    </div>
</form>
