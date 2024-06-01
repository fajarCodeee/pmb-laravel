@extends('admin.layouts.template')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Kelas</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <button type="button" class="btn btn-sm btn-success" id="btn-add">
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
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kelas as $key => $val)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $val->namaKelas . ' - ' . $val->waktu }}</td>
                                        <td><a href="javascript:void(0)" class="btn btn-sm btn-primary" id="btn-edit"
                                                data-id="{{ $val->id }}"><i class="fas fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-danger" id="btn-delete"
                                                data-id="{{ $val->id }}"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center bg-secondary" colspan="5"><em>Belum Ada Data Yang
                                                Ditambahkan!</em>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    @include('admin.menus.dataKelas._modal')
@endsection
@section('scripts')
    @include('admin.menus.dataKelas._scripts')
@endsection
