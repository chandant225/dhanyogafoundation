<x-app-layout>
    <x-slot name="siteTitle">
        Volunteer | {{ siteName() }}
    </x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            Volunteer
        </x-slot>
        <x-slot name="breadcrumbs">
            <div class="flex justify-center">
                {{ Breadcrumbs::render('posts') }}
            </div>
        </x-slot>
    </x-frontend.partials.page-title>

    <div class="container mx-auto py-4 px-4">
        @if(Session::has('success'))
        <div class="bg-blue-50 border-t border-b border-secondary-light text-secondary px-4 py-3 mb-5" role="alert">
            <p class="font-semibold text-lg text-secondary">Application Sent</p>
            <p class="text-sm">Your application has been sent. We will get back to you shortly.</p>
        </div>
        @endif
        <h1 class="text-xl md:text-2xl font-semibold tracking-wide mb-3">
            {{ $vacancy->title }}
        </h1>

        <div class="text-sm font-semibold tracking-wider text-primary">Posted {{ $vacancy->created_at->diffForHumans() }}</div>

        <div class="my-3 prose-sm prose-primary">
            {!! $vacancy->description !!}
        </div>

        <div id="application-form" class="max-w-screen-md bg-gray-50 p-4 border border-gray-200 rounded-sm mt-8">
            <h3 class="text-xl font-semibold tracking-wide">Apply for this job</h3>
            <form action="{{ route('vacancy.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="vacancy_id" value="{{ $vacancy->id }}">
                <p class="my-5">
                    <label class="block mb-2 text-black font-semibold">Applicant's Name</label>
                    <input type="text" name="applicant_name" class="block w-full border border-gray-200 py-2 px-4 rounded" required>
                </p>
                <p class="my-5">
                    <label class="block mb-2 text-black font-semibold">Applicant's Email</label>
                    <input type="email" name="applicant_email" class="block w-full border border-gray-200 py-2 px-4 rounded" required>
                </p>
                @if($vacancy->questions)
                @foreach ($vacancy->questions as $question)
                <p class="my-5">
                    <input type="hidden" name="questions[{{$loop->iteration}}][question]" value="{{ $question->question }}">
                    <label class="block mb-2 text-black font-semibold">{{ $question->question }}</label>
                    @if($question->answer_type == 'short_answer')
                    <input type="text" name="questions[{{$loop->iteration}}][answer]" class="block w-full border border-gray-200 py-2 px-4 rounded">
                    @endif
                    @if($question->answer_type == 'paragraph')
                    <textarea name="questions[{{$loop->iteration}}][answer]" class="texteditor block w-full border border-gray-200 py-2 px-4 rounded" rows="5"></textarea>
                    @endif
                </p>
                @endforeach
                @endif
                <p class="my-5">
                    <div class="block text-black font-semibold mb-2">Cover Letter</div>
                    <div class="text-xs text-gray-600 mb-3 leading-4">Introduce yourself and explain why you’re a strong candidate for this job. Feel free to suggest any changes to the job details or ask to schedule a video call.</div>
                    <textarea name="cover_letter" class="texteditor block w-full border border-gray-200 py-2 px-4 rounded" rows="5"></textarea>
                </p>
                <p class="my-5">
                    <div class="block text-black font-semibold mb-2">CV/Resume</div>
                    <input type="file" name="resume">
                </p>
                <p class="mt-4">
                    <button type="submit" class="py-2 px-4 bg-secondary text-gray-50 hover:bg-primary rounded-sm transition duration-200">Send Application</button>
                </p>
            </form>
        </div>

    </div>
    </div>
    @push('scripts')
    <style>
        .note-editing-area {
            background-color: #fff;
        }

    </style>
    <link href="{{ asset('assets/summernote/summernote-lite.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/summernote/summernote-lite.min.js') }}"></script>
    <script>
        $(function() {
            $('.texteditor').summernote({
                placeholder: 'Start writing here...'
                , tabsize: 2
                , height: 400
                , toolbar: [
                    ['style', ['style']]
                    , ['font', ['bold', 'underline', 'clear']]
                    , ['color', ['color']]
                    , ['para', ['ul', 'ol', 'paragraph']]
                    , ['table', ['table']]
                    , ['insert', ['link', 'picture']]
                    , ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });

    </script>
    @endpush
</x-app-layout>
