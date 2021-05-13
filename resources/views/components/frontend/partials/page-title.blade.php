<div class="bg-gray-50">
    <div class="container mx-auto py-10 px-4">
        @isset($title)
        <h1 class="text-2xl sm:text-3xl md:text-4xl text-indigo-900 text-center font-bold tracking-wide mb-3 sm:mb-4">{{ $title }}</h1>
        @endisset

        @isset($breadcrumbs)
        <div class="flex justify-center">
            {{ $breadcrumbs }}
        </div>
        @endisset
    </div>
</div>
