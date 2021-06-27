<div class="bg-gray-50 relative">
    <style>
        .grid-indigo {
            background-image: radial-gradient(#ded1ff 1px, transparent 2px);
            background-size: 16px 16px;
        }

    </style>
    <div class="absolute bottom-0 left-0 z-10 grid-indigo w-16 h-16 md:w-40"></div>
    <div class="absolute bottom-0 right-0 z-10 grid-indigo w-16 h-32 md:w-24"></div>
    <div class="container mx-auto py-10 md:py-16 px-4">

        @isset($title)
        <h1 class="text-2xl sm:text-3xl md:text-4xl text-primary text-center font-bold tracking-wide mb-3 sm:mb-4">{{ $title }}</h1>
        @endisset

        @isset($breadcrumbs)
        <div class="flex justify-center">
            {{ $breadcrumbs }}
        </div>
        @endisset
    </div>
</div>
