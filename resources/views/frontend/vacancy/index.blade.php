<x-app-layout>
    <x-slot name="siteTitle">
        Volunteer | {{ siteName() }}
    </x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            Volunteer
        </x-slot>
    </x-frontend.partials.page-title>

    <div class="container mx-auto py-8 px-4">
        <div class="text-center text-gray-700 mb-5 md:mb-16">
            <h1 class="text-2xl md:text-4xl font-mono font-semibold mb-3"> WE NEED YOUR HELP</h1>
            <h3 class="font-mono">Because a better life and we need your hand</h3>
            <div class="w-32 h-1 bg-primary rounded-full mx-auto my-4"></div>
        </div>

        <div class="grid sm:grid-cols-2 gap-5 items-center mb-8">
            <div>
                <div class="aspect-w-16 aspect-h-9">
                    <img class="w-full h-full object-cover object-center rounded" src="https://dhanayogafoundation.org/wp-content/uploads/2019/09/volunteer-page-image.jpg" alt="DYF">
                </div>
            </div>
            <div>
                <div class="prose">
                    <p>It is not how much bank balance you have in your account that matters at the end, it is the good karma(action) that you have added over your life which counts and will add at the end. And serving the needy is the best service to humanity.</p>
                    <p>It will be our pleasure to have you as our volunteer with whom we can have the helping hand while spreading smiles!</p>
                    <p>Please connect with us to know more about our volunteering requirements and activities which you are interested in!</p>
                </div>
            </div>
        </div>

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
