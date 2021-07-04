<x-app-layout>
    <x-slot name="siteTitle">
        {{ __('Get Involved') }} | {{ siteName() }}
    </x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            {{ __('Get Involved') }}
        </x-slot>
    </x-frontend.partials.page-title>

    <div class="container mx-auto">
        <div class="py-5 px-4">
            <div class="group mt-8 mb-16">
                <h1 class="text-xl text-gray-700 font-semibold leading-8 font-mono mb-3">The secret of happiness lies in serving others, come SUPPORT DYF in the way you want to!</h1>
                <div class="w-32 h-1 bg-primary rounded group-hover:w-64 transition-all duration-300"></div>
            </div>
            {{-- Donation --}}
            <div class="grid sm:grid-cols-2 gap-8 my-12 sm:my-16">
                <div class="order-1">
                    <div class="aspect-w-16 aspect-h-9">
                        <img class="rounded-tl-3xl rounded-br-3xl" src="https://dhanayogafoundation.org/wp-content/uploads/2019/08/about.jpg" alt="Dhanayoga Donation">
                    </div>
                </div>
                <div class="order-2">
                    <h1 class="text-2xl font-semibold text-primary uppercase tracking-wide font-serif mb-4">Donation</h1>
                    <div class="prose">
                        <p>Your every single money can have a lasting impact on the lives of these underserved people of the world.</p>
                        <p>Indeed they are leading a hard-pressed life and with small contribution, their lives can change, by whatever way you feel comfortable either by wire transfer, online transfer, checks, vehicle donation you’re any and every type of contribution means the world to these people.</p>
                        <p class="font-semibold">Come be a part of the change and for more donation details you can visit the page</p>
                    </div>
                    <x-primary-button-link href="#" class="inline-block mt-5">Read More</x-primary-button-link>
                </div>
            </div>

            {{-- Fundraising --}}
            <div class="grid sm:grid-cols-2 gap-8 my-12 sm:my-16">
                <div class="order-2">
                    <div class="aspect-w-16 aspect-h-9">
                        <img class="rounded-tl-3xl rounded-br-3xl" src="https://dhanayogafoundation.org/wp-content/uploads/2019/08/fundraising.jpg" alt="Dhanayoga Fundraising">
                    </div>
                </div>
                <div class="order-1">
                    <h1 class="text-2xl font-semibold text-primary uppercase tracking-wide font-serif mb-4">Fundraising</h1>
                    <div class="prose">
                        <p>It is not being wealthy that matters! What truly matters is the ability to have that caring heart which is determined to help.</p>
                        <p>Yes, under fundraising you can help us in spreading about DYF through your social media and other networks, by which it reaches to a larger population and which have a higher potential of raising funds for the needy people of the world.</p>
                        <p class="font-semibold">Yes, it’s that simple; all you got to do is share as much as you can to spread about our cause. For more details, you can visit the page.</p>
                    </div>
                    <x-primary-button-link href="/fundraising" class="inline-block mt-5">Read More</x-primary-button-link>
                </div>
            </div>

            {{-- Volunteer --}}
            <div class="grid sm:grid-cols-2 gap-8 my-12 sm:my-16">
                <div class="order-1">
                    <div class="aspect-w-16 aspect-h-9">
                        <img class="rounded-tl-3xl rounded-br-3xl" src="https://dhanayogafoundation.org/wp-content/uploads/2019/08/volunteer.png" alt="Dhanayoga Volunteer">
                    </div>
                </div>
                <div class="order-2">
                    <h1 class="text-2xl font-semibold text-primary uppercase tracking-wide font-serif mb-4">VOLUNTEER</h1>
                    <div class="prose">
                        <p>It is not how much bank balance you have in your account that matters at the end, it is the good karma(action) that you have added over your life which counts and will add at the end. And serving the needy is the best service to humanity.</p>
                        <p>It will be our pleasure to have you as our volunteer with whom we can have the helping hand while spreading smiles!</p>
                        <p class="font-semibold">Please connect with us to know more about our volunteering requirements and activities which you are interested in! Click to know more details.</p>
                    </div>
                    <x-primary-button-link href="{{ route('vacancy.index') }}" class="inline-block mt-5">Read More</x-primary-button-link>
                </div>
            </div>

            {{-- Shop --}}
            <div class="grid sm:grid-cols-2 gap-8 my-12 sm:my-16">
                <div class="order-2">
                    <div class="aspect-w-16 aspect-h-9">
                        <img class="rounded-tl-3xl rounded-br-3xl" src="https://dhanayogafoundation.org/wp-content/uploads/2019/08/Small-shopping-bags.jpg" alt="Dhanayoga Shopping">
                    </div>
                </div>
                <div class="order-1">
                    <h1 class="text-2xl font-semibold text-primary uppercase tracking-wide font-serif mb-4">Shop</h1>
                    <div class="prose">
                        <p>You will invariably have to buy products for your daily needs, if you buy these products whose sales are going to benefit the destitute children then this will add to your blessings as well.</p>
                        <p>Be the change maker yourself by just contributing a small generous amount by purchasing goods from DYF.</p>
                        <p class="font-semibold">Let’s be human first by our small and simple efforts which will go in long-run in making this world a peaceful and great place to live!</p>
                    </div>
                    <x-primary-button-link href="#" class="inline-block mt-5">Read More</x-primary-button-link>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
