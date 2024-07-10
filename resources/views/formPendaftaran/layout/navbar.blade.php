<nav class="navbar navbar-expand-lg navbar-dark p-3" style="background: #162953">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('adminlte/dist/img/logo-polsa.png') }}" width="30" height="30"
                class="d-inline-block align-top" alt="Logo Polsa">
            <img src="{{ asset('adminlte/dist/img/logo.png') }}" alt="" width="150">
            {{-- <span class="font-lighter text-uppercase">politeknik sawunggalih aji</span> --}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <a href="{{ url('/admin/home/') }}" class="btn btn-md btn-warning">Login <i
                        class="fas fa-sign-in-alt"></i></a>
            </ul>
        </div>
    </div>
</nav>
