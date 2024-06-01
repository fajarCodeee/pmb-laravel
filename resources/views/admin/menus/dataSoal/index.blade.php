@extends('admin.layouts.template')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Soal</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                                    data-target="#modal-default">
                                    Tambah Data <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Ujian</th>
                                    <th>Pertanyan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ujian Psikologi</td>
                                    <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, quod!</td>
                                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
                                            data-target="#modal-show"><i class="fas fa-eye"></i></button>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                            data-target="#modal-edit"><i class="fas fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger"
                                            onclick="confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    @include('admin.menus.dataSoal._modal')
@endsection
