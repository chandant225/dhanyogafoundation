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
            <div class="inline-block relative" x-data="{ open: false }"  @mouseover.away="open = false">
                <button class="py-2 px-3 hover:text-indigo-600 font-medium tracking-wide focus:outline-none" x-on:mouseover="open = true">
                    <span>About</span>
                    <span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </button>
                <div class="absolute w-40 bg-white shadow rounded py-2 px-3 z-50" x-show="open" x-cloak>
                    <a class="inline-block py-2 px-3 hover:text-indigo-600" href="{{ getPageUrlBySlug(appSettings('about_us_page_url')) }}">{{ __('About Us') }}</a>
                    <a class="inline-block py-2 px-3 hover:text-indigo-600" href="{{ getPageUrlBySlug(appSettings('vision_and_mission_page_url')) }}">{{ __('Vision and mission') }}</a>
                    <a class="inline-block py-2 px-3 hover:text-indigo-600" href="{{ route('static-page.core-values') }}">{{ __('Core Values') }}</a>
                    <a class="inline-block py-2 px-3 hover:text-indigo-600" href="{{ route('our-team.index') }}">{{ __('Our Team') }}</a>
                    <a class="inline-block py-2 px-3 hover:text-indigo-600" href="{{ getPageUrlBySlug(appSettings('about_us_page_url')) }}">{{ __('FAQ') }}</a>
                </div>
            </div>
            <a class="py-2 px-3 hover:text-indigo-600" href="{{ url('/') }}">{{ __('Volunteer') }}</a>
            <a class="py-2 px-3 hover:text-indigo-600" href="{{ route('posts.index') }}">{{ __('Blogs') }}</a>
            <a class="py-2 px-3 hover:text-indigo-600" href="{{ route('contact-us.index') }}">{{ __('Contact') }}</a>
            {{-- <a class="py-2 px-3 hover:text-indigo-600" href="{{ url('/') }}">{{ __('Shop') }}</a> --}}
            <a class="py-2 px-3 bg-red-500 hover:bg-opacity-80 text-white rounded-md font-semibold " href="{{ url('/') }}">{{ __('Donate') }}</a>
        </nav>
    </div>
</header>
