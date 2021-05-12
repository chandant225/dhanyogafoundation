<div class="py-2 px-3 bg-gradient-to-r from-indigo-600 via-purple-500 to-blue-500 overflow-hidden" data-aos="fade-down">
    <div class="container mx-auto flex items-center justify-center space-x-3">
        <div class="text-sm font-medium text-white">Tony Robbins Global Youth Leadership Summit Virtual 2021 Applications Now Open!</div>
        <span aria-hidden="true" class="hidden sm:block mx-6 h-6 w-px bg-white bg-opacity-20"></span>
        <a class="whitespace-nowrap inline-flex rounded-md bg-white py-2 px-3 text-xs font-semibold uppercase text-blue-500 hover:bg-opacity-90" href="#">Learn More →</a>
    </div>
</div>
<header>
    <div class="container mx-auto flex justify-between items-center space-x-2 py-3 px-2 lg:px-6" x-data="{ show: false }">
        <a class="navbar-brand logo" href="{{ url('/') }}">
            <img class="h-16" src="{{ siteLogoUrl() }}" alt="{{ siteName() }}">
        </a>
        <button class="sm:hidden text-gray-700" type="button" @click="show = !show">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
        @include('frontend.layouts.partials.mobile-menu')
        <nav x-show="!show" class="hidden sm:flex items-center space-x-2 text-indigo-900 font-medium tracking-wide">
            <a class="py-2 px-3 hover:text-indigo-600" href="{{ url('/') }}">{{ __('Programs') }}</a>
            <a class="py-2 px-3 hover:text-indigo-600" href="{{ getPageUrlBySlug(appSettings('about_us_page_url')) }}">{{ __('About Us') }}</a>
            <a class="py-2 px-3 hover:text-indigo-600" href="{{ url('/') }}">{{ __('Volunteer') }}</a>
            {{-- <a class="py-2 px-3 hover:text-indigo-600" href="{{ url('/') }}">{{ __('Shop') }}</a> --}}
            <a class="py-2 px-3 bg-red-500 hover:bg-opacity-80 text-white rounded-md font-semibold " href="{{ url('/') }}">{{ __('Donate') }}</a>
        </nav>
    </div>
</header>
