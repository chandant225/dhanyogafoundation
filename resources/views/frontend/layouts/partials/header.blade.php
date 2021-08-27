@includeIf('frontend.layouts.partials.topbar-notice', [appSettings('show_topbar_notice') => 'yes'])
<header>
    <div id="navbar-overlay" class="fixed bg-blue-50 opacity-0 rounded transition-all duration-300"></div>
    <div class="container mx-auto flex justify-between items-center py-3 px-2 lg:px-6" x-data="{ show: false }">
        <a class="navbar-brand logo ml-16 sm:ml-0" href="{{ url('/') }}">
            <img class="h-12 sm:h-16" src="{{ siteLogoUrl() }}" alt="{{ siteName() }}">
        </a>
        <button class="md:hidden text-gray-700" type="button" @click="show = !show" x-cloak>
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
        @include('frontend.layouts.partials.mobile-menu')
        <nav id="desktop-menu" x-show="!show" class="hidden md:flex items-center spacex-x-1 lgspace-x-2 text-indigo-900 font-medium tracking-wide">
            <a class="py-2 px-3 hover:text-primary" href="{{ url('/') }}">{{ __('Home') }}</a>
            <a class="py-2 px-3 hover:text-primary" href="{{ route('posts.index', 'program') }}">{{ __('Programs') }}</a>
            <div class="relative" x-data="{ open: false }" @mouseover.away="open = false">
                <button class="py-2 px-3 hover:text-primary font-medium tracking-wide focus:outline-none" x-on:mouseover="open = true">
                    <span>About</span>
                    <span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </button>
                <div class="absolute w-48 bg-white shadow-lg rounded-md py-2 z-50 transition-all duration-1000" x-show="open" x-cloak>
                    <div class="bg-primary h-1"></div>
                    <a class="block py-2 px-3 hover:text-primary hover:bg-blue-50" href="{{ getPageUrlBySlug(appSettings('about_us_page_url')) }}">{{ __('About Us') }}</a>
                    <a class="block py-2 px-3 hover:text-primary hover:bg-blue-50" href="{{ getPageUrlBySlug(appSettings('vision_and_mission_page_url')) }}">{{ __('Vision and mission') }}</a>
                    <a class="block py-2 px-3 hover:text-primary hover:bg-blue-50" href="{{ route('static-page.core-values') }}">{{ __('Core Values') }}</a>
                    <a class="block py-2 px-3 hover:text-primary hover:bg-blue-50" href="{{ route('our-team.index') }}">{{ __('Our Team') }}</a>
                    <a class="block py-2 px-3 hover:text-primary hover:bg-blue-50" href="{{ route('static-page.faq') }}">{{ __('FAQ') }}</a>
                </div>
            </div>
            <div class="relative" x-data="{ open: false }" @mouseover.away="open = false">
                <button class="py-2 px-3 hover:text-primary font-medium tracking-wide focus:outline-none" x-on:mouseover="open = true">
                    <span>Get Involved</span>
                    <span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </button>
                <div class="absolute w-48 bg-white shadow-lg rounded-md py-2 z-50 transition-all duration-1000" x-show="open" x-cloak>
                    <div class="bg-primary h-1"></div>
                    <a class="block py-2 px-3 hover:text-primary hover:bg-blue-50" href="/get-involved">{{ __('Get Involved') }}</a>
                    <a class="block py-2 px-3 hover:text-primary hover:bg-blue-50" href="{{ route('get-involved.donation') }}">{{ __('Donation') }}</a>
                    <a class="block py-2 px-3 hover:text-primary hover:bg-blue-50" href="/fundraising">{{ __('Fundraising') }}</a>
                    <a class="block py-2 px-3 hover:text-primary hover:bg-blue-50" href="{{ route('vacancy.index') }}">{{ __('Volunteer') }}</a>
                </div>
            </div>
            <a class="py-2 px-3 hover:text-primary" href="{{ route('posts.index', 'blog') }}">{{ __('Blogs') }}</a>
            <a class="py-2 px-3 hover:text-primary" href="{{ route('reports.index') }}">{{ __('Financials/Reports') }}</a>
            <a class="py-2 px-3 hover:text-primary" href="{{ route('contact-us.index') }}">{{ __('Contact') }}</a>
            {{-- <a class="py-2 px-3 hover:text-primary" href="{{ url('/') }}">{{ __('Shop') }}</a> --}}
            <a class="py-2 px-3 bg-primary hover:bg-opacity-80 text-white rounded-md font-semibold " href="{{ appSettings('donate_link') }}" target="_blank">{{ __('Donate') }}</a>
            @auth
            @hasrole('admin')
            <a class="py-2 px-3 bg-secondary hover:bg-opacity-80 text-white rounded-md font-semibold ml-2" href="{{ route('backend.dashboard') }}">{{ __('Dashboard') }}</a>
            @endhasrole
            @endauth
        </nav>
    </div>
</header>
@push('scripts')
<style>
    #navbar-overlay {
        z-index: -1;
    }

    #navbar-overlay.active {
        opacity: 1;
    }

</style>
@endpush
