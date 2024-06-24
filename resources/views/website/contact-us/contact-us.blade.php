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
            <div class="col-10 mt-5 container-card">
                <div class="card">
                    <div class="col-10 mx-auto ">
                        <div class="card-head">
                            <div class="card-text mb-5 mt-5">
                                <h2 class="text-primary text-center">Contact Us</h2>
                                <h4 class="text-primary text-center">Any questions or remarks? Just write us a message!
                                </h4>
                            </div>
                            <div class="row justify-content-center">
                                <div class="card-message col-12">
                                    <form class=" d-flex flex-wrap  gap-2 justify-content-center"
                                        action="{{ route('contact.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group col-5 mb-3">
                                            <label for="name" class="mb-2">Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                                placeholder="Enter your name">
                                            {{-- @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror --}}
                                        </div>
                                        <div class="form-group col-5 mb-3">
                                            <label for="email" class="mb-2">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                id="email" name="email" placeholder="Enter a valid email address">
                                            {{-- @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror --}}
                                        </div>
                                        <div class="form-group col-10 mb-3">
                                            <label for="message" class="mb-2">Message</label>
                                            <textarea name="message" id="message" cols="20" rows="5" class="form-control @error('message') is-invalid @enderror""
                                                placeholder="Enter your message"></textarea>
                                            {{-- @error('message')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror --}}
                                        </div>
                                        <input type="hidden" name="isRead" value="0">
                                        <div class="form-group col-10 mt-4">
                                            <button type="submit" class="btn btn-primary col-12">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="row  justify-content-center">
                            <div class=" d-flex  p-2 container-circle">
                                <div class="club col-12 col-md-3 text-center mb-3 circle">

                                    <div class="icon mx-auto mb-2">
                                        <i class="fa-solid fa-person-running fa-lg" style="color: #ffffff;"></i>
                                    </div>
                                    <div class="texticon">
                                        <h5>About Club</h5>
                                        <p>{{ session()->get('about_club') }}</p>
                                    </div>
                                </div>
                                <div class="phone col-12 col-md-3 text-center mb-3 circle">

                                    <div class="icon mx-auto mb-2">
                                        <i class="fa-solid fa-phone fa-lg" style="color: #ffffff;"></i>
                                    </div>
                                    <div class="texticon text-center">
                                        <h5>Phone Number</h5>
                                        <p class="px-5">{{ session()->get('phone') }}</p>
                                    </div>
                                </div>
                                <div class="telegram col-12 col-md-3 text-center mb-3 circle">

                                    <div class="icon mx-auto mb-2">
                                        <img class="telegram" src="/upload/social_media/telegram.png" alt="">
                                    </div>
                                    <div class="texticon text-center">
                                        <h5>Telegram</h5>
                                        <p class="px-5">{{ session()->get('telegram') }}</p>
                                    </div>
                                </div>
                                <div class="location col-12 col-md-3 text-center mb-3 circle">

                                    <div class="icon mx-auto mb-2">
                                        <i class="fa-solid fa-location-dot fa-lg" style="color: #ffffff;"></i>
                                    </div>
                                    <div class="texticon">
                                        <h5>Our Location</h5>
                                        <p>{{ session()->get('company_address') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

