@extends('website.app')
@section('content')
    @include('website.home.home-style')

    <div class="content">
        <div class="row gap-3 mx-0 justify-content-center">
            <div class="card col-sm-3 col-3 col-lg-3 p-3 h-100 uiux-card">
                <div class="card-title-outside p-1 text-center m-0">
                    <strong class="title w-100"> Ui/Ux </strong>
                </div>
                <div class="card-content px-0 pt-3 text-start">
                    <div class="card-img">
                        <a href="#" class="icon">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        <img src="{{ asset('upload/uiux/uiux.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="center-card">
                        <div class="card-title-inside p-1 text-center m-0">
                            <strong class="title w-100"> Ui/Ux </strong>
                        </div>
                        <div class="text-description">
                            <span>
                                Get Ready for UX Design Jobs with Hands-On Assignments. Learn How to Conduct User Research.
                                Gain the Skills, Confidence, and Experience Needed to Launch Your Career in UX Design. Stand
                                Out
                                to Employers.
                            </span>
                        </div>
                        <div class="card-button-inside text-center mt-3">
                            <a href="" class="btn btn-sm btn-learn w-100"> Let's Learn </a>
                        </div>
                    </div>
                </div>
                <div class="card-button-outside text-center mt-3">
                    <a href="" class="btn btn-sm btn-learn w-100"> Let's Learn </a>
                </div>
            </div>
            <div class="card col-sm-3 col-3 col-lg-3 p-3 h-100 uiux-card">
                <div class="card-title-outside p-1 text-center m-0">
                    <strong class="title w-100"> Laravel </strong>
                </div>
                <div class="card-content px-0 pt-3 text-start">
                    <div class="card-img">
                        <a href="#" class="icon">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        <img src="{{ asset('upload/laravel/laravel.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="center-card">
                        <div class="card-title-inside p-1 text-center m-0">
                            <strong class="title w-100"> Laravel </strong>
                        </div>
                        <div class="text-description">
                            <span>
                                This course covers a range of topics such as Object Oriented Programming (OOP), UML, Design
                                Patterns, Security in PHP, SOAP, htaccess, PHP Frameworks, PHP Best Practices and lots more.
                            </span>
                        </div>
                        <div class="card-button-inside text-center mt-3">
                            <a href="" class="btn btn-sm btn-learn w-100"> Let's Learn </a>
                        </div>
                    </div>
                </div>
                <div class="card-button-outside text-center mt-3">
                    <a href="" class="btn btn-sm btn-learn w-100"> Let's Learn </a>
                </div>
            </div>
            <div class="col-sm-6 col-6 col-lg-6 h-100">
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="card p-3 mb-3">
                            <div class="row">
                                <div class="card-left col-md-4">
                                    <div class="card-img">
                                        <a href="#" class="icon">
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                        <img src="{{ asset('upload/react/react.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="card-right col-md-8">
                                    <div class="card-title p-1 text-center m-0">
                                        <strong class="title w-100"> React Native </strong>
                                    </div>
                                    <div class="card-body px-0 text-start">
                                        <div class="text-description">
                                            <span>
                                                React Native is an open-source framework for building cross-platform
                                                applications (apps) using React and the platform's native capabilities. In
                                                this course, you will move from the basics of React to a more advanced
                                                implementation using React Native.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-button text-center">
                                        <a href="" class="btn btn-sm btn-learn w-100"> Let's Learn </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-3 mb-3">
                            <div class="row">
                                <div class="card-left col-md-4">
                                    <div class="card-img">
                                        <a href="#" class="icon">
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                        <img src="{{ asset('upload/flutter/flutter.png') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="card-right col-md-8">
                                    <div class="card-title p-1 text-center m-0">
                                        <strong class="title w-100"> Flutter </strong>
                                    </div>
                                    <div class="card-body px-0 text-start">
                                        <div class="text-description">
                                            <span>
                                                Flutter course is designed to develop multi-platform like iOS and Android
                                                App, Web, Desktop apps like MacOS, Windows and Linux using one code base.
                                                We also include with UI / UX design concept.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-button text-center">
                                        <a href="" class="btn btn-sm btn-learn w-100"> Let's Learn </a>
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
