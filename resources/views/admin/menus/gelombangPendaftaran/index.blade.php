@extends('admin.layouts.template')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Gelombang Pendaftaran</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                {{-- @dd($gelombang) --}}
                                <button type="button" id="btn-tambah" class="btn btn-sm btn-success">
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
                                    <th>Gelombang</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Akhir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($gelombang as $key => $val)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $val->namaGelombang }}</td>
                                        <td>{{ $val->tanggalMulai }}</td>
                                        <td>{{ $val->tanggalAkhir }}</td>
                                        <td>
                                            <a href="javascript:void(0)" id="btn-edit" data-id="{{ $val->id }}"
                                                class="btn btn-primary btn-sm">EDIT</a>
                                            <a href="javascript:void(0)" id="btn-delete" data-id="{{ $val->id }}"
                                                class="btn btn-danger btn-sm">DELETE</a>
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
    @include('admin.menus.gelombangPendaftaran._modal')
@endsection
@section('scripts')
    @include('admin.menus.gelombangPendaftaran._scripts')
@endsection
