<!DOCTYPE html>
<html lang="en">
@include('includes.landing.head')

<body>
    @include('includes.landing.navbar')
    @yield('content')
    @include('includes.landing.footer')
    @include('includes.landing.scripts')
</body>

</html>
