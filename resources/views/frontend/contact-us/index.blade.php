<x-app-layout>
    <x-slot name="siteTitle">
        Contact Us | {{ appSettings('site_name') }}
    </x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            Contact Us
        </x-slot>
        <x-slot name="breadcrumbs">
            {{ Breadcrumbs::render('contact-us') }}
        </x-slot>
    </x-frontend.partials.page-title>

    <style>
        #contact-form label.required::after {
            content: '*';
            color: #f74b4b;
            margin-left: 5px;
        }

    </style>
    <div class="">

        <div class="container mx-auto py-5 px-4">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 sm:col-span-5">
                    <div class="bg-white text-gray-700 h-100 p-4">
                        <h3 class="text-2xl text-indigo-900 font-bold uppercase mb-3">{{ appSettings('contact_us_section_title') }}</h3>
                        <p style="color: #6e7279; font-size: .9rem;">
                            {!! appSettings('contact_us_section_description') !!}
                        </p>
                        <div class="my-3"></div>
                        <div class="py-2">
                            <span class="text-red-500 mr-3"><i class="fa fa-envelope"></i></span>
                            <span>{{ appSettings('email') }}</span>
                        </div>
                        @if (appSettings('mobile'))
                        <div class="py-2">
                            <span class="text-red-500 mr-3"><i class="fa fa-phone"></i></span>
                            <span>{{ appSettings('mobile') }}</span>
                        </div>
                        @endif
                        <div class="py-2">
                            <span class="text-red-500 mr-3"><i class="fa fa-map-marker-alt"></i></span>
                            <span>{{ appSettings('address') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-2"></div>
                <div class="col-span-12 sm:col-span-5">
                    <livewire:frontend.contact-form />
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
