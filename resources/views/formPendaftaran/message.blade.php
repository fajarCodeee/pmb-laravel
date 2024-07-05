<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://codeanddeploy.com/theme/landing/img/favicon.png" rel="icon">

    <!-- Google Font: Source Sans Pro -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('adminlte') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/summernote/summernote-bs4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/toastr/toastr.min.css">
    <title>PMB - Politeknik Sawunggalih Aji</title>

    <style>
        body {
            background-color: #f5f8fa !important;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark p-3" style="background: #162953">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('adminlte/dist/img/logo-polsa.png') }}" width="30" height="30"
                    class="d-inline-block align-top" alt="Logo Polsa">
                <b>POLSA</b>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <a href="{{ route('admin.panel.dashboard') }}" class="btn btn-md btn-warning">Login <i
                            class="fas fa-sign-in-alt"></i></a>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container" style="min-height: 100vh">
        <div class="d-flex mt-4">
            <p class="font-weight-bold">Pendaftaran Mahasiswa Baru <span class="text-muted">| Polsa</span></p>
        </div>
        <div class="mt-5">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card border-0 shadow-sm rounded-md mt-4">
                        {{-- Content --}}
                        <div class="card-body">
                            <div class="d-flex rounded p-3 mb-5 bg-light w-100 justify-content-center text-center">
                                <div class="font-weight-semibold">
                                    <h4 class="text-dark font-weight-bold">
                                        <i class="fa fa-info-circle text-primary"></i> Selamat Pendaftaran Anda
                                        Berhasil!
                                    </h4>
                                    <div class="small">
                                        <p><b>Selamat</b>, pendaftaran Anda telah diterima. Data yang Anda kirim sedang
                                            dalam tahap verifikasi. <br>Kami akan mengirimi Anda email untuk
                                            memberitahukan
                                            hasil verifikasi. Mohon untuk bersabar.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-5 justify-content-center">
                                <a href="{{ url('/') }}"
                                    class="btn btn-md btn-primary text-center px-4"><b>OK</b></a>
                            </div>
                        </div>
                        {{-- ./Content --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- footer --}}
    </div>
    <footer class="d-flex justify-content-center mt-5 p-2 text-light" style="background: #162953">
        <span class="text-center text-sm">&copy; <b><a href="https://polsa.ac.id/" target="_blank"
                    class="text-decoration-none text-light">Politeknik
                    Sawunggalih Aji</a></b> | FajarCodee</span>
    </footer>
</body>

</html>
