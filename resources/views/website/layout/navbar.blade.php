<nav class="navbar bg-body-tertiary">
    <div class="container-fluid justify-content-around">
        <div class="nav-leftside text-center col-md-3">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="@if (session()->has('app_logo') && file_exists('uploads/business_settings/' . session()->get('app_logo'))) {{ asset('uploads/business_settings/' . session()->get('app_logo')) }} @else {{ asset('uploads/image/default.png') }} @endif"
                    alt="" width="120" class="logo">
            </a>
        </div>
        <div class="nav-rightside justify-content-between col-md-9 d-flex hidden" id="navRightside">
            <a href="{{ route('home') }}" class="p-2 nav-link{{ Request::is('/') ? ' active' : '' }}" type="button">
                Home
            </a>
            @if (isset($courses))
                @foreach ($courses as $course)
                    @php
                        $isActive =
                            Request::is('course/' . $course->slug) ||
                            (isset($currentCourse) && $currentCourse->slug == $course->slug) ||
                            (isset($lesson) && $lesson->category->course->slug == $course->slug);
                    @endphp
                    <!-- Debugging -->
                    {{-- <div>
                        Course ID: {{ $course->id }} | Is Active: {{ $isActive ? 'Yes' : 'No' }}
                    </div> --}}
                    <a href="{{ route('course.show', ['slug' => $course->slug]) }}"
                        class="p-2 nav-link{{ $isActive ? ' active' : '' }}" type="button">
                        {{ $course->title }}
                    </a>
                @endforeach
            @endif
            <a href="{{ route('contactus') }}" class="btn btn-sm btn-primary h-50 btn-contact" type="button"
                style="border-radius: 8px;">
                <i class="fas fa-headset"></i> Contact Us
            </a>
        </div>
        <a href="#" class="navbar-toggler d-md-none" type="button" onclick="toggleNavbar()">
            <i class="fas fa-bars"></i>
        </a>
    </div>
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
