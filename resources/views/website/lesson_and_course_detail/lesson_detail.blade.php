@extends('website.app')
@section('content')
    @include('website.lesson_and_course_detail.lesson_style')
    <div class="container mt-3">
        <div class="justify-content-center">
            <div class="col-12 col-md-12 col-lg-12 card-content">
                <div class="card-video d-flex  justify-content-center">
                    <div class="col-7">
                        <h4 class="text-primary title-video py-2"> {{ $lesson->title }} </h4>
                        <div
                            class="lessoning mb-2 justify-content-center align-content-center text-center position-relative">
                            <video class="show-video" width="100%" src="{{ asset('uploads/lessons/' . $lesson->video) }}"
                                disabled>
                                Your browser does not support the video tag.
                            </video>
                            <button class="playvideo" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-play fa-lg" style="color: white"></i>
                            </button>
                        </div>
                        <p class="discription"> {!! $lesson->description !!} </p>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" id="staticBackdrop" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <video id="modalVideo" width="100%"
                                        src="{{ asset('uploads/lessons/' . $lesson->video) }}" controls>
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
                    <div class="col-5 col-md-5 col-lg-5 mb-4">
                        <div class="card bg-white">
                            <div class="card-header text-center text-white p-2">
                                <h3 class="mt-1">Up Next</h3>
                            </div>
                            <div class="card-body">
                                @foreach ($lessons as $otherLesson)
                                    @if ($otherLesson->id !== $lesson->id)
                                        <div class="col-12 shadow rounded">
                                            <div class="d-flex justify-content-center">
                                                <div class="listimg p-2">
                                                    <img width="100%"
                                                        src="{{ asset('uploads/lessons/' . $otherLesson->thumbnail) }}"
                                                        alt="Not found">
                                                    <a href="{{ route('lesson.detail', $otherLesson->id) }}"
                                                        class="menuplayvideo">
                                                        <i class="fa-solid fa-play fa-lg" style="color: white"></i>
                                                    </a>
                                                </div>
                                                <div class="body-text">
                                                    <div class="card-tittle">
                                                        <h4> {{ $otherLesson->title }} </h4>
                                                    </div>
                                                    <div class="discription">
                                                        <p> {{ $otherLesson->description }} </p>
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
