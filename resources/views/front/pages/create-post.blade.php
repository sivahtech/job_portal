@extends('front.layouts.app')

@section('content')
<section class="post-job">
    <div class="container">
        <div class="title">
            <h2>Post A <span class="alt-text">Job</span></h2>
        </div>
        <div class="flex">
            <form action="{{ route('job.store') }}" class="add-job" method="post" enctype="multipart/form-data">
                @csrf
                <div class="inline">
                    <div class="form-group">
                        <label for="job_title">Job Title</label>
                        <div class="adv-input">
                            <i class="fa fa-bars"></i><input type="text" id="job_title" name="job_title" class="form-input" placeholder="Senior UI/UX Designer">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="job_role">Job Role</label>
                        <div class="adv-input">
                            <i class="fa fa-list"></i>
                            <select name="job_role" id="job_role">
                                <option value="" selected disabled>Select job Role</option>
                                @forelse($data['job_roles'] as $key => $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @empty
                                <option value="" disabled selected>Select job Role</option>
                                @endforelse

                            </select>
                        </div>
                    </div>
                </div>

                <div class="inline">
                    <div class="form-group">
                        <label for="job_industry">Job Industry</label>
                        <div class="adv-input">
                            <i class="fa fa-clock-o"></i>
                            <select name="job_industry" id="job_industry" class="form-input">
                                <option value="" selected disabled>Select job Industry</option>
                                @forelse($data['job_industries'] as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @empty
                                <option value="" selected disabled>Select job Industry</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="job_type">Job Type</label>
                        <div class="adv-input">
                            <i class="fa fa-clock-o"></i>
                            <select name="job_type[]" id="job_type" class="form-input" multiple>
                                @forelse($data['job_types'] as $key => $value)
                                <option value="{{ $value->name }}">{{ $value->name }}</option>
                                @empty
                                <option value="" selected disabled>Select job type</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                </div>
                <div class="inline">
                    <div class="form-group">
                        <label for="job_category">Job Category</label>
                        <div class="adv-input">
                            <i class="fa fa-clock-o"></i>
                            <select name="job_category" id="job_category" class="form-input">
                                <option value="" selected disabled>Select job category</option>
                                @forelse($data['job_categories'] as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @empty
                                <option value="" selected disabled>Select job category</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exp">Experience Level</label>
                        <div class="adv-input">
                            <i class="fa fa-briefcase"></i><input type="text" id="exp" name="experience" class="form-input" placeholder="Type Experience">
                        </div>
                    </div>
                </div>
                <div class="inline">
                    <div class="form-group">
                        <label for="vacancies">Vacancies</label>
                        <div class="adv-input">
                            <i class="fa fa-user"></i><input type="text" id="vacancies" name="vacancies" class="form-input" placeholder="03 Persons">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Budget/Salary</label>
                        <div class="salary radio inline">
                            <label><input type="radio" name="salary_type" value="fixed" class="form-input fixed">Fixed Salary</label>
                            <label><input type="radio" name="salary_type" value="range" class="form-input salary-range">Salary Range</label>
                            {{-- <label><input type="radio" name="salary_type" value="negotiable" class="form-input">Negotiable</label> --}}
                        </div>
                        <div class="extra-fields">
                            <div class="adv-input conditional-field" id="fixed_salary">
                                <i class="fa fa-dollar"></i><input type="number" name="fixed_salary" class="form-input" placeholder="Salary">
                            </div>
                            <div class="inline extra-field conditional-field" id="salary_range">
                                <div class="form-group">
                                    <div class="adv-input">
                                        <i class="fa fa-dollar"></i><input type="number" name="fixed_salary" class="form-input" placeholder="Max Salary">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="adv-input">
                                        <i class="fa fa-dollar"></i><input type="number" name="fixed_salary" class="form-input" placeholder="Min Salary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="deadline">Deadline</label>
                    <div class="adv-input">
                        <i class="fa fa-calendar"></i><input type="date" id="deadline" name="deadline" class="form-input" placeholder="DD-MM-YY">
                    </div>
                </div>
                <div class="form-group">
                    <label for="job_desc">Job Description</label>
                    <div class="adv-input">
                        <textarea name="job_desc" id="job_desc" cols="30" rows="10" class="form-input">Job Description</textarea>
                    </div>
                </div>
                <div class="form-group form-submit">
                    <input type="submit" class="button" value="Post Now">
                </div>
            </form>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>

<script>
    $(document).ready(function() {
        $('#job_type').select2();
    });


    ClassicEditor
        .create(document.querySelector('#job_desc'), {
            theme: 'classic',
            // Additional configuration options...
            simpleUpload: {
                // The URL that the images are uploaded to.
                uploadUrl: 'http://example.com',

                // Enable the XMLHttpRequest.withCredentials property.
                withCredentials: true,

                // Headers sent along with the XMLHttpRequest to the upload server.
                headers: {
                    'X-CSRF-TOKEN': 'CSRF-Token'
                    , Authorization: 'Bearer <JSON Web Token>'
                }
            }
        })
        .catch(error => {
            console.error(error);
        });

</script>

@endsection
