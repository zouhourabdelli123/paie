<!DOCTYPE html>
<html lang="en">

@include('dashbaord.head')

<body class="g-sidenav-show  bg-gray-100">
    @include('dashbaord.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('dashbaord.navbar')
        <!-- End Navbar -->
        @yield('content')
        @include('dashbaord.script')

    </main>

</body>

</html>
