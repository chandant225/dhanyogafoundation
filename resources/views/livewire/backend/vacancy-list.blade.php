<div>
@foreach ($vacancies as $vacancy)
    <div class="card elevation-0">
        <div class="card-body d-flex align-items-center">
            <h6 class="h6-resonsive">{{ $vacancy->title }}</h6>
            <div class="ml-auto">
                {{-- <a class="btn btn-primary btn-sm" href="{{ route('backend.vacancy.edit', $vacancy) }}">Edit</a> --}}
                <form action="{{ route('backend.vacancy.destroy', $vacancy) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure to delete?')">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
