@extends('formPendaftaran.layout.template')
@section('content')
    <div class="card border-0 shadow-sm rounded-md mt-4">
        {{-- Content --}}
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
                            <li><strong>Biaya Pendaftaran:</strong> Rp. 500,000</li>
                            <li><strong>Biaya Registrasi:</strong> Rp. 1,000,000</li>
                        </ul>
                        <p>Anda dapat melakukan pembayaran biaya pendaftaran dan registrasi sekarang atau nanti. Untuk
                            kenyamanan
                            Anda, kami menyediakan dua opsi pembayaran:</p>
                        <ul>
                            <li>Pembayaran Sekarang: Anda dapat langsung melakukan pembayaran melalui rekening di bawah ini.
                                <ul>
                                    <li>
                                        BNI - xxx xxxx xxxx [Nama Pemilik Rekening]
                                    </li>
                                    <li>
                                        BNI - xxx xxxx xxxx [Nama Pemilik Rekening]
                                    </li>
                                </ul>
                            </li>
                            <li>Pembayaran Nanti: Anda dapat melakukan pembayaran saat masa perkuliahan dimulai nanti.
                            </li>
                        </ul>
                        <p>
                            Untuk waktu perkuliahan dimulai Kami akan memberitahukan Anda melalui Nomer WhatsApp / Email.
                            Untuk informasi lebih lanjut, silahkan hubungi melalui pesan <a href="#">WhatsApp
                                Kami</a>.
                        </p>
                    </div>
                </div>
            </div>

            {{-- btn next/prevous --}}
            <div class="d-flex mt-5 justify-content-between">
                {{-- <a href="{{ route('form.pendaftaran.welcome') }}" class="btn btn-md btn-secondary text-center px-4"><b>
                        << Back</b></a>
                <button type="submit" class="btn btn-md btn-primary text-center px-4 font-weight-bolder"> Next >>
                </button> --}}
            </div>
            </form>
        </div>
        {{-- ./Content --}}
    </div>
@endsection
