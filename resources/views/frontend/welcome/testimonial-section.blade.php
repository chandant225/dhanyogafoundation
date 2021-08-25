 {{-- Testimonials --}}
 @if(count($testimonials))
 <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital@1&display=swap" rel="stylesheet">
 <style>
     .font-zilla-slab {
         font-family: 'Zilla Slab', serif;
     }

     .grid-indigo {
         background-image: radial-gradient(#0eb0c2 2px, transparent 2px);
         background-size: 16px 16px;
     }

 </style>
 <section class="antialiased sans-serif text-gray-600 pb-16 px-4">
     <div class="my-10 md:my-24 container mx-auto flex flex-col md:flex-row shadow-sm overflow-hidden" x-data="{ testimonialActive: {{ $totalCount }} }" x-cloak>
         <div class="relative w-full py-2 md:py-24 bg-primary md:w-1/2 flex flex-col item-center justify-center">

             <div class="absolute top-0 left-0 z-10 grid-indigo w-16 h-16 md:w-40 md:h-40 md:ml-20 md:mt-24"></div>

             <div class="relative text-2xl md:text-5xl py-2 px-6 md:py-6 md:px-1 md:w-64 md:mx-auto text-indigo-100 font-semibold leading-tight tracking-tight mb-0 z-20">
                 <span class="md:block">What</span>
                 <span class="md-block">People</span>
                 <span class="block">Are Saying!</span>
             </div>

             <div class="absolute right-0 bottom-0 mr-4 mb-4 hidden md:block">
                 <button class="rounded-l-full border-r bg-gray-100 text-gray-500 focus:outline-none hover:text-indigo-500 font-bold w-12 h-10" x-on:click="testimonialActive = testimonialActive === 1 ? {{ $totalCount }} : testimonialActive - 1">&#8592;</button>
                 <button class="rounded-r-full bg-gray-100 text-gray-500 focus:outline-none hover:text-indigo-500 font-bold w-12 h-10" x-on:click="testimonialActive = testimonialActive >= {{ $totalCount }} ? 1 : testimonialActive + 1">&#8594;</button>
             </div>
         </div>

         <div class="bg-gray-100 md:w-1/2">
             <div class="flex flex-col h-full relative">

                 <div class="absolute top-0 left-0 mt-3 md:mt-5">
                     <svg class="text-primary opacity-50 fill-current w-10 h-10 md:w-16 md:h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                         <path d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L9.758 4.03c0 0-.218.052-.597.144C8.97 4.222 8.737 4.278 8.472 4.345c-.271.05-.56.187-.882.312C7.272 4.799 6.904 4.895 6.562 5.123c-.344.218-.741.4-1.091.692C5.132 6.116 4.723 6.377 4.421 6.76c-.33.358-.656.734-.909 1.162C3.219 8.33 3.02 8.778 2.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C2.535 17.474 4.338 19 6.5 19c2.485 0 4.5-2.015 4.5-4.5S8.985 10 6.5 10zM17.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L20.758 4.03c0 0-.218.052-.597.144-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.944-.33.358-.656.734-.909 1.162C14.219 8.33 14.02 8.778 13.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C13.535 17.474 15.338 19 17.5 19c2.485 0 4.5-2.015 4.5-4.5S19.985 10 17.5 10z" />
                     </svg>
                 </div>

                 <div class="h-full relative z-10">
                     @foreach ($testimonials as $testimonial)
                     <div x-show.immediate="testimonialActive === {{ $loop->iteration }}">
                         <p class="text-gray-600 font-zilla-slab font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == {{ $loop->iteration }}">
                             {{ $testimonial->content }}
                         </p>
                     </div>
                     @endforeach
                 </div>

                 <div class="flex my-4 justify-center items-center">
                     @foreach ($testimonials as $testimonial)
                     <img x-show="testimonialActive == {{ $loop->iteration }}" class="h-12 w-12 rounded-full" src="{{ $testimonial->clientPhotoUrl() }}" alt="{{ $testimonial->client_name }}">
                     @endforeach
                 </div>

                 <div class="flex justify-center px-6 pt-2 pb-6 md:py-6">
                     @foreach ($testimonials as $testimonial)
                     <div class="text-center" x-show="testimonialActive == {{ $loop->iteration }}">
                         <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">{{ $testimonial->client_name }}</h2>
                         <small class="text-gray-500 text-xs md:text-sm truncate">{{ $testimonial->client_title }}</small>
                     </div>
                     @endforeach
                 </div>
             </div>
         </div>
     </div>
 </section>
 @endif
