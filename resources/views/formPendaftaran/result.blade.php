@extends('formPendaftaran.layout.template')
@section('content')
    <div class="card border-0 shadow-sm rounded-md mt-4">
        {{-- Content --}}
        <div class="card-body">
            <h3 class="text-center mb-3">result</h3>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center">Data Diri</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="text-uppercase" style="max-width: 70px; overflow-x: auto;">Nama Lengkap</th>
                            <td>{{ $dataResult->namaLengkap }}</td>
                        </tr>
                        <tr>
                            <th class="text-uppercase" style="max-width: 70px; overflow-x: auto;">Tempat Lahir</th>
                            <td>{{ $dataResult->tempatLahir }}</td>
                        </tr>
                        <tr>
                            <th class="text-uppercase" style="max-width: 70px; overflow-x: auto;">Tanggal Lahir</th>
                            <td>{{ $dataResult->tanggalLahir }}</td>
                        </tr>
                        <tr>
                            <th class="text-uppercase" style="max-width: 70px; overflow-x: auto;">Jenis Kelamin</th>
                            <td>
                                {{ $dataResult->jenisKelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                        </tr>
                        <tr>
                            <th class="text-uppercase" style="max-width: 70px; overflow-x: auto;">Agama</th>
                            <td>{{ $dataResult->agama }}</td>
                        </tr>
                        <tr>
                            <th class="text-uppercase" style="max-width: 70px; overflow-x: auto;">Nomer WhatsApp</th>
                            <td>{{ $dataResult->nomerWhatsapp }}</td>
                        </tr>
                        <tr>
                            <th class="text-uppercase" style="max-width: 70px; overflow-x: auto;">Email</th>
                            <td>{{ $dataResult->email }}</td>
                        </tr>
                        <tr>
                            <th class="text-uppercase" style="max-width: 70px; overflow-x: auto;">NIK</th>
                            <td>{{ $dataResult->nik }}</td>
                        </tr>
                        <tr>
                            <th class="text-uppercase" style="max-width: 70px; overflow-x: auto;">NISN</th>
                            <td>{{ $dataResult->nisn }}</td>
                        </tr>
                        <tr>
                            <th class="text-uppercase" style="max-width: 70px; overflow-x: auto;">npwp</th>
                            <td>
                                {{ $dataResult->npwp != null ? $dataResult->npwp : '-' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="text-uppercase" style="max-width: 70px; overflow-x: auto;">Kewarganegaraan</th>
                            <td>{{ $dataResult->kewarganegaraan }}</td>
                        </tr>
                        <tr>
                            <th class="text-uppercase" style="max-width: 70px; overflow-x: auto;">Kecamatan</th>
                            <td>{{ $dataResult->kecamatan }}</td>
                        </tr>
                        <tr>
                            <th class="text-uppercase" style="max-width: 70px; overflow-x: auto;">Kelurahan</th>
                            <td>{{ $dataResult->kelurahan }}</td>
                        </tr>
                        <tr>
                            <th class="text-uppercase" style="max-width: 70px; overflow-x: auto;">dusun</th>
                            <td>{{ $dataResult->dusun }}</td>
                        </tr>
                        <tr>
                            <th class="text-uppercase" style="max-width: 70px; overflow-x: auto;">rt/rw</th>
                            <td>{{ $dataResult->rt . '/' . $dataResult->rw }}</td>
                        </tr>
                        <tr>
                            <th class="text-uppercase" style="max-width: 70px; overflow-x: auto;">jalan</th>
                            <td>{{ $dataResult->jalan }}</td>
                        </tr>
                        <tr>
                            <th class="text-uppercase" style="max-width: 70px; overflow-x: auto;">kode pos</th>
                            <td>{{ $dataResult->kodePos }}</td>
                        </tr>
                        <tr>
                            <th class="text-uppercase" style="max-width: 70px; overflow-x: auto;">Jenis Tinggal</th>
                            <td>{{ $dataResult->jenisTinggal != null ? $dataResult->jenisTinggal : '-' }}</td>
                        </tr>
                        <tr>
                            <th class="text-uppercase" style="max-width: 70px; overflow-x: auto;">Telp Rumah</th>
                            <td>{{ $dataResult->telpRumah != null ? $dataResult->telpRumah : '-' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>



            {{ $dataResult }}

            {{-- btn next/prevous --}}
            <div class="d-flex mt-5 justify-content-between">
                <a href="{{ route('form.pendaftaran.welcome') }}" class="btn btn-md btn-secondary text-center px-4"><b>
                        << Back</b></a>
                <button type="submit" class="btn btn-md btn-primary text-center px-4 font-weight-bolder"> Next >>
                </button>
            </div>
            </form>
        </div>
        {{-- ./Content --}}
    </div>
@endsection
