<x-app-layout>
    <x-slot name="siteTitle">
        {{ $pageTitle }} | {{ siteName() }}
    </x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            {{ $pageTitle }}
        </x-slot>
        <x-slot name="breadcrumbs">
            {{ Breadcrumbs::render('team-member', $member->name) }}
        </x-slot>
    </x-frontend.partials.page-title>

    <div class="container mx-auto py-16 px-8">
        <div class="md:flex gap-5 md:gap-6 lg:gap-8">
            <div>
                <div class="h-48 w-48 mx-auto">
                    <img class="h-full w-full object-cover rounded-lg shadow-lg" src="{{ $member->photoUrl() }}" alt="{{ $member->name }}">
                </div>
                <div class="text-center">
                    <h6 class="mt-2 text-secondary font-medium">{{ $member->designation }}</h6>
                    <h6 class="mt-2 text-secondary font-medium">{{ $member->email }}</h6>
                </div>

                <ul class="flex flex-row mt-4 space-x-2 justify-center">
                    <li>
                        <a href="{{ $member->facebook_link }}" class="flex items-center justify-center h-8 w-8 border rounded-full text-primary border-primary hover:text-secondary hover:border-secondary" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $member->twitter_link }}" class="flex items-center justify-center h-8 w-8 border rounded-full text-primary border-primary hover:text-secondary hover:border-secondary" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $member->linkedin_link }}" class="flex items-center justify-center h-8 w-8 border rounded-full text-primary border-primary hover:text-secondary hover:border-secondary" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <h1 class="text-xl md:text-2xl font-semibold tracking-wide leading-8 text-gray-700 mb-4">{{ $member->name }}</h1>
                <div class="w-32 h-1 bg-primary rounded-full mb-5"></div>

                @hasanyrole('admin')
                <div class="my-3">
                    <a class="inline-block bg-secondary text-white hover:bg-yellow-500 py-2 px-3 text-xs rounded" href="{{ route('backend.our-team.edit', $member) }}">Edit</a>
                </div>
                @endhasanyrole
                <div class="prose">
                    {!! $member->about !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
