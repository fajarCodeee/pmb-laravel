<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts._meta')
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('admin.layouts._navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.layouts._sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @include('admin.layouts._contentHeader')
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                @yield('content')
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('admin.layouts._footer')
    </div>
    <!-- ./wrapper -->

    @include('admin.layouts._javascript')
    {{-- Javascript Other --}}
    @yield('scripts')
</body>

</html>
