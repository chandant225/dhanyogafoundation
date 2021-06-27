@unless ($breadcrumbs->isEmpty())

<nav>
    <ol class="rounded flex flex-wrap text-sm text-gray-800 font-bold">
        @foreach ($breadcrumbs as $breadcrumb)

        @if ($breadcrumb->url && !$loop->last)
        <li>
            <a href="{{ $breadcrumb->url }}" class="text-secondary hover:text-blue-900 hover:underline focus:text-blue-900 focus:underline">
                {{ $breadcrumb->title }}
            </a>
        </li>
        @else
        <li>
            {{ $breadcrumb->title }}
        </li>
        @endif

        @unless($loop->last)
        <li class="text-gray-500 flex items-center px-2">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path>
            </svg>
        </li>
        @endif

        @endforeach
    </ol>
</nav>

@endunless
