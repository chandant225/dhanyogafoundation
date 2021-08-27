    <div class="primary-image-slider owl-carousel">
        @foreach ($slides as $slide)
        <div class="primary-image-slide">
            <div class="relative">
                <div class="aspect-w-16 aspect-h-9">
                    <img class="h-full w-full object-center" src="{{ $slide->image_url }}" alt="{{ $slide->title }}">
                </div>
                <div class="absolute bottom-0 md:bottom-48 left-0 md:left-5 w-full z-10">
                    <div class="w-full lg:w-1/3 py-6 md:py-16 px-5 bg-primary bg-opacity-90 rounded-lg hover:bg-opacity-100">
                        <div class="text-center">
                            <section class="text-white gray-700">
                                <h1 class="text-xl md:text-3xl mb-2 md:mb-4 font-bold tracking-wide">{{ $slide->title }}</h1>
                                @if($slide->description)
                                <p class="tracking-wide hidden md:block">
                                    {{ $slide->description }}
                                </p>
                                @endif
                                <div class="mt-5">
                                    @if ($slide->action_link)
                                    <a class="inline-block py-2 px-4 md:px-6 border-2 border-white bg-wwhite text-white text-sm uppercase hover:bg-white hover:text-primary tracking-wider font-semibold rounded-full sm:mr-3" href="{{ $slide->action_link }}" @if($slide->open_in_new_tab) target="_blank" @endif>{{ $slide->action_button_text ?? 'Donate' }}</a>
                                    @endif
                                    <a class="inline-block py-2 px-4 md:px-6 border-2 border-secondary bg-secondary text-white text-sm uppercase hover:bg-white hover:text-secondary tracking-wider font-semibold rounded-full" href="{{ route('vacancy.index') }}">VOLUNTEER</a>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                {{-- Waves --}}
                <div class="hidden md:block absolute bottom-0 w-full">
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
        </div>
        @endforeach
    </div>
    @push('scripts')
    <script>
        $(document).ready(function() {
            $(".primary-image-slider").owlCarousel({
                items: 1
                , loop: true
                , autoplay: true
                , dots: false
            });
        });

    </script>
    @endpush

    @push('styles')
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
    @endpush
