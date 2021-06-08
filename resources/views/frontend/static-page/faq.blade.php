<x-app-layout>
    <x-slot name="siteTitle">
        {{ __('FAQ') }} | {{ siteName() }}
    </x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            {{ __('FAQ') }}
        </x-slot>
        <x-slot name="breadcrumbs">
            {{ Breadcrumbs::render('page', 'FAQ') }}
        </x-slot>
    </x-frontend.partials.page-title>

    <div class="container mx-auto">
        <div class="py-5 px-4">
            <div class="py-10 max-w-screen-xl mx-auto">

                <x-faq-section></x-faq-section>

            </div>
        </div>
    </div>
</x-app-layout>
