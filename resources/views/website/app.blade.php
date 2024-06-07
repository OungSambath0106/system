<!DOCTYPE html>
<html lang="en">

    @include('website.layout.header')

<body>
    <div class="wrapper">
        <!-- Navbar -->
        @include('website.layout.navbar')
        <!-- End Navbar -->

        <!-- Main Content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- End Main Content -->

        <!-- Footer -->
        @include('website.layout.footer')
        <!-- End Footer -->

    </div>
    @stack('js')
</body>

</html>
