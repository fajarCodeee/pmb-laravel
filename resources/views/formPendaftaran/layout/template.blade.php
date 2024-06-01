<!doctype html>
<html lang="en">

<head>
    @include('formPendaftaran.layout.header')
</head>

<body>
    {{-- nav bar --}}
    @include('formPendaftaran.layout.navbar')


    <div class="container" style="min-height: 100vh">
        <div class="d-flex mt-4">
            <p class="font-weight-bold">Pendaftaran Mahasiswa Baru <span class="text-muted">| Polsa</span></p>
        </div>
        <div class="mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center">Formulir Pendaftaran Mahasiswa Baru Tahun Akademik 2024/2025</h4>
                    {{-- card --}}
                    @yield('content')
                    {{-- ./card --}}
                </div>
            </div>
        </div>
        {{-- footer --}}
    </div>
    @include('formPendaftaran.layout.footer')

    {{-- javascript --}}
    @include('formPendaftaran.layout.js')
    @yield('script')
</body>

</html>
