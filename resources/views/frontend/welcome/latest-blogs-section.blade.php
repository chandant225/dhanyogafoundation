<section class="bggray-50">
    <div class=" max-w-screen-xl mx-auto py-16 px-4">
        <h2 class="text-lg sm:text-3xl md:text-3xl text-indigo-900 font-bold text-center tracking-wide leading-relaxed mb-16">{{ appSettings('latest_blogs_section_title') }}</h2>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6 space-y-5 sm:space-y-0">
            @foreach ($posts as $post)
            <x-frontend.post.post-card :post="$post" />
            @endforeach
        </div>
        <div class="mt-6 text-center">
            <a class="inline-block py-2 px-5 border-2 border-primary text-primary hover:bg-primary hover:text-white uppercase font-semibold tracking-wide" href="{{ route('posts.index') }}">View More</a>
        </div>
    </div>
</section>
