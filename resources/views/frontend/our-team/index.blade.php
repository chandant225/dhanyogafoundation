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

    <div class="container mx-auto py-16 px-8">
        @foreach ($departments as $department)
        <div class="mb-5 sm:mb-8 md:mb-10">
            <div class="border-l-8 border-primary pl-4 my-8">
                <h1 class="inline-block py-2 px-3 text-2xl sm:text-3xl text-primary font-semibold tracking-wider">{{ $department->name }}</h1>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6 md:gap-10 space-y-5 sm:space-y-0 my-6">
                @foreach ($department->members as $member)
                <div class="">
                    <div class="aspect-w-1 aspect-h-1 relative">
                        <a href="{{ route('our-team.show', $member->slug) }}">
                            <img class="h-full w-full object-cover rounded-lg shadow-lg" src="{{ $member->photoUrl() }}" alt="{{ $member->name }}">
                        </a>
                        @hasanyrole('admin')
                        <div>
                            <a class="absolute right-2 top-2 inline-block bg-secondary text-white hover:bg-yellow-500 py-2 px-3 text-xs rounded" href="{{ route('backend.our-team.edit', $member) }}">Edit</a>
                        </div>
                        @endhasanyrole
                    </div>

                    <h2 class="mt-4 font-bold text-xl text-secondary"><a href="{{ route('our-team.show', $member->slug) }}" class="hover:text-primary">{{ $member->name }}</a></h2>
                    <h6 class="mt-2 text-secondary font-medium">{{ $member->designation }}</h6>

                    <ul class="flex flex-row mt-4 space-x-2">
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
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>
