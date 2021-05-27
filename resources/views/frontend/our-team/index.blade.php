<x-app-layout>
    <x-slot name="siteTitle">
        {{ $pageTitle }} | {{ siteName() }}
    </x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            {{ $pageTitle }}
        </x-slot>
        <x-slot name="breadcrumbs">
            {{ Breadcrumbs::render('our-teams') }}
        </x-slot>
    </x-frontend.partials.page-title>

    <div class="container mx-auto py-4">
        @foreach ($departments as $department)
        <div class="mb-5 sm:mb-8 md:mb-10">
            <h1 class="text-2xl sm:text-3xl md:text-4xl text-center text-indigo-900 font-bold tracking-wide my-4 sm:my-6 md:my-8">{{ $department->name }}</h1>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6 space-y-5 sm:space-y-0">
                @foreach ($department->members as $member)
                <div class="flex flex-col items-center justify-center p-4">
                    <div class="inline-flex shadow-lg border border-gray-200 rounded-full overflow-hidden h-40 w-40">
                        <img class="h-full w-full" src="{{ $member->photoUrl() }}" alt="{{ $member->name }}">
                    </div>

                    <h2 class="mt-4 font-bold text-xl">{{ $member->name }}</h2>
                    <h6 class="mt-2 text-sm text-gray-500 font-medium italic">{{ $member->designation }}</h6>

                    <ul class="flex flex-row mt-4 space-x-2">
                        <li>
                            <a href="" class="flex items-center justify-center h-8 w-8 border rounded-full text-gray-800 border-gray-800">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex items-center justify-center h-8 w-8 border rounded-full text-gray-800 border-gray-800">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex items-center justify-center h-8 w-8 border rounded-full text-gray-800 border-gray-800">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>
