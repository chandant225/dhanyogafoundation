<section class="container mx-auto text-center py-16 px-4" data-aos="zoom-out-up">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-indigo-900 tracking-wide">{{ appSettings('our_mission_title', 'Our Mission') }}</h1>
    <div class="text-gray-600 tracking-wide my-8 leading-7">
        {{ appSettings('our_mission_description') }}
    </div>
    <div class="text-center mt-10">
        <a class="py-2 px-5 border-2 border-indigo-600 text-indigo-600 hover:bg-indigo-600 hover:text-white uppercase font-semibold tracking-wide" href="{{ getPageUrlBySlug(appSettings('our_mission_page')) }}">Learn More</a>
    </div>
</section>