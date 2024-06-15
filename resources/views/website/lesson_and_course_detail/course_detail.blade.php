@extends('website.app')
@section('content')
    @include('website.lesson_and_course_detail.course_style')
    <style>
        .menuimg:hover {
            cursor: pointer;
        }
    </style>
    <div class="backimg2">
        <img class="img2" src="/upload/social_media/Ellipse2.png" alt="err">
    </div>
    <div class="backimg1">
        <img src="/upload/social_media/Ellipse3.png" alt="err">
    </div>
    <div class="buttomimg2">
        <img src="/upload/social_media/Ellipse4.png" alt="err">
    </div>
    <div class="buttomimg1">
        <img width="90%" src="/upload/social_media/Ellipse1.png" alt="err">
    </div>
    <div class="container">
        <div class="row ">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card  justyfy-content-center">
                    @foreach ($courses  as $index => $course)
                        @if ($index == 0)
                             <div class="col-12 d-flex ">
                            <img width="30%" height="auto"
                                src="@if ($course->image && file_exists(public_path('uploads/course/' . $course->image))) {{ asset('uploads/course/' . $course->image) }}
                                 @else
                                    {{ asset('uploads/default.png') }} @endif"
                                         alt="" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">{{ $course->title }}</h4>
                                <span>{{ $course->created_at }}</span>
                                <p class="card-text">{{ $course->description }}</p>
                            </div>
                        </div>
                        @endif

                    @endforeach
                    {{-- </div> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="card search">
                    <div class="col-12">
                        <div class="group-search">
                            <label for="search">Search</label>
                            <input type="text" name="" id="search" class="form-control"
                                placeholder="Search Course">
                            <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <label>Content Courses</label>
                    </div>
                    @foreach ($categories as $category)
                        <div class="col-12">
                            <div class="group">
                                <button type="button" class="form-control justify-content-between d-flex"
                                    onclick="loadLessons({{ $category->id }}, this)">
                                    <h6 class="mt-2">{{ $category->title }}</h6>
                                    <div class="round-circle">{{ $loop->iteration }}</div>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-7">
                <div id="lessons-container">
                    <!-- Lessons will be loaded here -->
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("menu-img").addEventListener("click", function() {
            window.location.href = "http://example.com";
        });
    </script>
    <script>
        function setActiveButton(button) {
            // Remove active-button class from all buttons
            document.querySelectorAll('.form-control').forEach(function(btn) {
                btn.classList.remove('active-button');
            });

            // Add active-button class to the clicked button
            button.classList.add('active-button');
        }

        function loadLessons(categoryId, button) {
            setActiveButton(button);

            fetch(`/lessons-by-category/${categoryId}`)
                .then(response => response.json())
                .then(lessons => {
                    const lessonsContainer = document.getElementById('lessons-container');
                    lessonsContainer.innerHTML = ''; // Clear previous lessons

                    lessons.forEach(lesson => {
                        const lessonCard = `
                            <div class="card card-menu">
                                <div class="col-12 d-flex">
                                    <img id="menu-img" class="menuimg" src="/uploads/lessons/${lesson.thumbnail}" alt="Not found">
                                    <div class="card-body-menu">
                                        <h4 class="card-title"> ${lesson.title} </h4>
                                        <p class="card-text-menu"> ${lesson.description} </p>
                                    </div>
                                </div>
                            </div>
                        `;
                        lessonsContainer.insertAdjacentHTML('beforeend', lessonCard);
                    });
                });
        }
    </script>
@endsection
