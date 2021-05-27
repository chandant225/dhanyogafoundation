<x-app-layout>
    <x-slot name="siteTitle">
        {{ $pageTitle }} | {{ siteName() }}
    </x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            {{ $pageTitle }}
        </x-slot>
        <x-slot name="breadcrumbs">
            {{ Breadcrumbs::render('page', $pageTitle) }}
        </x-slot>
    </x-frontend.partials.page-title>

    <div class="container mx-auto">
        <div class="py-5 sm:my-8 md:py-16 px-4">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <td class="py-2 px-4 border bg-gray-50">#</td>
                        <td class="py-2 px-4 border bg-gray-50">Title</td>
                        <td class="py-2 px-4 border bg-gray-50"></td>
                        <td class="py-2 px-4 border bg-gray-50 text-center"></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($downloads as $download)
                    <tr>
                        <td class="py-2 px-4 border">{{ $loop->iteration + $downloads->firstItem() - 1 }}</td>
                        <td class="py-2 px-4 border">{{ $download->title }}</td>
                        <td class="py-2 px-4 border"><div class="inline-block text-xs bg-indigo-50 text-indigo-900 py-1 px-2 rounded">{{ $download->category }}</div></td>
                        <td class="py-2 px-4 border text-center"><a class="text-indigo-600 hover:underline" href="{{ $download->fileUrl() }}">Download</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if($downloads->hasPages())
            <div class="d-flex justify-content-end">
                {{ $downloads->links() }}
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
