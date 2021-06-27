<section class="max-w-screen-xl mx-auto py-10 px-4">
    <h1 class="text-lg sm:text-3xl md:text-3xl text-primary font-bold text-center tracking-wide leading-relaxed mb-16">Get answers to common questions</h1>
    <div class="grid sm:grid-cols-2 gap-6 space-y-5 sm:space-y-0">
        @foreach ($faqs as $faq)
        <div>
            <div class="border border-gray-200 rounded-xl p-4 sm:p-5 md:p-8 transition ease-in-out duration-1000" x-data="{ open: false }">
                <button class="w-full flex focus:outline-none" type="button" role="button" @click="open = !open">
                    <span class="text-primary font-bold hover:text-secondary" x-bind:class="open ? 'text-secondary' : ''">{{ $faq->question }}</span>
                    <span class="ml-auto">
                        <svg class="w-5 h-5 text-gray-500 transform transition ease-linear duration-500" :class="{ 'rotate-180': open }" x-transition:enter="" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </span>
                </button>
                <div class="py-5" x-show="open">
                    {{ $faq->answer }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
