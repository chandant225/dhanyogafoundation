<x-app-layout>
    <x-slot name="siteTitle">
        Posts | {{ siteName() }}
    </x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            Latest news and ideas from our team
        </x-slot>
        <x-slot name="breadcrumbs">
            <div class="flex justify-center">
                {{ Breadcrumbs::render('posts') }}
            </div>
        </x-slot>
    </x-frontend.partials.page-title>

    <div class="container mx-auto py-4">
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6 space-y-5 sm:space-y-0">
            @foreach ($posts as $post)
            <x-frontend.post.post-card :post="$post" />
            @endforeach
            @if ($posts->hasPages())
            {{ $posts->links() }}
            @endif
        </div>
    </div>
</x-app-layout>
