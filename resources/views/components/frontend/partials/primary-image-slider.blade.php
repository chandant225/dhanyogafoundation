    <div class="primary-image-slider owl-carousel">
        @foreach ($slides as $slide)
        <div class="primary-image-slide">
            <div class="relative" style="background-image: url({{ $slide->image_url }}); background-size: cover; min-height: 690px;">
                <div class="backdrop-filter backdrop-brightness-90 absolute w-full h-full p-5 flex items-center justify-center">
                    <div class="text-center">
                        <section class="text-white">
                            <h1 class="text-4xl md:text-5xl my-4 font-semibold tracking-wide">{{ $slide->title }}</h1>
                            @if($slide->description)
                            <p class="tracking-wide">
                                {{ $slide->description }}
                            </p>
                            @endif
                            <div class="mt-5" data-aos="fade-up">
                                @if ($slide->action_link)
                                <a class="py-2 px-5 border-2 border-primary bg-primary text-white uppercase hover:bg-white hover:text-primary sm:mr-3" href="{{ $slide->action_link }}" @if($slide->open_in_new_tab) target="_blank" @endif>{{ $slide->action_button_text ?? 'Donate' }}</a>
                                @endif
                                <a class="py-2 px-5 border-2 border-secondary bg-secondary text-white uppercase hover:bg-white hover:text-secondary" href="/programs/volunteer-program/">VOLUNTEER</a>
                            </div>
                        </section>
                    </div>
                </div>
                {{-- Waves --}}
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
