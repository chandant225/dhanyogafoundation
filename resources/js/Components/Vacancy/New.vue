<template>
  <div>
    <form id="form" method="POST" class="form needs-validation" novalidate>
      <div class="row">
        <div class="col-md-8">
          <div class="form-group">
            <label for="">Job Title</label>
            <input type="text" v-model="form.title" class="form-control" required autofocus />
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback">Please provide a job title.</div>
          </div>

          <div class="form-group">
            <label for="">Job Description</label>
            <textarea v-model="form.description" id="description" class="form-control" cols="30" rows="10"></textarea>
          </div>

          <div class="form-group">
            <label for="">Deadline</label>
            <input type="date" name="deadline_date" class="form-control" required />
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback">Please provide a job deadline.</div>
          </div>

          <div class="form-group">
            <label for="">Apply Link</label>
            <input type="text" name="apply_link" class="form-control" />
            <small class="form-text">If the application has to be filled using another service</small>
          </div>

          <div class="form-group">
            <div id="question-form-wrapper"></div>
            <template type="text/javascript" id="question-form-template">
              <div class="bg-white p-3 rounded mb-3">
                <div class="form-group">
                  <div>${val}</div>
                  <label for="">Label / Question</label>
                  <input type="text" name="questions[question][]" class="form-control" required />
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Please provide question.</div>
                </div>
                <div class="form-group">
                  <label for="">Answer Type</label>
                  <select name="questions[answer_type][]" class="custom-select">
                    <option value="short_answer">Short Answer</option>
                    <option value="paragraph">Paragraph</option>
                  </select>
                  <div class="valid-feedback">Looks good!</div>
                </div>
                <button class="btn btn-danger btn-sm mt-3" type="button">Remove</button>
              </div>
            </template>
            <div class="form-group mt-3">
              <button id="add-question-form-btn" class="btn btn-info btn-sm" type="button">
                <span class="mr-2"><i class="fa fa-plus"></i></span>Add Another
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="bg-white p-4 rounded">
            <!-- {{-- <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Show Resume Section</label>
                            </div>
                        </div> --}} -->

            <div class="form-group">
              <div class="form-check">
                <input type="checkbox" name="show_cover_letter" class="form-check-input" id="show-cover-letter-checkbox" value="1" />
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
</template>

<script>
export default {
  data() {
    return {
      form: {
        title: null,
        description: null,
        apply_link: null,
        deadline_date: null,
        show_cover_letter: null,
      },
    };
  },
};
</script>
