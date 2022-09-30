<!DOCTYPE html>
<html lang="en">
    @include('includes.head')
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            @include('includes.preloaders') @include('includes.navbar')
            @include('includes.sidebar')

            @yield('content')
            @include('includes.footer')
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        @include('includes.scripts')
    </body>
</html>
