@extends('layouts.master')

@section('content')
<div class="courses">
    <div class="courses_background"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="section_title text-center">@lang('messages.front_end.fels.popular_course_text')</h2>
            </div>
        </div>
        <div class="row courses_row">
            <!-- Course -->
            @forelse ($popularCourses as $course)
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="{{ asset('img/course.jpg') }}" alt=""></div>
                        <div class="course_body">
                            <div class="course_title">
                                <a href="{{ route('fels.course.detail', $course) }}">{{ $course->name }}</a>
                            </div>
                            <div class="course_info">
                            </div>
                            <div class="course_text">
                                <p>{{ ($course->description == null) ? __('messages.front_end.fels.course_description') : $course->description }}</p>
                            </div>
                        </div>
                        <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                            <div class="course_students"><i class="fa fa-user"
                                aria-hidden="true"></i><span>{{ $course->users_count }}</span>
                            </div>
                            <div class="course_rating ml-auto"><i class="fa fa-list"
                                aria-hidden="true"></i><span>{{ $course->words_count }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <h5 class="section_title text-center">@lang('messages.front_end.fels.not_found')</h5>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
