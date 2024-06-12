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
                    <div class="col-12 d-flex ">

                        <img class="card-img-top" src="/upload/social_media/uxui.png" alt="not found">

                        <div class="card-body">
                            <h4 class="card-title" style="">UI UX Design</h4>
                            <span>Publish date 18-05-2024</span>
                            <p class="card-text">UI/UX design with our Figma course, tailored for beginners and
                                those
                                looking to polish their design skills. Alongside using Figma, you'll
                                leverage Mobbin to
                                identify current UI patterns, enabling you to see effective design solutions in
                                action.
                            </p>
                        </div>
                    </div>
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
                                    onclick="setActiveButton(this)">
                                    <h6 class="mt-2">{{ $category->title }}</h6>
                                    <div class="round-circle">{{ $loop->iteration }}</div>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-7">
                <div class="card card-menu">
                    <div class="col-12 d-flex">
                        <img id="menu-img" class="menuimg" src="/upload/social_media/menu1.png" alt="Not found">
                        <div class="card-body-menu">
                            <h4 class="card-title">Introduction to UI/UX Design</h4>
                            <p class="card-text-menu">Jump into UI/UX design with our Figma course, tailored for
                                beginners
                                and those looking to polish their design skills. Alongside using Figma, you'll
                                leverage Mobbin to identify current UI patterns, enabling you to see effective design
                                solutions in action. The course covers how to organize elements on a page, play with
                                color schemes and fonts, and ensure your designs respond well across different devices.
                            </p>
                        </div>
                    </div>
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
    </script>
@endsection
