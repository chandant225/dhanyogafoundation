<aside x-show="show" class="fixed w-screen h-screen top-0 left-0 r-0 bg-gray-800 bg-opacity-40 text-gray-700 z-50 animate__animated animate__faster" x-transition:enter="animate__slideInLeft" x-transition:leave="animate__slideOutLeft" x-cloak>
    <div class="h-screen w-64 bg-white flex flex-col" x-on:click.away="show = false">
        <div class="flex p-3">
            <a class="navbar-brand logo" href="{{ url('/') }}">
                <img class="h-8 sm:h-10" src="{{ siteLogoUrl() }}" alt="{{ siteName() }}">
            </a>
            <div class="ml-auto">
                <button type="button" class="p-2 bg-gray-50 hover:bg-gray-100 rounded-full focus:outline-none" @click="show = false">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div class="flex-grow px-3 space-y-1 overflow-y-auto">
            @hasrole('admin')
            <a class="block py-2 px-4 text-sm font-semibold text-gray-500 hover:bg-blue-50 hover:text-blue-600 rounded" href="{{ route('backend.dashboard') }}">Dashboard</a>
            @endhasrole
            <a class="block py-2 px-4 text-sm font-semibold text-gray-500 hover:bg-blue-50 hover:text-blue-600 rounded" href="{{ url('/') }}">Home</a>
            <a class="block py-2 px-4 text-sm font-semibold text-gray-500 hover:bg-blue-50 hover:text-blue-600 rounded" href="{{ route('posts.index', 'program') }}">Programs</a>
            <x-frontend.partials.sidebar-nav-dropdown>
                <x-slot name="label">About</x-slot>
                <x-slot name="items">
                    <a class="block py-2 px-4 text-sm font-semibold text-gray-500 hover:bg-blue-50 hover:text-blue-600 rounded" href="{{ getPageUrlBySlug(appSettings('about_us_page_url')) }}">About</a>
                    <a class="block py-2 px-4 text-sm font-semibold text-gray-500 hover:bg-blue-50 hover:text-blue-600 rounded" href="{{ getPageUrlBySlug(appSettings('vision_and_mission_page_url')) }}">Vision and Mission</a>
                    <a class="block py-2 px-4 text-sm font-semibold text-gray-500 hover:bg-blue-50 hover:text-blue-600 rounded" href="{{ route('static-page.core-values') }}">Core Values</a>
                    <a class="block py-2 px-4 text-sm font-semibold text-gray-500 hover:bg-blue-50 hover:text-blue-600 rounded" href="{{ route('our-team.index') }}">Our Team</a>
                    <a class="block py-2 px-4 text-sm font-semibold text-gray-500 hover:bg-blue-50 hover:text-blue-600 rounded" href="{{ route('static-page.faq') }}">FAQ</a>
                </x-slot>
            </x-frontend.partials.sidebar-nav-dropdown>
            <x-frontend.partials.sidebar-nav-dropdown>
                <x-slot name="label">Get Involved</x-slot>
                <x-slot name="items">
                    <a class="block py-2 px-4 text-sm font-semibold text-gray-500 hover:bg-blue-50 hover:text-blue-600 rounded" href="/get-involved">Get Involved</a>
                    <a class="block py-2 px-4 text-sm font-semibold text-gray-500 hover:bg-blue-50 hover:text-blue-600 rounded" href="{{ route('get-involved.donation') }}">Donation</a>
                    <a class="block py-2 px-4 text-sm font-semibold text-gray-500 hover:bg-blue-50 hover:text-blue-600 rounded" href="/fundraising">Fundraising</a>
                    <a class="block py-2 px-4 text-sm font-semibold text-gray-500 hover:bg-blue-50 hover:text-blue-600 rounded" href="{{ route('vacancy.index') }}">Volunteer</a>
                </x-slot>
            </x-frontend.partials.sidebar-nav-dropdown>
            <a class="block py-2 px-4 text-sm font-semibold text-gray-500 hover:bg-blue-50 hover:text-blue-600 rounded" href="{{ route('posts.index', 'blog') }}">Blogs</a>
            <a class="block py-2 px-4 text-sm font-semibold text-gray-500 hover:bg-blue-50 hover:text-blue-600 rounded" href="{{ route('reports.index') }}">Financials/Reports</a>
            <a class="block py-2 px-4 text-sm font-semibold text-gray-500 hover:bg-blue-50 hover:text-blue-600 rounded" href="{{ route('contact-us.index') }}">Contact</a>
        </div>

        <div class="mt-4 p-3 text-center text-xs space-y-2">
            <a class="block px-4 p-3 text-sm font-semibold bg-primary text-gray-50 hover:bg-opacity-90  rounded text-center" href="{{ appSettings('donate_link') }}">Donate</a>
            <a class="block" href="tel:{{ appSettings('mobile') }}">
                <span>
                    <svg class="inline-flex w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 3l-6 6m0 0V4m0 5h5M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z"></path>
                    </svg>
                </span>
                {{ appSettings('mobile') }}</a>
            <a class="block" href="mailto:{{ appSettings('email') }}"> <svg class="inline-flex w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>{{ appSettings('email') }}</a>
        </div>
    </div>
</aside>
