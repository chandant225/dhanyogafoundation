<div class="p-3 bg-white rounded-lg shadow transform duration-500 hover:-translate-y-3 hover:shadow-xl">
    <div class="aspect-w-6 aspect-h-4">
        <img class="rounded-lg object-cover" src="{{ $post->imageUrl() }}" alt="{{ $post->title }}">
    </div>
    <div class="p-4">
        <div class="bg-indigo-50 py-2 px-3 group inline-flex items-center space-x-2 rounded-full hover:bg-primary">
            <span class="inline-block bg-primary w-3 h-3 rounded-full group-hover:bg-white"></span>
            <span class="text-primary font-semibold text-sm group-hover:text-white">{{ $post->category->name }}</span>
        </div>
        <h1 class="text-lg text-gray-700 hover:text-primary font-bold my-4 tracking-wide">
            <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
        </h1>
        <div class="flex items-center space-x-4 text-secondary font-semibold">
            <div>
                <span class="text-secondary mr-1">
                    <svg class="inline w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </span>
                <span>{{ $post->created_at->diffForHumans() }}</span>
            </div>
            <div>
                <span class="text-secondary mr-1">
                    <svg class="inline-flex w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                    </svg>
                </span>
                <span>Admin</span>
            </div>
        </div>
    </div>
</div>