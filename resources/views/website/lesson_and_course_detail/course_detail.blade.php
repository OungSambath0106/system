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
        <div class="row" style="margin-right: 0;">
            <div class="col-12 col-md-12 col-lg-12 pl-0">
                <div class="card justify-content-center">
                    <div class="col-12 d-flex course-baner">
                        <img width="30%" height="auto"
                            src="@if ($course->image && file_exists(public_path('uploads/course/' . $course->image))) {{ asset('uploads/course/' . $course->image) }}
                         @else
                            {{ asset('uploads/default.png') }} @endif"
                            alt="" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title m-0">{{ $course->title }}</h4>
                            <span>Publish date {{ $course->created_at->format('d-m-Y') }}</span>
                            <p class="card-text mt-3">{{ $course->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-right: 0;">
            <div class="col-12 col-md-6 col-lg-5 pl-0">
                <div class="card search">
                    <div class="col-12">
                        <div class="group-search">
                            <label for="search">Search</label>
                            <input type="text" id="search" class="form-control" placeholder="Search Course">
                            <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <label>Content Courses</label>
                    </div>
                    @foreach ($categories as $category)
                        <div class="col-12">
                            <div class="group">
                                <button type="button"
                                    class="form-control justify-content-between d-flex align-items-center"
                                    onclick="loadLessons({{ $category->id }}, this)">
                                    <h6 class="mt-2 btn-title">{{ $category->title }}</h6>
                                    <div class="round-circle">{{ $loop->iteration }}</div>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-7 pl-0">
                <div id="lessons-container">
                    <!-- Lessons will be loaded here -->
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var lessonsContainer = document.getElementById('lessons-container');

            // Load lessons for the button where $loop->iteration == 1
            var firstButton = document.querySelector('.group button .round-circle');
            if (firstButton && firstButton.textContent.trim() == '1') {
                var button = firstButton.closest('button');
                var categoryId = button.getAttribute('onclick').match(/\d+/)[0];
                loadLessons(categoryId, button);
            }

            // Add search functionality
            var searchInput = document.getElementById('search');
            searchInput.addEventListener('input', function() {
                var query = searchInput.value.toLowerCase();
                filterLessons(query);
            });

            function filterLessons(query) {
                var lessons = lessonsContainer.querySelectorAll('.card.card-menu');
                lessons.forEach(function(lesson) {
                    var title = lesson.querySelector('.card-title').textContent.toLowerCase();
                    if (title.includes(query)) {
                        lesson.style.display = '';
                    } else {
                        lesson.style.display = 'none';
                    }
                });
            }

            function loadLessons(categoryId, button) {
                setActiveButton(button);

                fetch(`/lessons-by-category/${categoryId}`)
                    .then(response => response.json())
                    .then(lessons => {
                        const lessonsContainer = document.getElementById('lessons-container');
                        lessonsContainer.innerHTML = ''; // Clear previous lessons

                        lessons.filter(lesson => lesson.status === 1).forEach(lesson => {
                            const lessonCard = `
                        <div class="card card-menu position-relative">
                            <div class="col-12 d-flex">
                                <div class=" card-img position-relative">
                                    <img id="menu-img" class="menuimg" src="/uploads/lessons/${lesson.thumbnail}" alt="Not found">
                                    <a href="#" class="playvideo" data-id="${lesson.id}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="fa-solid fa-play fa-lg" style="color: white"></i>
                                    </a>
                                </div>
                                <div class="card-body-menu">
                                    <h4 class="card-title"> ${lesson.title} </h4>
                                    <p class="card-text-menu"> ${lesson.description} </p>
                                </div>
                            </div>
                        </div>
                    `;
                            lessonsContainer.insertAdjacentHTML('beforeend', lessonCard);
                        });

                        lessonsContainer.addEventListener('click', function(event) {
                            const target = event.target;
                            if (target.closest('.playvideo')) {
                                event.preventDefault();
                                const lessonId = target.closest('.playvideo').getAttribute('data-id');
                                window.location.href = `/lesson-detail/${lessonId}`;
                            }
                        });
                    });
            }

            function setActiveButton(button) {
                // Remove active-button class from all buttons
                document.querySelectorAll('.form-control').forEach(function(btn) {
                    btn.classList.remove('active-button');
                });

                // Add active-button class to the clicked button
                button.classList.add('active-button');
            }
        });
    </script>
@endsection
