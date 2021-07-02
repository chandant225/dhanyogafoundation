<div>
@foreach ($vacancies as $vacancy)
    <div class="card elevation-0">
        <div class="card-body d-flex align-items-center">
            <h6 class="h6-resonsive">{{ $vacancy->title }}</h6>
            <div class="ml-auto">
                <a class="btn btn-primary btn-sm" href="{{ route('backend.vacancy.edit', $vacancy) }}">Edit</a>
                <button class="btn btn-danger btn-sm">Delete</button>
            </div>
        </div>
    </div>
    @endforeach
</div>
