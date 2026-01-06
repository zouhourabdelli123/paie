<!DOCTYPE html>
<html lang="en">

@include('dashbaord.head')

<body class="g-sidenav-show  bg-gray-100">
    @include('dashbaord.sidebar')
    @yield('content')
    @include('dashbaord.script')
</body>

</html>
