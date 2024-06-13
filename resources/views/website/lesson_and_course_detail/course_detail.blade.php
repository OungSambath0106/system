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
                    @foreach ($courses as $course)
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
                    <div class="col-12">
                        <div class="group1">
                            <label for="button1">Content Courses</label>
                            <button type="button" id="button1" class="form-control">Introduction to UI/UX
                                Design</button>
                            <div class="round-circle1">1</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="group2">
                            <button type="button" id="button2" class="form-control">UI Kits and Templates</button>
                            <div class="round-circle2">2</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="group3">
                            <button type="button" id="button3" class="form-control">Shapes, Gradients and
                                Strokes</button>
                            <div class="round-circle3">3</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="group4">
                            <button type="button" id="button4" class="form-control">Icons, Typography, and
                                Styles</button>
                            <div class="round-circle4">4</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-7">
                <div class="card card-menu">
                    <div class="col-12 d-flex">
                        {{-- <div class="listimg p-2">
                            <img id="menu-img" class="menuimg" src="/upload/social_media/menu1.png" alt="Not found">
                            <button class="coursemenu">
                                <i class="fa-solid fa-play fa-lg" style="color: white"></i>
                            </button>
                        </div> --}}
                        <img id="menu-img" class="menuimg" src="/upload/social_media/menu1.png" alt="Not found">

                        <div class="card-body-menu">
                            <h4 class="card-title">Introduction to UI/UX Design</h4>
                            <p class="card-text-menu">Jump into UI/UX design with our Figma course, tailored for
                                beginners
                                and those looking to polish their design skills. Alongside using Figma, you'll
                                leverage Mobbin to identify current UI patterns, enabling you to see effective design
                                solutions in action. The course covers how to organize elements on a page, play with
                                color schemes and fonts, and ensure your designs respond well across different devices.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card card-menu">
                    <div class="col-12 d-flex">
                        <img id="menu-img" class="menuimg" src="/upload/social_media/menu1.png" alt="Not found">
                        <div class="card-body-menu">
                            <h4 class="card-title">UI DESIGN (USER INTERFACE DESIGN)</h4>
                            <p class="card-text-menu">Jump into UI/UX design with our Figma course, tailored for
                                beginners
                                and those looking to polish their design skills. Alongside using Figma, you'll
                                leverage Mobbin to identify current UI patterns, enabling you to see effective design
                                solutions in action. The course covers how to organize elements on a page, play with
                                color schemes and fonts, and ensure your designs respond well across different devices.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card card-menu">
                    <div class="col-12 d-flex">
                        <img id="menu-img" class="menuimg" src="/upload/social_media/menu1.png" alt="Not found">
                        <div class="card-body-menu">
                            <h4 class="card-title" style="">UX DESIGN (USER EXPERIENCE DESIGN)</h4>
                            <p class="card-text-menu">Jump into UI/UX design with our Figma course, tailored for
                                beginners
                                and those looking to polish their design skills. Alongside using Figma, you'll
                                leverage Mobbin to identify current UI patterns, enabling you to see effective design
                                solutions in action. The course covers how to organize elements on a page, play with
                                color schemes and fonts, and ensure your designs respond well across different devices.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card card-menu">
                    <div class="col-12 d-flex">
                        <img id="menu-img" class="menuimg" src="/upload/social_media/menu1.png" alt="Not found">
                        <div class="card-body-menu">
                            <h4 class="card-title" style="">UX DESIGN (USER EXPERIENCE DESIGN)</h4>
                            <p class="card-text-menu">Jump into UI/UX design with our Figma course, tailored for
                                beginners
                                and those looking to polish their design skills. Alongside using Figma, you'll
                                leverage Mobbin to identify current UI patterns, enabling you to see effective design
                                solutions in action. The course covers how to organize elements on a page, play with
                                color schemes and fonts, and ensure your designs respond well across different devices.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
        document.getElementById("menu-img").addEventListener("click", function() {
            window.location.href = "http://example.com";
        });
    </script> --}}
@endsection
