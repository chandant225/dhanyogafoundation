<x-app-layout>
    <x-slot name="siteTitle">
        {{ __('Our Core Values') }} | {{ siteName() }}
    </x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            {{ __('Our Core Values') }}
        </x-slot>
        <x-slot name="breadcrumbs">
            {{ Breadcrumbs::render('page', 'Our Core Values') }}
        </x-slot>
    </x-frontend.partials.page-title>

    <div class="container mx-auto">
        <div class="py-5 px-4">
            <div class="py-10 max-w-screen-sm mx-auto">
                <x-frontend.partials.squeeze-box>
                    <x-slot name="title">
                        <span class="text-xl sm:text-2xl md:text-4xl ">R</span>espect
                    </x-slot>
                    <x-slot name="content">
                        To respect the views, needs, and feelings of the community with whom we work. Encourage expression, suggestions, and opinions of people who work with us.
                    </x-slot>
                </x-frontend.partials.squeeze-box>

                <x-frontend.partials.squeeze-box>
                    <x-slot name="title">
                        <span class="text-xl sm:text-2xl md:text-4xl ">E</span>quiality
                    </x-slot>
                    <x-slot name="content">
                        We work on the principal of equality and fairness. We strive to eliminate discrimination through equal opportunities and facilities for all individuals.
                    </x-slot>
                </x-frontend.partials.squeeze-box>

                <x-frontend.partials.squeeze-box>
                    <x-slot name="title">
                        <span class="text-xl sm:text-2xl md:text-4xl ">S</span>elfless Service
                    </x-slot>
                    <x-slot name="content">
                        Working selflessly for the betterment of the humanity is what we at DYF strive for in each action that we perform.
                    </x-slot>
                </x-frontend.partials.squeeze-box>

                <x-frontend.partials.squeeze-box>
                    <x-slot name="title">
                        <span class="text-xl sm:text-2xl md:text-4xl ">P</span>assion
                    </x-slot>
                    <x-slot name="content">
                        To work with enthusiasm and zeal to bring in positive change in the lives of the people for whom we work.
                    </x-slot>
                </x-frontend.partials.squeeze-box>

                <x-frontend.partials.squeeze-box>
                    <x-slot name="title">
                        <span class="text-xl sm:text-2xl md:text-4xl ">E</span>mpathy
                    </x-slot>
                    <x-slot name="content">
                        To work with empathy, to understand the feelings and mind-set of the people for whom we work.
                    </x-slot>
                </x-frontend.partials.squeeze-box>

                <x-frontend.partials.squeeze-box>
                    <x-slot name="title">
                        <span class="text-xl sm:text-2xl md:text-4xl ">C</span>ompassion & Commitment
                    </x-slot>
                    <x-slot name="content">
                        To work with compassion and commitment to develop trust and reliance of the community where we work.
                    </x-slot>
                </x-frontend.partials.squeeze-box>

                <x-frontend.partials.squeeze-box>
                    <x-slot name="title">
                        <span class="text-xl sm:text-2xl md:text-4xl ">T</span>ransparency
                    </x-slot>
                    <x-slot name="content">
                        To work with consistency and transparency to ensure trustworthiness in what we do.
                    </x-slot>
                </x-frontend.partials.squeeze-box>
            </div>
        </div>
    </div>
</x-app-layout>
