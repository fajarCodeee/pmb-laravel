@extends('formPendaftaran.layout.template')
@section('content')
    @if ($errors->has('bukti_tf'))
        <div class="alert alert-danger">
            {{ $errors->first('bukti_tf') }}
        </div>
    @endif
    <div class="card border-0 shadow-sm rounded-md mt-4">
        {{-- Content --}}
        <form action="{{ route('post.tf') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="text-dark font-weight-bold text-center">
                    Selamat Pendaftaran Anda Berhasil!
                </h4>
                <hr>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="2" class="text-center">Bio Data Anda</th>
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
                                <td>{{ $agama[0]->name }}</td>
                                {{-- {{ dd($agama) }} --}}
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
                            <tr>
                                <th>Program Pilihan :</th>
                                <td>{{ $dataResult->prodi->namaProdi }}</td>
                            </tr>
                            <tr>
                                <th>Kelas Pilihan :</th>
                                <td>{{ $dataResult->kelas->namaKelas . ' - ' . $dataResult->kelas->waktu }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex rounded p-3 mb-5 bg-light">
                    <div class="font-weight-semibold">
                        <div class="content">
                            <p>Terima kasih telah mengisi formulir pendaftaran. Kami senang menyambut Anda sebagai calon
                                mahasiswa
                                baru di
                                <strong>Politeknik Sawunggalih Aji</strong>.
                            </p>
                            <p>Berikut adalah informasi administrasi tambahan yang perlu Anda ketahui:</p>
                            <ul>
                                <li><strong>Biaya Pendaftaran:</strong> Rp. {{ $biayaPendaftaran->jumlah_administrasi }}
                                </li>
                                {{-- <li><strong>Biaya Registrasi:</strong> Rp. 1,000,000</li> --}}
                            </ul>
                            <p>Anda dapat melakukan pembayaran biaya pendaftaran dengan transfer ke <strong>salah
                                    satu</strong> nomer rekening berikut :
                            </p>

                            <ul>
                                {{-- {{ dd($biayaPendaftaran) }} --}}
                                @foreach ($bank as $pendaftaran)
                                    <li>{!! '<b>' . $pendaftaran->nama_bank . '</b> - ' . $pendaftaran->no_rekening !!}</li>
                                @endforeach

                            </ul>
                            <p>Lampirkan bukti transfer disini untuk melanjutkan:</p>
                            {{-- form upload bukti --}}
                            @method('POST')
                            <input type="hidden" name="form_id" value="{{ $dataResult->id }}">
                            <input type="hidden" name="nama_cmb" value="{{ $dataResult->namaLengkap }}">
                            <div class="form-group">
                                <label for="bukti_tf">Upload Bukti Transfer</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input {{ $errors->has('bukti_tf') ? 'is-invalid' : '' }}"
                                            id="bukti_tf" name="bukti_tf" value="{{ old('bukti_tf') }}">
                                        <label class="custom-file-label" for="bukti_tf">{{ old('bukti_tf') }}</label>
                                    </div>
                                </div>
                                <p class="small text-danger font-weight-semibold">* Anda dapat melakukannya nanti, Kami
                                    telah
                                    mengirimkan tautan untuk mengupload
                                    bukti administrasi melalui email anda</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- btn next/prevous --}}
                <div class="d-flex mt-5 justify-content-end">
                    <button type="submit" class="btn btn-md btn-primary text-center px-4 font-weight-bolder"> Kirim
                    </button>
                </div>
            </div>
        </form>

        {{-- ./Content --}}
    </div>
@endsection
