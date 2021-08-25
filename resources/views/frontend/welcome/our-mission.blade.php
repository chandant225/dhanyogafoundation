<section class="container mx-auto text-center py-16 px-4" data-aos="zoom-out-up">
    <div class="group">
        <h1 class="text-3xl sm:text-4xl md:text-5xl text-center text-primary font-semibold tracking-wide">{{ appSettings('our_mission_title', 'Our Mission') }}</h1>
        <div class="h-1 w-32 bg-primary mx-auto rounded-full mt-5 mb-8 group-hover:w-96 group-hover:bg-secondary transition-all linear duration-300"></div>
    </div>
    <div class="text-gray-600 tracking-wide my-8 leading-7">
        {!! appSettings('our_mission_description') !!}
    </div>
    <div class="text-center mt-10">
        <a class="py-2 px-5 border-2 border-primary text-primary hover:bg-primary hover:text-white uppercase font-semibold tracking-wide" href="{{ getPageUrlBySlug(appSettings('our_mission_page')) }}">Learn More</a>
    </div>
</section>
