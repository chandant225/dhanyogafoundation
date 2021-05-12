<x-app-layout>
    {{-- <x-frontend.partials.primary-image-slider /> --}}

    {{-- @include('frontend.welcome.badges') --}}

    {{-- @include('frontend.welcome.featured-products') --}}

    {{-- @include('frontend.welcome.just-launched-products') --}}

    {{-- @include('frontend.welcome.about') --}}

    <div class="relative" style="background-image: url({{ asset('assets/images/temp/banner.jpg') }}); background-size: cover; min-height: 690px;">
        <div class="backdrop-filter backdrop-brightness-90 absolute w-full h-full p-5 flex items-center justify-center">
            <div class="text-center">
                <section class="text-white">
                    <h1 class="text-4xl md:text-5xl my-4 font-semibold tracking-wide">The Secret to Living is Giving.</h1>
                    <p class="tracking-wide">
                        “Only those who have learned the power of sincere &amp; selfless contribution<br>
                        experience life’s deepest joy: true fulfillment.”
                    </p>
                    <p>TONY ROBBINS</p>
                    <div class="mt-5" data-aos="fade-up">
                        <a class="py-2 px-5 border-2 border-blue-600 bg-blue-600 text-white hover:bg-white hover:text-blue-600 sm:mr-3" href="/donate/">DONATE</a>
                        <a class="py-2 px-5 border-2 border-red-600 bg-red-600 text-white hover:bg-white hover:text-red-600" href="/programs/volunteer-program/">VOLUNTEER</a>
                    </div>
                </section>
            </div><!-- .site-content-->
        </div>
        <style>
            .separator-waves-parallax>use {
                animation: move-forever 25s cubic-bezier(.55, .5, .45, .5)infinite
            }

            .separator-waves-parallax>use:nth-child(1) {
                animation-delay: -2s;
                animation-duration: 7s
            }

            .separator-waves-parallax>use:nth-child(2) {
                animation-delay: -3s;
                animation-duration: 10s
            }

            .separator-waves-parallax>use:nth-child(3) {
                animation-delay: -4s;
                animation-duration: 13s
            }

            .separator-waves-parallax>use:nth-child(4) {
                animation-delay: -5s;
                animation-duration: 20s
            }

            @keyframes move-forever {
                0% {
                    transform: translate3d(-90px, 0, 0)
                }

                100% {
                    transform: translate3d(85px, 0, 0)
                }
            }

        </style>
        <div class=" absolute bottom-0 w-full">
            <svg class="w-full h-32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                </defs>
                <g class="separator-waves-parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)"></use>
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)"></use>
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)"></use>
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff"></use>
                </g>
            </svg>
        </div>
    </div>


    <section class="container mx-auto py-16 px-4" data-aos="zoom-out-up">
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
    </section>

    <section class="container mx-auto text-center py-16 px-4" data-aos="zoom-out-up">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-indigo-900 tracking-wide">Our Mission</h1>
        <div class="text-gray-600 tracking-wide my-8 leading-7">
            The Tony Robbins Foundation is a nonprofit organization created to empower individuals and organizations to make a significant difference in the quality of life of people often forgotten. We’re dedicated to creating positive changes in the lives of youth, seniors, the hungry, homeless and the imprisoned population, all who need a boost envisioning a happier and deeply satisfying way of life.
        </div>
        <div class="text-center mt-10">
            <a class="py-2 px-5 border-2 border-indigo-600 text-indigo-600 hover:bg-indigo-600 hover:text-white uppercase font-semibold tracking-wide" href="#">Learn More</a>
        </div>
    </section>

    <section class="bg-indigo-500 text-white">
        <div class="container mx-auto text-center py-16 px-4">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-semibold tracking-wide">Our Progress</h1>
            <div class="sm:grid grid-cols-3 gap-4 my-8 max-w-6xl mx-auto space-y-5 sm:space-y-0">
                <div>
                    <h6 class="text-2xl mb-3">International Basket Brigade</h6>
                    <img class="w-auto h-24 mx-auto my-6" src="https://www.thetonyrobbinsfoundation.org/wp-content/uploads/2017/09/icon_basket-e1524250241602.png" alt="" data-aos="zoom-in">
                    <div class="mt-4 text-sm">Millions of people feed</div>
                </div>
                <div>
                    <h6 class="text-2xl mb-3">Global Youth Leadership Summit</h6>
                    <img class="w-auto h-24 mx-auto my-6" src="https://www.thetonyrobbinsfoundation.org/wp-content/uploads/2016/07/globe-e1524250270205.png" alt="" data-aos="zoom-in">
                    <div class="mt-4 text-sm">Thousands Of Youth Participants Around The World</div>
                </div>
                <div>
                    <h6 class="text-2xl mb-3">Inmate Empowerment Program</h6>
                    <img class="w-auto h-24 mx-auto my-6" src="https://www.thetonyrobbinsfoundation.org/wp-content/uploads/2018/04/1.6k-Inmate-Emp-e1524257260288.png" alt="" data-aos="zoom-in">
                    <div class="mt-4 text-sm">Thousands Of Youth Participants Around The World</div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 ">
        <div class="container mx-auto py-16 px-4">
            <h1 class="text-3xl sm:text-4xl md:text-5xl text-center text-indigo-900 font-semibold tracking-wide mb-8">Our Programs</h1>
            <div class="sm:grid grid-cols-3 gap-4 space-y-5 sm:space-y-0">
                <div class="bg-white py-10 px-6 md:px-8 shadow-sm hover:shadow-xl" data-aos="fade-up-right" data-aos-duration="1000">
                    <h1 class="text-2xl sm:text-2xl text-indigo-600 tracking-wide font-semibold">INTERNATIONAL BASKET BRIGADE</h1>
                    <div class="text-gray-600 tracking-wide my-8 leading-7 text-justify">
                        Feeding those in need, the International Basket Brigade is built on a simple notion: One small act of generosity on the part of one caring person can transform the lives of hundreds. Volunteers deliver donated baskets of food and household items to those facing hunger. Millions of baskets have been delivered all over the world.
                    </div>
                    <div class="mt-4 text-center">
                        <a class="inline-block py-2 px-5 border-2 border-indigo-600 text-indigo-600 hover:bg-indigo-600 hover:text-white uppercase font-semibold tracking-wide" href="#">Explore</a>
                    </div>
                </div>
                <div class="bg-white py-10 px-6 md:px-8 shadow-sm hover:shadow-xl" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="text-2xl sm:text-2xl text-indigo-600 tracking-wide font-semibold">INTERNATIONAL BASKET BRIGADE</h1>
                    <div class="text-gray-600 tracking-wide my-8 leading-7 text-justify">
                        Feeding those in need, the International Basket Brigade is built on a simple notion: One small act of generosity on the part of one caring person can transform the lives of hundreds. Volunteers deliver donated baskets of food and household items to those facing hunger. Millions of baskets have been delivered all over the world.
                    </div>
                    <div class="mt-4 text-center">
                        <a class="inline-block py-2 px-5 border-2 border-indigo-600 text-indigo-600 hover:bg-indigo-600 hover:text-white uppercase font-semibold tracking-wide" href="#">Explore</a>
                    </div>
                </div>
                <div class="bg-white py-10 px-6 md:px-8 shadow-sm hover:shadow-xl" data-aos="fade-up-left" data-aos-duration="1000">
                    <h1 class="text-2xl sm:text-2xl text-indigo-600 tracking-wide font-semibold">INTERNATIONAL BASKET BRIGADE</h1>
                    <div class="text-gray-600 tracking-wide my-8 leading-7 text-justify">
                        Feeding those in need, the International Basket Brigade is built on a simple notion: One small act of generosity on the part of one caring person can transform the lives of hundreds. Volunteers deliver donated baskets of food and household items to those facing hunger. Millions of baskets have been delivered all over the world.
                    </div>
                    <div class="mt-4 text-center">
                        <a class="inline-block py-2 px-5 border-2 border-indigo-600 text-indigo-600 hover:bg-indigo-600 hover:text-white uppercase font-semibold tracking-wide" href="#">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl mx-auto py-16 px-4">
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
                        <a class="inline-block py-3 px-5 border-2 border-red-600 bg-red-600 text-white font-semibold rounded-full hover:bg-white hover:text-red-600" href="#">Become a Volunteer</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="-mt-32 px-10">
            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6 space-y-5 sm:space-y-0">
                <div class="bg-white border-x border-t border-gray-100 shadow-lg rounded-lg overflow-hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" aos-anchor-placement="bottom-bottom">
                    <div class="p-10 text-center border-b-4 border-white hover:border-b-4 hover:border-red-500">
                        <div class="text-red-600">
                            <img class="inline-flex w-10 h-10" src="{{ asset('assets/images/mini/ngo-icon1.webp') }}" alt="">
                        </div>
                        <div class="">
                            <h4 class="my-5 text-xl font-semibold text-blue-900 tracking-wide">Environment</h4>
                            <p class="text-gray-500 my-4">We save and protect an lives in times of crisis.</p>
                            <a class="text-red-600 hover:text-blue-900 font-medium tracking-wide" href="#" target="_self">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white border-x border-t border-gray-100 shadow-lg rounded-lg overflow-hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" aos-anchor-placement="bottom-bottom">
                    <div class="p-10 text-center border-b-4 border-white hover:border-b-4 hover:border-red-500">
                        <div class="text-red-600">
                            <img class="inline-flex w-10 h-10" src="{{ asset('assets/images/mini/ngo-icon2.webp') }}" alt="">
                        </div>
                        <div class="">
                            <h4 class="my-5 text-xl font-semibold text-blue-900 tracking-wide">Nutrition</h4>
                            <p class="text-gray-500 my-4">We save and protect an lives in times of crisis.</p>
                            <a class="text-red-600 hover:text-blue-900 font-medium tracking-wide" href="#" target="_self">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white border-x border-t border-gray-100 shadow-lg rounded-lg overflow-hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" aos-anchor-placement="bottom-bottom">
                    <div class="p-10 text-center border-b-4 border-white hover:border-b-4 hover:border-red-500">
                        <div class="text-red-600">
                            <img class="inline-flex w-10 h-10" src="{{ asset('assets/images/mini/ngo-icon3.webp') }}" alt="">
                        </div>
                        <div class="">
                            <h4 class="my-5 text-xl font-semibold text-blue-900 tracking-wide">Health</h4>
                            <p class="text-gray-500 my-4">We save and protect an lives in times of crisis.</p>
                            <a class="text-red-600 hover:text-blue-900 font-medium tracking-wide" href="#" target="_self">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white border-x border-t border-gray-100 shadow-lg rounded-lg overflow-hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" aos-anchor-placement="bottom-bottom">
                    <div class="p-10 text-center border-b-4 border-white hover:border-b-4 hover:border-red-500">
                        <div class="text-red-600">
                            <img class="inline-flex w-10 h-10" src="{{ asset('assets/images/mini/ngo-icon4.webp') }}" alt="">
                        </div>
                        <div class="">
                            <h4 class="my-5 text-xl font-semibold text-blue-900 tracking-wide">Development</h4>
                            <p class="text-gray-500 my-4">We save and protect an lives in times of crisis.</p>
                            <a class="text-red-600 hover:text-blue-900 font-medium tracking-wide" href="#" target="_self">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="max-w-screen-xl mx-auto py-16 px-4">
        <h1 class="text-lg sm:text-3xl md:text-3xl text-indigo-900 font-bold text-center tracking-wide leading-relaxed mb-16">Get answers to common questions</h1>
        <div class="grid sm:grid-cols-2 gap-6 space-y-5 sm:space-y-0">
            @for($i = 1; $i <= 6; $i++) <div>
                <div class="border border-gray-200 rounded-xl p-4 sm:p-5 md:p-8 transition ease-in-out duration-1000" x-data="{ open: false }">
                    <button class="w-full flex focus:outline-none" type="button" role="button" @click="open = !open">
                        <span class="text-indigo-900 font-bold hover:text-red-500">How do I volunteer with Sway?</span>
                        <span class="ml-auto">
                            <svg class="w-5 h-5 text-gray-500 transform transition ease-linear duration-500" :class="{ 'rotate-180': open }" x-transition:enter="" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </span>
                    </button>
                    <div class="py-5" x-show="open">
                        Volunteers play a key role help Sway achieve its mission to reduce poverty and injustice around the world, from office work to helping in shops or stewarding at events and concerts.
                    </div>
                </div>
        </div>
        @endfor
        </div>
    </section>


    <section class="bg-gray-50">
        <div class=" max-w-screen-xl mx-auto py-16 px-4">
            <h2 class="text-lg sm:text-3xl md:text-3xl text-indigo-900 font-bold text-center tracking-wide leading-relaxed mb-16">Latest non-government organizations news and updates, special reports, videos, and more</h2>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6 space-y-5 sm:space-y-0">
                <div class="p-3 bg-white rounded-lg shadow transform duration-500 hover:-translate-y-3 hover:shadow-xl">
                    <div class="aspect-w-6 aspect-h-4">
                        <img class="rounded-lg object-cover" src="{{ asset('assets/images/temp/ngo-news-1-400x250.jpg') }}" alt="">
                    </div>
                    <div class="p-4">
                        <div class="bg-red-50 py-2 px-3 group inline-flex items-center space-x-2 rounded-full hover:bg-red-500">
                            <span class="inline-block bg-red-500 w-3 h-3 rounded-full group-hover:bg-white"></span>
                            <span class="text-red-600 font-semibold text-sm group-hover:text-white">Education</span>
                        </div>
                        <h1 class="text-lg text-indigo-900 font-bold my-4 tracking-wide">
                            <a href="#">NGO calls for concrete steps to protect children learning</a>
                        </h1>
                        <div class="flex items-center space-x-4 text-indigo-900 font-semibold">
                            <div>
                                <span class="text-red-500 mr-1">
                                    <svg class="inline w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </span>
                                <span>Mar 12, 2021</span>
                            </div>
                            <div>
                                <span class="text-red-500 mr-1">
                                    <svg class="inline-flex w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                    </svg>
                                </span>
                                <span>Admin</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3 bg-white rounded-lg shadow transform duration-500 hover:-translate-y-3 hover:shadow-xl">
                    <div class="aspect-w-6 aspect-h-4">
                        <img class="rounded-lg object-cover" src="{{ asset('assets/images/temp/ngo-news-2-400x250.jpg') }}" alt="">
                    </div>
                    <div class="p-4">
                        <div class="bg-red-50 py-2 px-3 group inline-flex items-center space-x-2 rounded-full hover:bg-red-500">
                            <span class="inline-block bg-red-500 w-3 h-3 rounded-full group-hover:bg-white"></span>
                            <span class="text-red-600 font-semibold text-sm group-hover:text-white">Education</span>
                        </div>
                        <h1 class="text-lg text-indigo-900 font-bold my-4 tracking-wide">
                            <a href="#">NGO calls for concrete steps to protect children learning</a>
                        </h1>
                        <div class="flex items-center space-x-4 text-indigo-900 font-semibold">
                            <div>
                                <span class="text-red-500 mr-1">
                                    <svg class="inline w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </span>
                                <span>Mar 12, 2021</span>
                            </div>
                            <div>
                                <span class="text-red-500 mr-1">
                                    <svg class="inline-flex w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                    </svg>
                                </span>
                                <span>Admin</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3 bg-white rounded-lg shadow transform duration-500 hover:-translate-y-3 hover:shadow-xl">
                    <div class="aspect-w-6 aspect-h-4">
                        <img class="rounded-lg object-cover" src="{{ asset('assets/images/temp/ngo-news-3-400x250.jpg') }}" alt="">
                    </div>
                    <div class="p-4">
                        <div class="bg-red-50 py-2 px-3 group inline-flex items-center space-x-2 rounded-full hover:bg-red-500">
                            <span class="inline-block bg-red-500 w-3 h-3 rounded-full group-hover:bg-white"></span>
                            <span class="text-red-600 font-semibold text-sm group-hover:text-white">Education</span>
                        </div>
                        <h1 class="text-lg text-indigo-900 font-bold my-4 tracking-wide">
                            <a href="#">NGO calls for concrete steps to protect children learning</a>
                        </h1>
                        <div class="flex items-center space-x-4 text-indigo-900 font-semibold">
                            <div>
                                <span class="text-red-500 mr-1">
                                    <svg class="inline w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </span>
                                <span>Mar 12, 2021</span>
                            </div>
                            <div>
                                <span class="text-red-500 mr-1">
                                    <svg class="inline-flex w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                    </svg>
                                </span>
                                <span>Admin</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-no-repeat bg-cover bg-center sm:bg-left pb-64" style="background-image: url(/assets/images/transport-bg3.webp);">
        <div class="container mx-auto py-16 px-4">
            <div>
                <h2 class="text-lg sm:text-3xl md:text-3xl text-indigo-900 font-bold text-center tracking-wide leading-relaxed mb-16">We work in over 190 countries and territories<br> to save people’s lives and their rights</h2>
                <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6 space-y-5 sm:space-y-0">
                    <div class="bg-white border-x border-t border-gray-100 shadow-lg rounded-lg overflow-hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" aos-anchor-placement="bottom-bottom">
                        <div class="p-10 text-center border-b-4 border-white hover:border-b-4 hover:border-red-500">
                            <div class="text-red-600">
                                <svg class="inline-flex w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="">
                                <h4 class="my-5 text-xl font-semibold text-blue-900 tracking-wide">Contact</h4>
                                <p class="text-gray-500 my-4">We'd love to talk about how we can work together.</p>
                                <a class="text-red-600 hover:text-blue-900 font-medium tracking-wide" href="#" target="_self">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white border-x border-t border-gray-100 shadow-lg rounded-lg overflow-hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" aos-anchor-placement="bottom-bottom">
                        <div class="p-10 text-center border-b-4 border-white hover:border-b-4 hover:border-red-500">
                            <div class="text-red-600">
                                <svg class="inline-flex w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                </svg>
                            </div>
                            <div class="">
                                <h4 class="my-5 text-xl font-semibold text-blue-900 tracking-wide">Location</h4>
                                <p class="text-gray-500 my-4">View a directory of our locations worldwide.</p>
                                <a class="text-red-600 hover:text-blue-900 font-medium tracking-wide" href="#" target="_self">View Locations</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white border-x border-t border-gray-100 shadow-lg rounded-lg overflow-hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" aos-anchor-placement="bottom-bottom">
                        <div class="p-10 text-center border-b-4 border-white hover:border-b-4 hover:border-red-500">
                            <div class="text-red-600">
                                <svg class="inline-flex w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="">
                                <h4 class="my-5 text-xl font-semibold text-blue-900 tracking-wide">Donations</h4>
                                <p class="text-gray-500 my-4">Get involved in making the dream a reality today.</p>
                                <a class="text-red-600 hover:text-blue-900 font-medium tracking-wide" href="#" target="_self">Keep in Touch</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white border-x border-t border-gray-100 shadow-lg rounded-lg overflow-hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" aos-anchor-placement="bottom-bottom">
                        <div class="p-10 text-center border-b-4 border-white hover:border-b-4 hover:border-red-500">
                            <div class="text-red-600">
                                <svg class="inline-flex w-16 h-16" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19.25 16V12.25C19.25 8.24594 16.0041 5 12 5V5C7.99594 5 4.75 8.24594 4.75 12.25V16"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.75 15.45C4.75 13.9588 5.95883 12.75 7.45 12.75V12.75C8.44411 12.75 9.25 13.5559 9.25 14.55V17.45C9.25 18.4441 8.44411 19.25 7.45 19.25V19.25C5.95883 19.25 4.75 18.0412 4.75 16.55V15.45Z"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M14.75 14.55C14.75 13.5559 15.5559 12.75 16.55 12.75V12.75C18.0412 12.75 19.25 13.9588 19.25 15.45V16.55C19.25 18.0412 18.0412 19.25 16.55 19.25V19.25C15.5559 19.25 14.75 18.4441 14.75 17.45V14.55Z"></path>
                                </svg>
                            </div>
                            <div class="">
                                <h4 class="my-5 text-xl font-semibold text-blue-900 tracking-wide">Support</h4>
                                <p class="text-gray-500 my-4">We're here to help with any questions or queries.</p>
                                <a class="text-red-600 hover:text-blue-900 font-medium tracking-wide" href="#" target="_self">Help & Support</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
