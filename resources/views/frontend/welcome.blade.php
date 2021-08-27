<x-app-layout>
    <x-frontend.partials.primary-image-slider />

    <div class="container mx-auto py-5 px-4">
        <div class="mb-4">
            <h1 class="italic text-3xl md:text-4xl text-center text-primary font-semibold tracking-wide">{{ __('DYF lifting up the rural community') }}</h1>
        </div>

        <div class="aspect-w-16 aspect-h-9 mb-5">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/8_gTdVVqOgA?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="sm:grid grid-cols-2 gap-4 space-y-5 sm:space-y-0">
            <div class="aspect-w-16 aspect-h-9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/zzn8pf9Vz2o?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="aspect-w-16 aspect-h-9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/YQedkYO6knQ?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    {{-- Section removed --}}
    {{-- <section class="container mx-auto py-16 px-4" data-aos="zoom-out-up">
        <h1 class="text-3xl sm:text-3xl md:text-4xl text-center font-bold text-indigo-900 tracking-wide md:px-16">Help make a better world free from all forms of
            exploitation, discrimination, and violence</h1>
        <div class="sm:flex sm:space-x-4 space-x-2-4 my-8 space-y-5 sm:space-y-0">
            <div class="sm:w-4/12">
                <h1 class="text-xl sm:text-3xl font-bold text-indigo-900 tracking-wide">We empower communities in situations of poverty</h1>
                <div class="my-6"></div>
                <div class="flex mb-4">
                    <div class="mr-4">
                        <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="inline-block text-xl text-blue-900 font-bold mb-3">Eliminate extreme poverty</h4>
                        <p class="text-gray-500">
                            We work together to build a future where everybody
                            enjoys equal rights and has enough to eat every day.
                        </p>
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="mr-4">
                        <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="inline-block text-xl text-blue-900 font-bold mb-3">Eliminate extreme poverty</h4>
                        <p class="text-gray-500">
                            We work together to build a future where everybody
                            enjoys equal rights and has enough to eat every day.
                        </p>
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="mr-4">
                        <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="inline-block text-xl text-blue-900 font-bold mb-3">Eliminate extreme poverty</h4>
                        <p class="text-gray-500">
                            We work together to build a future where everybody
                            enjoys equal rights and has enough to eat every day.
                        </p>
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="mr-4">
                        <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="inline-block text-xl text-blue-900 font-bold mb-3">Eliminate extreme poverty</h4>
                        <p class="text-gray-500">
                            We work together to build a future where everybody
                            enjoys equal rights and has enough to eat every day.
                        </p>
                    </div>
                </div>
            </div>
            <div class="sm:w-8/12">
                <div class="h-full relative">
                    <div class="absolute top-0 right-0">
                        <img src="{{ __('https://www.swaytheme.com/static/wp-content/uploads/sites/3/2020/10/ngo1.jpg') }}" alt="{{ __('') }}">
    </div>
    <div class="absolute top-32 right-32">
        <img src="{{ __('https://www.swaytheme.com/static/wp-content/uploads/sites/3/2020/10/ngo2.jpg') }}" alt="{{ __('') }}">
    </div>
    </div>
    </div>
    </div>
    </section> --}}

    @includeIf('frontend.welcome.our-mission', [appSettings('show_our_mission_section') => 'yes'])

    {{-- @include('frontend.welcome.our-progress') --}}

    @include('frontend.welcome.core-values-section')

    @include('frontend.welcome.our-programs')

    {{-- Section removed --}}
    {{-- <section class="max-w-screen-xl mx-auto py-16 px-4">
        <div class="relative aspect-w-16 aspect-h-8">
            <img class="w-full h-full object-cover rounded-3xl" src="https://www.swaytheme.com/static/wp-content/uploads/sites/3/2020/10/ngo-bg2.jpg?id=" alt="{{ __('') }}">
    <div class="absolute h-full w-full pt-16 pb-32 top-0">
        <div class="text-white max-w-screen-md mx-auto text-center">
            <h1 class="text-4xl md:text-5xl my-4 font-semibold tracking-wide">We must act, continue to act, and act together</h1>
            <p class="tracking-wide">
                We have a vision of a just world, a world where people are valued and treated equally,
                a world without poverty. You can make a difference!
            </p>
            <div class="mt-6">
                <a class="inline-block py-3 px-5 border-2 border-secondary bg-secondary text-white font-semibold rounded-full hover:bg-white hover:text-secondary" href="#">Become a Volunteer</a>
            </div>
        </div>
    </div>
    </div>
    <div class="-mt-32 px-10">
        <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6 space-y-5 sm:space-y-0">
            <div class="bg-white border-x border-t border-gray-100 shadow-lg rounded-lg overflow-hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" aos-anchor-placement="bottom-bottom">
                <div class="p-10 text-center border-b-4 border-white hover:border-b-4 hover:border-primary">
                    <div class="text-secondary">
                        <img class="inline-flex w-10 h-10" src="{{ asset('assets/images/mini/ngo-icon1.webp') }}" alt="">
                    </div>
                    <div class="">
                        <h4 class="my-5 text-xl font-semibold text-blue-900 tracking-wide">Environment</h4>
                        <p class="text-gray-500 my-4">We save and protect an lives in times of crisis.</p>
                        <a class="text-secondary hover:text-primary font-medium tracking-wide" href="#" target="_self">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="bg-white border-x border-t border-gray-100 shadow-lg rounded-lg overflow-hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" aos-anchor-placement="bottom-bottom">
                <div class="p-10 text-center border-b-4 border-white hover:border-b-4 hover:border-primary">
                    <div class="text-secondary">
                        <img class="inline-flex w-10 h-10" src="{{ asset('assets/images/mini/ngo-icon2.webp') }}" alt="">
                    </div>
                    <div class="">
                        <h4 class="my-5 text-xl font-semibold text-blue-900 tracking-wide">Nutrition</h4>
                        <p class="text-gray-500 my-4">We save and protect an lives in times of crisis.</p>
                        <a class="text-secondary hover:text-primary font-medium tracking-wide" href="#" target="_self">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="bg-white border-x border-t border-gray-100 shadow-lg rounded-lg overflow-hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" aos-anchor-placement="bottom-bottom">
                <div class="p-10 text-center border-b-4 border-white hover:border-b-4 hover:border-primary">
                    <div class="text-secondary">
                        <img class="inline-flex w-10 h-10" src="{{ asset('assets/images/mini/ngo-icon3.webp') }}" alt="">
                    </div>
                    <div class="">
                        <h4 class="my-5 text-xl font-semibold text-blue-900 tracking-wide">Health</h4>
                        <p class="text-gray-500 my-4">We save and protect an lives in times of crisis.</p>
                        <a class="text-secondary hover:text-primary font-medium tracking-wide" href="#" target="_self">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="bg-white border-x border-t border-gray-100 shadow-lg rounded-lg overflow-hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" aos-anchor-placement="bottom-bottom">
                <div class="p-10 text-center border-b-4 border-white hover:border-b-4 hover:border-primary">
                    <div class="text-secondary">
                        <img class="inline-flex w-10 h-10" src="{{ asset('assets/images/mini/ngo-icon4.webp') }}" alt="">
                    </div>
                    <div class="">
                        <h4 class="my-5 text-xl font-semibold text-blue-900 tracking-wide">Development</h4>
                        <p class="text-gray-500 my-4">We save and protect an lives in times of crisis.</p>
                        <a class="text-secondary hover:text-primary font-medium tracking-wide" href="#" target="_self">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section> --}}


    @include('frontend.welcome.videos')

    @if(appSettings('show_latest_blogs_section') == 'yes')
    <x-latest-blogs-section></x-latest-blogs-section>
    @endif

    {{-- Section Removed --}}
    {{-- <section class="bg-no-repeat bg-cover bg-center sm:bg-left pb-36" style="background-image: url(/assets/images/transport-bg3.webp);">
        <div class="container mx-auto py-16 px-4">
            <div>
                <h2 class="text-lg sm:text-3xl md:text-3xl text-indigo-900 font-bold text-center tracking-wide leading-relaxed mb-16">We work in over 190 countries and territories<br> to save people’s lives and their rights</h2>
                <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6 space-y-5 sm:space-y-0">
                    <div class="bg-white border-x border-t border-gray-100 shadow-lg rounded-lg overflow-hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" aos-anchor-placement="bottom-bottom">
                        <div class="p-10 text-center border-b-4 border-white hover:border-b-4 hover:border-primary">
                            <div class="text-secondary">
                                <svg class="inline-flex w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="">
                                <h4 class="my-5 text-xl font-semibold text-blue-900 tracking-wide">Contact</h4>
                                <p class="text-gray-500 my-4">We'd love to talk about how we can work together.</p>
                                <a class="text-secondary hover:text-primary font-medium tracking-wide" href="#" target="_self">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white border-x border-t border-gray-100 shadow-lg rounded-lg overflow-hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" aos-anchor-placement="bottom-bottom">
                        <div class="p-10 text-center border-b-4 border-white hover:border-b-4 hover:border-primary">
                            <div class="text-secondary">
                                <svg class="inline-flex w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                </svg>
                            </div>
                            <div class="">
                                <h4 class="my-5 text-xl font-semibold text-blue-900 tracking-wide">Location</h4>
                                <p class="text-gray-500 my-4">View a directory of our locations worldwide.</p>
                                <a class="text-secondary hover:text-primary font-medium tracking-wide" href="#" target="_self">View Locations</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white border-x border-t border-gray-100 shadow-lg rounded-lg overflow-hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" aos-anchor-placement="bottom-bottom">
                        <div class="p-10 text-center border-b-4 border-white hover:border-b-4 hover:border-primary">
                            <div class="text-secondary">
                                <svg class="inline-flex w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="">
                                <h4 class="my-5 text-xl font-semibold text-blue-900 tracking-wide">Donations</h4>
                                <p class="text-gray-500 my-4">Get involved in making the dream a reality today.</p>
                                <a class="text-secondary hover:text-primary font-medium tracking-wide" href="#" target="_self">Keep in Touch</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white border-x border-t border-gray-100 shadow-lg rounded-lg overflow-hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" aos-anchor-placement="bottom-bottom">
                        <div class="p-10 text-center border-b-4 border-white hover:border-b-4 hover:border-primary">
                            <div class="text-secondary">
                                <svg class="inline-flex w-16 h-16" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19.25 16V12.25C19.25 8.24594 16.0041 5 12 5V5C7.99594 5 4.75 8.24594 4.75 12.25V16"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.75 15.45C4.75 13.9588 5.95883 12.75 7.45 12.75V12.75C8.44411 12.75 9.25 13.5559 9.25 14.55V17.45C9.25 18.4441 8.44411 19.25 7.45 19.25V19.25C5.95883 19.25 4.75 18.0412 4.75 16.55V15.45Z"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M14.75 14.55C14.75 13.5559 15.5559 12.75 16.55 12.75V12.75C18.0412 12.75 19.25 13.9588 19.25 15.45V16.55C19.25 18.0412 18.0412 19.25 16.55 19.25V19.25C15.5559 19.25 14.75 18.4441 14.75 17.45V14.55Z"></path>
                                </svg>
                            </div>
                            <div class="">
                                <h4 class="my-5 text-xl font-semibold text-blue-900 tracking-wide">Support</h4>
                                <p class="text-gray-500 my-4">We're here to help with any questions or queries.</p>
                                <a class="text-secondary hover:text-primary font-medium tracking-wide" href="#" target="_self">Help & Support</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <x-testimonial-section></x-testimonial-section>
</x-app-layout>
