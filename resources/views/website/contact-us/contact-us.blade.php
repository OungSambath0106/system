@extends('website.app')
@section('content')
    @include('website.contact-us.contact_style')

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
        <img src="/upload/social_media/Ellipse1.png" alt="err">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 mt-5">
                <div class="card">
                    <div class="col-8 mx-auto"> <!-- Add mx-auto class here -->
                        <div class="card-head">
                            <div class="card-text mb-5 mt-5">
                                <h2 class="text-primary text-center">Contact Us</h2>
                                <h4 class="text-primary text-center">Any questions or remarks? Just write us a message!
                                </h4>
                            </div>
                            <div class="card-message">
                                @if (session('success'))
                                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                    <script>
                                        Swal.fire({
                                            position: "top-end",
                                            icon: "success",
                                            title: "{{ session('success') }}", // Add quotes around the session value
                                            showConfirmButton: false,
                                            timer: 1700
                                        });
                                    </script>
                                @endif

                                <form class="row d-flex gap-2 justify-content-center"
                                    action="{{ route('admin.contact.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group col-5 mb-3">
                                        <label for="name" class="mb-2">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter your name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-5 mb-3">
                                        <label for="email" class="mb-2">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter a valid email address" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-10 mb-3">
                                        <label for="message" class="mb-2">Message</label>
                                        <textarea name="message" id="message" cols="20" rows="5" class="form-control"
                                            placeholder="Enter your message" required></textarea>
                                        @error('message')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                   <input type="hidden" name="isRead" value="0">
                                    <div class="form-group col-10 mt-4">
                                        <button type="submit" class="btn btn-primary col-12">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center p-2">
                            <div class="club col-3 text-center">
                                <div class="icon mx-auto mb-2">
                                    <i class="fa-solid fa-person-running fa-lg" style="color: #ffffff;"></i>
                                </div>
                                <div class="texticon">
                                    <h5>About Club</h5>
                                    <p>skills and knowledge to be learned, and how it will benefit the student.</p>
                                </div>
                            </div>
                            <div class="phone col-3 text-center">
                                <div class="icon mx-auto mb-2">
                                    <i class="fa-solid fa-phone fa-lg" style="color: #ffffff;"></i>

                                </div>
                                <div class="texticon">
                                    <h5>Phone Number</h5>
                                    <p>(+855) 89 991 005</p>
                                    <p>(+855) 89 991 005</p>
                                </div>
                            </div>
                            <div class="telegram col-3 text-center">
                                <div class="icon mx-auto mb-2">
                                    <img class="telegram" src="/upload/social_media/telegram.png" alt="">
                                </div>
                                <div class="texticon">
                                    <h5>Telegram</h5>
                                    <p>(+855) 89 991 005</p>
                                    <p>(+855) 89 991 005</p>
                                </div>
                            </div>
                            <div class="location col-3 text-center">
                                <div class="icon mx-auto mb-2">
                                    <i class="fa-solid fa-location-dot fa-lg" style="color: #ffffff;"></i>
                                </div>
                                <div class="texticon">
                                    <h5>Our Location</h5>
                                    <p>Street 13, Siem Reap 17252. (Treang Village, Slorkram Commune, Siem Reap, Kingdom
                                        of Cambodia)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
        $(document).ready(function() {
            // alert(1);
            var success_audio = "{{ URL::asset('sound/success.wav') }}";
            var error_audio = "{{ URL::asset('sound/error.wav') }}";
            var success = new Audio(success_audio);
            var error = new Audio(error_audio);

            const Confirmation = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            });

            @if (Session::has('msg'))
                @if (Session::get('success') == true)
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true
                    }
                    toastr.success("{{ Session::get('msg') }}");
                    success.play();
                @else
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true
                    }
                    toastr.error("{{ Session::get('msg') }}");
                    error.play();
                @endif
            @endif


        });
    </script> --}}
@endsection
