@extends('admin.layouts.template')

@section('content')
    <div class="container-fluid">
        {{-- {{ dd($mahasiswa) }} --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Calon Mahasiswa Baru</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Prodi</th>
                                    <th>Kelas</th>
                                    <th>Email</th>
                                    <th>WhatsApp</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($mahasiswa as $mhs)
                                    <tr>
                                        <td>{{ $mhs->namaLengkap }}</td>
                                        <td>{{ $mhs->nim }}</td>
                                        <td>{{ $mhs->prodi->namaProdi }}</td>
                                        <td>{{ $mhs->kelas->namaKelas . ' - ' . $mhs->kelas->waktu }}</td>
                                        <td>{{ $mhs->email }}</td>
                                        <td>{{ $mhs->nomerWhatsapp }}</td>
                                        <td>
                                            @if ($mhs->status == null || $mhs->status == 0)
                                                <span class="badge badge-warning">Menunggu Konfirmasi</span>
                                            @elseif ($mhs->status == 1)
                                                <span class="badge badge-success">Terkonfirmasi</span>
                                            @elseif ($mhs->status == -1)
                                                <span class="badge badge-danger">DiTolak</span>
                                            @endif
                                        </td>
                                        <td><a href="#" class="btn btn-warning btn-sm">Cek Data</a> <button
                                                type="button" class="btn btn-sm btn-success accept"
                                                data-id="{{ $mhs->id }}"
                                                {{ $mhs->status == 1 || $mhs->status == -1 ? 'disabled' : '' }}>Terima</button>
                                            <button type="button" class="btn btn-sm btn-danger reject"
                                                data-id="{{ $mhs->id }}"
                                                {{ $mhs->status == 1 || $mhs->status == -1 ? 'disabled' : '' }}>Tolak</button>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
