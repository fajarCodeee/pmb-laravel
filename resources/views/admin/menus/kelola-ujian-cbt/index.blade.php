@extends('admin.layouts.template')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mb-5">
                    <div class="card-header">
                        <h3 class="card-title">Data Soal Ujian CBT</h3>
                        <div class="card-tools">
                            <a href="{{ url('/admin/kelola-ujian-cbt/create-cbt') }}" class="btn btn-sm btn-success">Tambah
                                Soal</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pertanyaan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($soal_cbt as $i => $cbt)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{!! $cbt->isi_soal !!}</td>
                                        <td>
                                            <button type=button class="btn btn-sm btn-info" data-id="{{ $cbt->id }}"
                                                id="btn-show">Lihat</button>
                                            <button type=button class="btn btn-sm btn-warning"
                                                data-id="{{ $cbt->id }}">Edit</button>
                                            <button type=button class="btn btn-sm btn-danger"
                                                data-id="{{ $cbt->id }}">Danger</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('body').on('click', '#btn-show', function() {
                // alert($(this).data('id'));

                let id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    url: "/admin/kelola-ujian-cbt/" + id,
                    // data: "data",
                    // dataType: "dataType",
                    success: function(response) {
                        console.log(response);
                        sessionStorage.setItem('dataSoal', JSON.stringify(response));

                        window.location.href = "{{ route('kelola-ujian-cbt.create') }}";
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
@endsection
