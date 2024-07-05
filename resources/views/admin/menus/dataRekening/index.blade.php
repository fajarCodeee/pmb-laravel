@extends('admin.layouts.template')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $title }}</h3>
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
                                    <th>Jenis Administrasi</th>
                                    <th>Nama Bank</th>
                                    <th>Nomer Rekening</th>
                                    <th>Nama Pemilik</th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($rekening as $item)
                                    <tr>
                                        <td>{{ $item->jenis_administrasi }}</td>
                                        <td>{{ $item->nama_bank }}</td>
                                        <td>{{ $item->no_rekening }}</td>
                                        <td>{{ $item->nama_pemilik }}</td>
                                        <td>Rp. {{ $item->jumlah_administrasi }}</td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-primary" id="btn-edit"
                                                data-id="{{ $item->id }}"><i class="fas fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-danger" id="btn-delete"
                                                data-id="{{ $item->id }}"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center font-weight-bolder" colspan="5"><em>Belum Ada Data Yang
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
    @include('admin.menus.dataRekening._modal')
@endsection
@section('scripts')
    @include('admin.menus.dataRekening._scripts')
@endsection
