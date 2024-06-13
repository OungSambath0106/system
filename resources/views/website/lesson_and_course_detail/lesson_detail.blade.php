@extends('website.app')
@section('content')
    @include('website.lesson_and_course_detail.lesson_style')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-12 ">
                <div class="card-video d-flex  justify-content-center">
                    <div class="col-7">
                        <h4 class="text-primary pb-3">Introduction to UI/UX Design</h4>
                        <div class="lessonimg mb-2" style="position: relative; display: inline-block;">
                            <video class="btn " width="90%" src="/upload/social_media/Laravel.mp4" disabled
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Your browser does not support the video tag.
                            </video>
                            <button class="playvideo" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-play fa-lg" style="color: white"></i>
                            </button>
                        </div>
                        <p style="font-family: Arial" class="discription">
                            Jump into UI/UX design with our Figma course, tailored for beginners and those looking to
                            polish
                            their design skills. Alongside using Figma, you'll leverage Mobbin to identify current UI
                            patterns, enabling you to see effective design solutions in action. The course covers how to
                            organize elements on a page, play with color schemes and fonts, and ensure your designs
                            respond
                            well across different devices.
                        </p>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" id="staticBackdrop" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <video id="modalVideo" width="100%" src="/upload/social_media/Laravel.mp4" controls>
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Modal -->
                    <div class="col-5 col-md-5 col-lg-5">
                        <div class="card bg-white">
                            <div class="card-header text-center text-white p-2">
                                <h3 class="mt-1">Up Next</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-12 shadow rounded">
                                    <div class="d-flex justify-content-center">
                                        <div class="listimg p-2">
                                            <img width="
                                            185.6px"
                                                src="/upload/social_media/menu1.png" alt="Not found">
                                            <button class="menuplayvideo">
                                                <i class="fa-solid fa-play fa-lg" style="color: white"></i>
                                            </button>
                                        </div>
                                        <div class="body-text">
                                            <div class="card-tittle">
                                                <h4>
                                                    Introduction to UI/UX Design
                                                </h4>
                                            </div>
                                            <div class="discription">
                                                <p>
                                                    Jump into UI/UX design with our Figma course, tailored for beginners
                                                    and
                                                    those looking to polish their design skills. Alongside using Figma,
                                                    you'll
                                                    leverage Mobbin to identify current UI patterns, enabling you to see
                                                    effective design solutions in action. The course covers how to
                                                    organize
                                                    elements on a page, play with color schemes and fonts, and ensure
                                                    your
                                                    designs respond well across different devices.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 shadow rounded">
                                    <div class="d-flex justify-content-center">
                                        <div class="listimg p-2">
                                            <img width="
                                            185.6px"
                                                src="/upload/social_media/menu1.png" alt="Not found">
                                            <button class="menuplayvideo">
                                                <i class="fa-solid fa-play fa-lg" style="color: white"></i>
                                            </button>
                                        </div>
                                        <div class="body-text">
                                            <div class="card-tittle">
                                                <h4>
                                                    What is UI/UX can do?
                                                </h4>
                                            </div>
                                            <div class="discription">
                                                <p>
                                                    Jump into UI/UX design with our Figma course, tailored for beginners
                                                    and
                                                    those looking to polish their design skills. Alongside using Figma,
                                                    you'll
                                                    leverage Mobbin to identify current UI patterns, enabling you to see
                                                    effective design solutions in action. The course covers how to
                                                    organize
                                                    elements on a page, play with color schemes and fonts, and ensure
                                                    your
                                                    designs respond well across different devices.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 shadow rounded">
                                    <div class="d-flex justify-content-center">
                                        <div class="listimg p-2">
                                            <img width="
                                            185.6px"
                                                src="/upload/social_media/menu1.png" alt="Not found">
                                            <button class="menuplayvideo">
                                                <i class="fa-solid fa-play fa-lg" style="color: white"></i>
                                            </button>
                                        </div>
                                        <div class="body-text">
                                            <div class="card-tittle">
                                                <h4>
                                                    UI design (user interface design)
                                                </h4>
                                            </div>
                                            <div class="discription">
                                                <p>
                                                    Jump into UI/UX design with our Figma course, tailored for beginners
                                                    and
                                                    those looking to polish their design skills. Alongside using Figma,
                                                    you'll
                                                    leverage Mobbin to identify current UI patterns, enabling you to see
                                                    effective design solutions in action. The course covers how to
                                                    organize
                                                    elements on a page, play with color schemes and fonts, and ensure
                                                    your
                                                    designs respond well across different devices.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 shadow rounded">
                                    <div class="d-flex justify-content-center">
                                        <div class="listimg p-2">
                                            <img width="
                                            185.6px"
                                                src="/upload/social_media/menu1.png" alt="Not found">
                                            <button class="menuplayvideo">
                                                <i class="fa-solid fa-play fa-lg" style="color: white"></i>
                                            </button>
                                        </div>
                                        <div class="body-text">
                                            <div class="card-tittle">
                                                <h4>
                                                    Learn tool
                                                </h4>
                                            </div>
                                            <div class="discription">
                                                <p>
                                                    Jump into UI/UX design with our Figma course, tailored for beginners
                                                    and
                                                    those looking to polish their design skills. Alongside using Figma,
                                                    you'll
                                                    leverage Mobbin to identify current UI patterns, enabling you to see
                                                    effective design solutions in action. The course covers how to
                                                    organize
                                                    elements on a page, play with color schemes and fonts, and ensure
                                                    your
                                                    designs respond well across different devices.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 shadow rounded">
                                    <div class="d-flex justify-content-center">
                                        <div class="listimg p-2">
                                            <img width="
                                            185.6px"
                                                src="/upload/social_media/menu1.png" alt="Not found">
                                            <button class="menuplayvideo">
                                                <i class="fa-solid fa-play fa-lg" style="color: white"></i>
                                            </button>
                                        </div>
                                        <div class="body-text">
                                            <div class="card-tittle">
                                                <h4>
                                                    Learn shortcut
                                                </h4>
                                            </div>
                                            <div class="discription">
                                                <p>
                                                    Jump into UI/UX design with our Figma course, tailored for beginners
                                                    and
                                                    those looking to polish their design skills. Alongside using Figma,
                                                    you'll
                                                    leverage Mobbin to identify current UI patterns, enabling you to see
                                                    effective design solutions in action. The course covers how to
                                                    organize
                                                    elements on a page, play with color schemes and fonts, and ensure
                                                    your
                                                    designs respond well across different devices.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('exampleModal');
            var video = document.getElementById('modalVideo');

            modal.addEventListener('hide.bs.modal', function() {
                video.pause();
                video.currentTime = 0; // Optionally reset video to start
            });
        });
    </script>
@endsection
