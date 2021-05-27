<div class="card">
    <div class="card-body">
        @if (count($downloads))
        <table class="table">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Title</td>
                    <td>Category</td>
                    <td class="text-center">File</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($downloads as $download)
                <tr>
                    <td>{{ $loop->iteration + $downloads->firstItem() - 1 }}</td>
                    <td>{{ $download->title }}</td>
                    <td>{{ $download->category }}</td>
                    <td class="text-center"><a class="btn btn-link py-0" href="{{ $download->fileUrl() }}">Download</a></td>
                    <td class="text-right">
                        <a class="btn btn-success btn-sm mr-2" href="{{ route('backend.downloads.edit', $download) }}">Edit</a>
                        <button wire:click="delete('{{ $download->id }}')" onclick="confirm('Are you sure to delete? This action is irreversible.') || event.stopImmediatePropagation()" class="btn btn-sm btn-danger px-3">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @if($downloads->hasPages())
        <div class="d-flex justify-content-end">
            {{ $downloads->links() }}
        </div>
        @endif

        @else
        @include('partials.no-content')
        @endif

    </div>
</div>
