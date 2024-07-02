<style>
    .btn-login {
        background: linear-gradient(90deg,
                rgba(243, 49, 247, 1) 8%,
                rgba(87, 158, 255, 1) 70%) !important;
        color: #ffffffff !important;
    }

    .btn-login:hover {
        color: #ffffffff !important;
    }

    .dropdown-toggle {
        border: none;
        border-radius: 10px;
    }

    @media (max-width: 565px) {
        .dropstart {
            margin-bottom: 40px;
        }
    }

    .flag-country {
        background: none !important;
    }
</style>

<nav class="navbar bg-body-tertiary">
    <div class="container-fluid justify-content-around">
        <div class="nav-leftside text-center col-md-3">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="@if (session()->has('app_logo') && file_exists('uploads/business_settings/' . session()->get('app_logo'))) {{ asset('uploads/business_settings/' . session()->get('app_logo')) }} @else {{ asset('uploads/image/default.png') }} @endif"
                    alt="" width="120" class="logo">
            </a>
        </div>
        <div class="nav-rightside justify-content-between col-md-9 d-flex hidden" id="navRightside">
            <a href="{{ route('home') }}"
                class="p-2 text-center justify-content-center nav-link{{ Request::is('/') ? ' active' : '' }}"
                type="button">
                {{ __('Home') }}
            </a>
            @if (isset($courses))
                @foreach ($courses as $course)
                    @php
                        $isActive =
                            Request::is('course/' . $course->slug) ||
                            (isset($currentCourse) && $currentCourse->slug == $course->slug) ||
                            (isset($lesson) && $lesson->category->course->slug == $course->slug);
                    @endphp
                    <a href="{{ route('course.show', ['slug' => $course->slug]) }}"
                        class="p-2 text-center justify-content-center nav-link{{ $isActive ? ' active' : '' }}"
                        type="button">
                        {{ $course->title }}
                    </a>
                @endforeach
            @endif
            <div class="dropdown align-content-center text-center">
                <a class="nav-link flag-country" data-toggle="dropdown" href="#">
                    <i class="flag-icon flag-icon-{{ $current_locale == 'en' ? 'gb' : $current_locale }}"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right p-0">
                    @foreach ($available_locales as $locale_name => $available_locale)
                        @if ($available_locale === $current_locale)
                            <a href="{{ route('change_language', $available_locale) }}"
                                class="dropdown-item text-capitalize active">
                                <i
                                    class="flag-icon flag-icon-{{ $available_locale == 'en' ? 'gb' : $available_locale }} mr-2"></i>
                                {{ $locale_name }}
                            </a>
                        @else
                            <a href="{{ route('change_language', $available_locale) }}"
                                class="dropdown-item text-capitalize">
                                <i
                                    class="flag-icon flag-icon-{{ $available_locale == 'en' ? 'gb' : $available_locale }} mr-2"></i>
                                {{ $locale_name }}
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
            <a href="{{ route('contactus') }}"
                class="btn btn-sm btn-primary text-center justify-content-center h-50 btn-contact" type="button"
                style="border-radius: 8px;">
                <i class="fas fa-headset"></i> {{ __('Contact Us') }}
            </a>
            @guest
                <button type="button" class="p-2 btn-login nav-link" data-toggle="modal" data-target="#staticBackdrop">
                    {{ __('Login') }}
                </button>
            @endguest
            @auth
                <div class="dropdown dropdown-profile dropstart text-end mt-1">
                    <button type="button" class="btn btn-login dropdown-toggle" data-bs-toggle="dropdown">
                        {{ auth()->user()->name }}
                    </button>
                    <ul class="dropdown-menu">
                        <a href="{{ route('account.profile') }}" class="dropdown-item">
                            <i class="fa fa-user"></i>
                            {{ __('Profile') }}
                        </a>
                        <a href="{{ route('web.logout') }}" class="dropdown-item text-danger">
                            <i class="fa fa-sign-out-alt"></i>
                            {{ __('Logout') }}
                        </a>
                    </ul>
                </div>
            @endauth
        </div>
        <a href="#" class="navbar-toggler d-md-none" type="button" onclick="toggleNavbar()">
            <i class="fas fa-bars"></i>
        </a>
    </div>
    @include('website.layout.modal_login')
</nav>
<script>
    function toggleNavbar() {
        const navRightside = document.getElementById('navRightside');
        if (navRightside.classList.contains('show')) {
            navRightside.classList.remove('show');
            setTimeout(() => {
                navRightside.style.display = 'none';
            }, 500); // Match this to the CSS transition duration
        } else {
            navRightside.style.display = 'flex';
            setTimeout(() => {
                navRightside.classList.add('show');
            }, 10); // Small delay to allow the display change to take effect
        }
    }

    // Optional: Ensure that the nav is hidden on page load for small screens
    document.addEventListener('DOMContentLoaded', () => {
        const navRightside = document.getElementById('navRightside');
        if (window.innerWidth < 768) {
            navRightside.classList.remove('show');
            navRightside.style.display = 'none';
        } else {
            navRightside.classList.add('show');
            navRightside.style.display = 'flex';
        }
    });

    // Hide nav when clicking outside of it (optional enhancement)
    document.addEventListener('click', (event) => {
        const navRightside = document.getElementById('navRightside');
        const toggler = document.querySelector('.navbar-toggler');
        if (!navRightside.contains(event.target) && !toggler.contains(event.target)) {
            navRightside.classList.remove('show');
            setTimeout(() => {
                navRightside.style.display = 'none';
            }, 500); // Match this to the CSS transition duration
        }
    });
</script>
