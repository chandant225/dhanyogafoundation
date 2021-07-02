<x-app-layout>
    <x-slot name="siteTitle">
        Volunteer | {{ siteName() }}
    </x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            Volunteer
        </x-slot>
        <x-slot name="breadcrumbs">
            <div class="flex justify-center">
                {{ Breadcrumbs::render('posts') }}
            </div>
        </x-slot>
    </x-frontend.partials.page-title>

    <div class="container mx-auto py-8 px-4">
        @foreach ($vacancies as $vacancy)
        <div class="p-5 shadow mb-4 border border-gray-50 rounded flex">
            <div>
                <h1 class="text-lg font-semibold tracking-wide">
                    {{ $vacancy->title }}
                </h1>
                <div class="text-sm font-semibold tracking-wider text-primary">Posted {{ $vacancy->created_at->diffForHumans() }}</div>
            </div>
            <div class="ml-auto">
                <x-primary-button-link href="{{ $vacancy->applyLink() }}">View Details</x-primary-button-link>
            </div>
        </div>
        @endforeach
    </div>
    {{-- </div> --}}
</x-app-layout>
