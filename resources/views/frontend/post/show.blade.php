<x-app-layout>
    <x-slot name="siteTitle">{{ $siteTitle }}</x-slot>

    <div class="container mx-auto py-16 px-4">
        <div class="grid grid-cols-1 sm:grid-cols-12 sm:gap-4 md:gap-5">
            <div class="sm:col-span-7 md:col-span-8">
                <div>
                    {{ Breadcrumbs::render('post', $post) }}
                </div>
                <h1 class="text-2xl sm:text-3xl md:text-4xl text-primary font-bold tracking-wide my-6">{{ $post->title }}</h1>
                <section class="flex items-center space-x-3 sm:space-x-4 text-primary font-semibold my-2">
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
                    @hasrole('admin')
                    <a class="bg-indigo-500 py-1 px-3 text-gray-50 rounded hover:bg-opacity-90" href="{{ route('backend.posts.edit', $post) }}">
                        <span class="mr-1">
                            <svg class="inline-flex w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                        </span>
                        <span>Edit</span>
                    </a>
                    @endhasrole
                </section>

                <article id="post-{{ $post->slug }}" class="lg:prose-lg xl:prose-xl prose-indigo w-screen sm:w-auto overflow-x-auto sm:overflow-visible">
                    {!! $post->content !!}
                </article>

                <div class="py-4 flex">
                    <div>
                        <div class="flex space-y-2 space-x-2 flex-wrap items-center">
                            @foreach ($post->tags as $tag)
                            <a class="bg-indigo-50 py-2 px-3 group inline-flex items-center space-x-2 rounded-full hover:bg-primary" href="{{ route('posts.index', ['tag' => $tag->name]) }}">
                                <span class="inline-block bg-primary w-3 h-3 rounded-full group-hover:bg-white"></span>
                                <span class="text-primary font-semibold text-sm group-hover:text-white">{{ ucfirst($tag->name) }}</span>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    {{-- <div class="flex-shrink-0 sm:pl-3">
                        Social Share
                    </div> --}}
                </div>

            </div>
            <div class="sm:col-span-7 md:col-span-4">
                <div class="border rounded-xl p-4 sticky top-10">
                    <h3 class="text-xl sm:text-2xl text-primary font-bold tracking-wide mb-4">{{ __('Recent Posts') }}</h3>
                    <div>
                        @foreach ($latestPosts as $post)
                        <div class="sm:flex mb-4">
                            <div class="sm:w-32 flex-shrink-0">
                                <div class="aspect-w-8 aspect-h-6">
                                    <img class="rounded-lg object-cover" src="{{ $post->imageUrl() }}" alt="{{ $post->title }}">
                                </div>
                            </div>
                            <div class="py-2 mt-3 sm:mt-0 sm:ml-2 md:ml-4">
                                <h4 class="text-gray-500 font-medium leading-tight">
                                    <a class="hover:underline hover:text-primary" href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                                </h4>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    @if(isset($tags) && count($tags))
                    <div>
                        <h3 class="text-xl sm:text-2xl text-primary font-bold tracking-wide mb-4">{{ __('Tags') }}</h3>
                        @foreach ($tags as $tag)
                        <a class="bg-indigo-50 py-2 px-3 group inline-flex items-center space-x-2 rounded-full hover:bg-primary mr-2 mb-3" href="{{ route('posts.index', ['tag' => $tag->name]) }}">
                            <span class="inline-block bg-primary w-3 h-3 rounded-full group-hover:bg-white"></span>
                            <span class="text-primary font-semibold text-sm group-hover:text-white">{{ ucfirst($tag->name) }}</span>
                        </a>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
