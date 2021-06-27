<section class="bg-gray-100 ">
    <div class="container mx-auto py-16 px-4">
        <h1 class="text-3xl sm:text-4xl md:text-5xl text-center text-primary font-semibold tracking-wide mb-8">{{ appSettings('hp_our_programs_section_title') }}</h1>
        <div class="sm:grid grid-cols-3 gap-4 space-y-5 sm:space-y-0">
            @php
            $programKeys = ['hp_our_programs_one_', 'hp_our_programs_two_', 'hp_our_programs_three_']
            @endphp
            @foreach ($programKeys as $key)
            <div class="bg-white py-10 px-6 md:px-8 shadow-sm hover:shadow-xl" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-2xl sm:text-2xl text-primary tracking-wide font-semibold">{{ appSettings($key . 'title') }}</h1>
                <div class="text-gray-600 tracking-wide my-8 leading-7 text-justify line-clamp-8">
                    {!! appSettings($key . 'desc') !!}
                </div>
                <div class="mt-4 text-center">
                    <a class="inline-block py-2 px-5 border-2 border-primary text-primary hover:bg-primary hover:text-white uppercase font-semibold tracking-wide transition-all duration-200 ease-in-out" href="{{ appSettings($key . 'link') }}">Explore</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
