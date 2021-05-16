@includeIf('frontend.layouts.partials.topbar-notice', [appSettings('show_topbar_notice') => 'yes'])
<header>
    <div class="container mx-auto flex justify-between items-center space-x-2 py-3 px-2 lg:px-6" x-data="{ show: false }">
        <a class="navbar-brand logo" href="{{ url('/') }}">
            <img class="h-16" src="{{ siteLogoUrl() }}" alt="{{ siteName() }}">
        </a>
        <button class="sm:hidden text-gray-700" type="button" @click="show = !show" x-cloak>
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
        @include('frontend.layouts.partials.mobile-menu')
        <nav x-show="!show" class="hidden sm:flex items-center space-x-2 text-indigo-900 font-medium tracking-wide">
            <a class="py-2 px-3 hover:text-indigo-600" href="{{ url('/') }}">{{ __('Programs') }}</a>
            <a class="py-2 px-3 hover:text-indigo-600" href="{{ getPageUrlBySlug(appSettings('about_us_page_url')) }}">{{ __('About Us') }}</a>
            <a class="py-2 px-3 hover:text-indigo-600" href="{{ url('/') }}">{{ __('Volunteer') }}</a>
            <a class="py-2 px-3 hover:text-indigo-600" href="{{ route('posts.index') }}">{{ __('Blogs') }}</a>
            <a class="py-2 px-3 hover:text-indigo-600" href="{{ route('contact-us.index') }}">{{ __('Contact') }}</a>
            {{-- <a class="py-2 px-3 hover:text-indigo-600" href="{{ url('/') }}">{{ __('Shop') }}</a> --}}
            <a class="py-2 px-3 bg-red-500 hover:bg-opacity-80 text-white rounded-md font-semibold " href="{{ url('/') }}">{{ __('Donate') }}</a>
        </nav>
    </div>
</header>
