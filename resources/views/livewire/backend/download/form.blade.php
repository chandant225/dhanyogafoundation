<div class="card">
    <div class="card-body">
        <form wire:submit.prevent="save">
            <div class="form-group">
                <label class="required">Title</label>
                <input type="text" wire:model.defer="download.title" class="form-control @error('download.title') is-invalid @enderror">
                <x-invalid-feedback field="download.title"></x-invalid-feedback>
            </div>
            <div class="form-group">
                <label>Category</label>
                <datalist id="categories">
                    @foreach ($categories as $category)
                    <option value="{{ $category }}"></option>
                    @endforeach
                </datalist>
                <input type="text" wire:model.defer="download.category" class="form-control @error('download.category') is-invalid @enderror" list="categories">
                <x-invalid-feedback field="download.category"></x-invalid-feedback>
            </div>
            <div class="form-group">
                <label class="d-block required">File</label>
                @if($updateMode)
                <div class="alert alert-light">
                    You cannot change file. Delete this entry and create new if you want to upload another file.
                </div>
                @else
                <input type="file" wire:model="file" class="@error('file') is-invalid @enderror">
                <x-invalid-feedback field="file"></x-invalid-feedback>
                @endif
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea wire:model.defer="download.description" class="form-control @error('download.description') is-invalid @enderror" rows="5"></textarea>
                <x-invalid-feedback field="download.description"></x-invalid-feedback>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary px-4">Save</button>
            </div>
        </form>
    </div>
</div>
