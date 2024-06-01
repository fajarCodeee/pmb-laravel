@extends('admin.layouts.template')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Prodi</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <a href="javascript:void(0)" class="btn btn-success btn-sm" id="btn-add">TAMBAH</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Program Studi</th>
                                    <th>Program Studi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="table-prodis">
                                @foreach ($prodis as $key => $prodi)
                                    <tr id="index_{{ $prodi->id }}">
                                        <td>#</td>
                                        <td>{{ $prodi->kodeProdi }}</td>
                                        <td>{{ $prodi->gelar . ' ' . $prodi->namaProdi }}</td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" id="btn-edit" data-id="{{ $prodi->id }}"
                                                class="btn btn-primary btn-sm">EDIT</a>
                                            <a href="javascript:void(0)" id="btn-delete" data-id="{{ $prodi->id }}"
                                                class="btn btn-danger btn-sm">DELETE</a>
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
    @include('admin.menus.dataProdi._modal')
@endsection
@section('scripts')
    @include('admin.menus.dataProdi._scripts')
@endsection
