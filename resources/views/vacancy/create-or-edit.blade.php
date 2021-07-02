@extends('layouts.backend')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Vacancy</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('backend.vacancy.index') }}">Vacancy</a></li>
                    <li class="breadcrumb-item active">New</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section>
    <div class="container-fluid px-4">
        @include('alerts.all')
        {{-- <div id="errors-wrapper" class="alert alert-danger"></div> --}}
        <form id="form" action="{{ route('backend.vacancy.store') }}" method="POST" class="form needs-validation" novalidate>
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="">Job Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $vacancy->title) }}" required autofocus>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please provide a job title.</div>
                    </div>

                    <div class="form-group">
                        <label for="">Job Description</label>
                        <textarea name="description" id="description" class="form-control {{ invalid_class('description') }}" cols="30" rows="10">{{ old('description', $vacancy->description) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Deadline</label>
                        <input type="date" name="deadline_date" class="form-control" value="{{ old('deadline', $vacancy->deadline) }}" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please provide a job deadline.</div>
                    </div>

                    <div class="form-group">
                        <label for="">Apply Link</label>
                        <input type="text" name="apply_link" class="form-control" value="{{ old('apply_link', $vacancy->apply_link) }}">
                        <small class="form-text">If the application has to be filled using another service</small>
                    </div>

                    <div class="form-group">
                        <div id="question-form-wrapper"></div>
                        <div class="form-group mt-3">
                            <button id="add-question-form-btn" class="btn btn-info btn-sm" type="button"><span class="mr-2"><i class="fa fa-plus"></i></span>Add Question</button>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="bg-white p-4 rounded">
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" name="show_cover_letter" class="form-check-input" id="show-cover-letter-checkbox" value="1">
                                <label class="form-check-label" for="show-cover-letter-checkbox">Show Cover Letter Section</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button id="submit-btn" type="submit" class="btn btn-primary px-5">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection


@push('scripts')
<style>
    .alert:empty {
        display: none;
    }

</style>
<script>
    $(function() {
        $('#description').summernote({
            placeholder: 'Description goes here...'
            , tabsize: 2
            , height: 400
        });
    });

    var questionFormTemplate = document.getElementById('question-form-template');
    let i = 1;
    document.getElementById('add-question-form-btn').onclick = function() {
        var template = `<label>Question ${i}</label>
        <div class="bg-white p-3 rounded mb-3">
                    <div class="form-group">
                        <label for="">Label / Question</label>
                        <input type="text" name="questions[${i}][question]" class="form-control" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please provide question.</div>
                    </div>
                    <div class="form-group">
                        <label for="">Answer Type</label>
                        <select name="questions[${i}][answer_type]" class="custom-select">
                            <option value="short_answer">Short Answer</option>
                            <option value="paragraph">Paragraph</option>
                        </select>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <button onclick="removeQuestion(event)" class="btn btn-danger btn-sm mt-3" type="button">Remove</button>
                </div>`;

        let questionFormWrapper = document.getElementById('question-form-wrapper');
        let div = document.createElement('div');
        div.classList.add('question-wrapper');
        div.innerHTML = template;
        questionFormWrapper.appendChild(div);
        i++;
    }


    function removeQuestion(event)
    {
        let element = event.target;
        let questionWrapper = element.closest('.question-wrapper');
        questionWrapper.parentNode.removeChild(questionWrapper);
    }



    function submitForm() {
        document.getElementById('submit-btn').innerHTML = 'loading';
        let formData = new URLSearchParams(Array.from(new FormData(document.getElementById('form')))).toString();
        console.log(formData);
        axios.post("{{ route('backend.vacancy.store') }}", formData)
            .then((response) => {
                console.success('success');
                console.log(response);
            }).catch((error) => {
                console.log(error.response);
                if (error.response.status == 422) {
                    let errorWrapper = document.getElementById('errors-wrapper');
                    errorWrapper.innerHTML = '';
                    Object.values(error.response.data.errors).forEach(function(errorMessage) {
                        errorWrapper.innerHTML = errorWrapper.innerHTML + '<div class="">* ' + errorMessage + '</div>';
                    });
                }
            }).finally(() => document.getElementById('submit-btn').innerHTML = 'Save')
    }


    // Form Validation
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    // event.preventDefault();
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

</script>
@endpush
