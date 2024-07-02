@extends('website.app')
@section('content')
    @include('website.home.home-style')

    <div class="content">
        <div class="row gap-3 mt--3 mx-0 justify-content-center align-content-center">
            @foreach ($courses as $index => $course)
                @if ($index < 2)
                    <!-- Display the first two courses in the first card template -->
                    <div class="card col-sm-3 col-3 col-lg-3 p-3 h-100 right-card">
                        <a href="{{ route('course.show', $course->slug) }}" class="link-title">
                            <div class="card-title-outside p-1 text-center m-0">
                                <strong class="title w-100">{{ $course->title }}</strong>
                            </div>
                        </a>
                        <div class="card-content px-0 pt-3 text-start">
                            <div class="card-img">
                                <a href="{{ route('course.show', $course->slug) }}" class="icon">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                                <img src="{{ asset('uploads/course/' . $course->image) }}" alt=""
                                    class="img-fluid object-fit-cover">
                            </div>
                            <div class="center-card">
                                <a href="{{ route('course.show', $course->slug) }}" class="link-title">
                                    <div class="card-title-inside p-1 text-center m-0">
                                        <strong class="title w-100">{{ $course->title }}</strong>
                                    </div>
                                </a>
                                <div class="text-description">
                                    <span>{{ Str::limit($course->description, 195) }}</span>
                                </div>
                                <div class="card-button-inside text-center mt-3">
                                    <a href="{{ route('course.show', $course->slug) }}"
                                        class="btn btn-sm btn-learn w-100">Let's Learn</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-button-outside text-center mt-3">
                            <a href="{{ route('course.show', $course->slug) }}"
                                class="btn btn-sm btn-learn w-100">{{ __("Let's Learn") }}</a>
                        </div>
                    </div>
                @endif
            @endforeach
            <!-- Display the rest of the courses in the second card template -->
            <div class="col-sm-6 col-6 col-lg-6">
                <div class="row">
                    <div class="col-sm-12 p-0">
                        @foreach ($courses as $index => $course)
                            @if ($index > 1 && $index <= 3)
                                <div class="card p-3 mb-3">
                                    <div class="row">
                                        <div class="card-left col-md-4">
                                            <div class="card-img">
                                                <a href="{{ route('course.show', $course->slug) }}" class="icon">
                                                    <i class="fas fa-chevron-right"></i>
                                                </a>
                                                <img src="{{ asset('uploads/course/' . $course->image) }}" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="card-right col-md-8">
                                            <a href="{{ route('course.show', $course->slug) }}" class="link-title">
                                                <div class="card-title p-1 text-center m-0">
                                                    <strong class="title w-100">{{ $course->title }}</strong>
                                                </div>
                                            </a>
                                            <div class="card-body px-0 text-start">
                                                <div class="text-description">
                                                    <span>{{ $course->description }}</span>
                                                </div>
                                            </div>
                                            <div class="card-button text-center">
                                                <a href="{{ route('course.show', $course->slug) }}"
                                                    class="btn btn-sm btn-learn w-100">{{ __("Let's Learn") }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
