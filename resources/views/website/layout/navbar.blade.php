<nav class="navbar bg-body-tertiary">
    <div class="container-fluid justify-content-around">
        <div class="nav-leftside text-center col-md-3">
            <a class="navbar-brand" href="">
                <img src="{{ asset('upload/navbar/Cover.png') }}" alt="" width="120" class="logo">
            </a>
        </div>
        <div class="nav-rightside justify-content-center col-md-9 d-flex gap-5 hidden" id="navRightside">
            <a href="{{ route('home') }}" class="p-2 nav-link{{ Request::is('home') ? ' active' : '' }}" type="button">
                Home
            </a>
            <a href="" class="p-2 nav-link{{ Request::is('ui-ux') ? ' active' : '' }}" type="button">
                UI UX
            </a>
            <a href="" class="p-2 nav-link{{ Request::is('laravel') ? ' active' : '' }}" type="button">
                Laravel
            </a>
            <a href="" class="p-2 nav-link{{ Request::is('react-native') ? ' active' : '' }}" type="button">
                React Native
            </a>
            <a href="" class="p-2 nav-link{{ Request::is('flutter') ? ' active' : '' }}" type="button">
                Flutter
            </a>
            <a href="" class="btn btn-sm btn-primary h-50 mt-2 btn-contact" type="button"
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
    document.addEventListener('DOMContentLoaded', function() {
        const navbartoggler = document.querySelector('.navbar-toggler');
        const navRightside = document.getElementById('navRightside');

        navRightside.classList.add('hidden');

        navbartoggler.addEventListener('click', function(event) {
            event.preventDefault();
            navRightside.classList.toggle('hidden');
            if (navRightside.classList.contains('hidden')) {
                setTimeout(() => {
                    navRightside.classList.remove('show');
                }, 10);
            } else {
                setTimeout(() => {
                    navRightside.classList.add('show');
                }, 10);
            }
        });
    });
</script>
