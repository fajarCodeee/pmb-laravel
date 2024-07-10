<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PMB Polsa | Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/toastr/toastr.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="text-center w-100 mb-4">
            <img src="{{ asset('adminlte/dist/img/logo.png') }}" alt="" width="300">
        </div>
        <div class="card card-outline card-primary shadow">
            <div class="card-header text-center">
                <a href="/" class="h1 text-decoration-none"><b>PMB</b>
                    <p>Politeknik Sawunggalih Aji</p>
                </a>
            </div>
            <div class="card-body">
                <p class="login-box-msg text-capitalize">silahkan masuk untuk melanjutkan</p>

                <form action="{{ route('proses.login') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username/Email" name="email"
                            value="{{ old('email') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-md-12">

                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('adminlte') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte') }}/dist/js/adminlte.min.js"></script>

    <!-- Toastr -->
    <script src="{{ asset('adminlte') }}/plugins/toastr/toastr.min.js"></script>

    <script>
        // Fungsi untuk mengubah teks menjadi format capitalize
        function capitalizeWords(str) {
            return str.replace(/\b\w/g, function(char) {
                return char.toUpperCase();
            });
        }

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error(capitalizeWords("{{ $error }}"), 'Error', {
                    closeButton: true,
                    progressBar: true,
                    timeOut: 5000,
                    extendedTimeOut: 1000,
                    positionClass: "toast-top-right",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut"
                });
            @endforeach
        @endif
    </script>

</body>

</html>
