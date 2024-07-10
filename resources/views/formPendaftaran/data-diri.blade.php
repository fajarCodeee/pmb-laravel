@extends('formPendaftaran.layout.template')
@section('content')
    <div class="card border-0 shadow-sm rounded-md mt-4">
        {{-- Content --}}
        <div class="card-body">
            <h3 class="text-center mb-3">Data Diri</h3>
            <hr>
            <form action="{{ route('post.data.diri') }}" method="POST">
                @csrf
                {{-- nama lengkap --}}
                <x-text-input name="namaLengkap" label="Nama Lengkap" require="true"
                    value="{{ $pmb->namaLengkap ?? old('namaLengkap') }}" />
                {{-- tempat lahir --}}
                <x-text-input name="tempatLahir" label="Tempat Lahir" require="true"
                    value="{{ $pmb->tempatLahir ?? old('tempatLahir') }}" />
                {{-- tanggal lahir --}}
                <x-text-input name="tanggalLahir" label="Tanggal Lahir" require="true" type="date"
                    value="{{ $pmb->tanggalLahir ?? old('tanggalLahir') }}" />
                {{-- jenis kelamin --}}
                <x-select-input name="jenisKelamin" label="Jenis Kelamin" require="true" :options=$jenisKelamin
                    selected="{{ $pmb->jenisKelamin ?? old('jenisKelamin') }}" />
                {{-- agama --}}
                <x-select-input name="agama" label="Agama" require="true" :options=$agama
                    selected="{{ $pmb->agama ?? old('agama') }}" />
                {{-- nis --}}
                <x-text-input name="nik" label="NIK" require="true" value="{{ $pmb->nik ?? old('nik') }}" />
                {{-- nisn --}}
                {{-- <x-text-input name="nisn" label="NISN" require="true" value="{{ $pmb->nisn ?? old('nisn') }}" /> --}}
                <div class="form-group">
                    <label for="nisn">
                        NISN <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="nisn" id="nisn" value="{{ $pmb->nisn ?? old('nisn') }}"
                        class="form-control @if ($errors->has('nisn')) is-invalid @endif" placeholder="NISN">
                    <span class="font-italic font-weight-lighter" style="font-size: 14px">Cek NISN : <a
                            href="https://nisn.data.kemdikbud.go.id/index.php/Cindex/formcaribynama" target="_blank"
                            rel="noopener noreferrer">Disini</a></span>
                    <span class="invalid-feedback text-uppercase font-italic">
                        @if ($errors->has('nisn'))
                            {{ $errors->first('nisn') }}
                        @endif
                    </span>
                </div>
                {{-- npwn --}}
                <x-text-input name="npwp" label="NPWP" value="{{ $pmb->npwp ?? old('npwp') }}" />
                {{-- nisn --}}
                <x-text-input name="nomerWhatsapp" label="Nomer HP / WhatsApp" require="true"
                    value="{{ $pmb->nomerWhatsapp ?? old('nomerWhatsapp') }}" />
                {{-- nisn --}}
                <x-text-input name="email" label="Email" require="true" value="{{ $pmb->email ?? old('email') }}" />

                <i style="font-size: 14px">Catatan: tanda (<span class="text-danger font-weight-bolder">*</span>) wajib
                    diisi!</i>

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
