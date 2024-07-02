@extends('admin.layouts.template')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Soal Ujian CBT</h3>
                        {{-- {{ dd($soal_cbt) }} --}}
                        <div class="card-tools">
                            <a href="#" class="btn btn-sm btn-success">Tambah
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
                                        <td>{{ $cbt->isi_soal }}</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-info">Show</a>
                                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
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
