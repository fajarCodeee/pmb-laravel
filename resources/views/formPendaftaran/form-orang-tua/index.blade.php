@extends('formPendaftaran.layout.template')
@section('content')
    <div class="card border-0 shadow-sm rounded-md mt-4">
        {{-- Content --}}
        <div class="card-body">
            <form action="{{ route('post.data-orangtua') }}" method="POST">
                <h3 class="text-center mb-3">Data Orang Tua & Wali</h3>
                <h4 class="text-center mb-3 font-weight-bolder">Data Ayah</h4>
                <hr>
                @csrf
                {{-- nik --}}
                <x-text-input name="nikAyah" label="NIK Ayah" require="true" value="{{ $pmb->nikAyah ?? old('nikAyah') }}" />
                {{-- nama lengkap --}}
                <x-text-input name="namaAyah" label="Nama Lengkap Ayah" require="true"
                    value="{{ $pmb->namaAyah ?? old('namaAyah') }}" />
                {{-- tempat lahir --}}
                <x-text-input name="tempatLahirAyah" label="Tempat Lahir Ayah" require="true"
                    value="{{ $pmb->tempatLahirAyah ?? old('tempatLahirAyah') }}" />
                {{-- tanggal lahir --}}
                <x-text-input name="tanggalLahirAyah" label="Tanggal Lahir Ayah" require="true" type="date"
                    value="{{ $pmb->tanggalLahirAyah ?? old('tanggalLahirAyah') }}" />
                {{-- pendidikan --}}
                <x-select-input name="pendidikanAyah" label="Pendidikan Ayah" require="true" :options=$pendidikan
                    selected="{{ $pmb->pendidikanAyah ?? old('pendidikanAyah') }}" />
                {{-- pekerjaan --}}
                <x-select-input name="pekerjaanAyah" label="Pekerjaan Ayah" require="true" :options=$pekerjaan
                    selected="{{ $pmb->pekerjaanAyah ?? old('pekerjaanAyah') }}" />
                {{-- penghasilan --}}
                <x-select-input name="penghasilanAyah" label="Penghasilan Ayah" require="true" :options=$penghasilan
                    selected="{{ $pmb->penghasilanAyah ?? old('penghasilanAyah') }}" />

                <h4 class="text-center mb-3 font-weight-bolder">Data Ibu</h4>
                <hr>

                {{-- nik --}}
                <x-text-input name="nikIbu" label="NIK Ibu" require="true" value="{{ $pmb->nikIbu ?? old('nikIbu') }}" />
                {{-- nama lengkap --}}
                <x-text-input name="namaIbu" label="Nama Lengkap Ibu" require="true"
                    value="{{ $pmb->namaIbu ?? old('namaIbu') }}" />
                {{-- tempat lahir --}}
                <x-text-input name="tempatLahirIbu" label="Tempat Lahir Ibu" require="true"
                    value="{{ $pmb->tempatLahirIbu ?? old('tempatLahirIbu') }}" />
                {{-- tanggal lahir --}}
                <x-text-input name="tanggalLahirIbu" label="Tanggal Lahir Ibu" require="true" type="date"
                    value="{{ $pmb->tanggalLahirIbu ?? old('tanggalLahirIbu') }}" />
                {{-- pendidikan --}}
                <x-select-input name="pendidikanIbu" label="Pendidikan Ibu" require="true" :options=$pendidikan
                    selected="{{ $pmb->pendidikanIbu ?? old('pendidikanIbu') }}" />
                {{-- pekerjaan --}}
                <x-select-input name="pekerjaanIbu" label="Pekerjaan Ibu" require="true" :options=$pekerjaan
                    selected="{{ $pmb->pekerjaanIbu ?? old('pekerjaanIbu') }}" />
                {{-- penghasilan --}}
                <x-select-input name="penghasilanIbu" label="Penghasilan Ibu" require="true" :options=$penghasilan
                    selected="{{ $pmb->penghasilanIbu ?? old('penghasilanIbu') }}" />

                <h4 class="text-center mb-3 font-weight-bolder">Data Wali</h4>
                <hr>

                {{-- nama lengkap --}}
                <x-text-input name="namaLengkapWali" label="Nama Lengkap Wali" />
                {{-- tempat lahir --}}
                <x-text-input name="tempatLahirWali" label="Tempat Lahir Wali" />
                {{-- tanggal lahir --}}
                <x-text-input name="tanggalLahirWali" label="Tanggal Lahir Wali"type="date" />
                {{-- pendidikan --}}
                <x-select-input name="pendidikanWali" label="Pendidikan Wali" :options=$pendidikan />
                {{-- pekerjaan --}}
                <x-select-input name="pekerjaanWali" label="Pekerjaan Wali" :options=$pekerjaan />
                {{-- penghasilan --}}
                <x-select-input name="penghasilanWali" label="Penghasilan Wali" :options=$penghasilan />


                <i style="font-size: 14px">Catatan: tanda (<span class="text-danger font-weight-bolder">*</span>) wajib
                    diisi!</i>

                {{-- btn next/prevous --}}
                <div class="d-flex mt-5 justify-content-between">
                    <a href="{{ route('form.pendaftaran.alamat') }}" class="btn btn-md btn-secondary text-center px-4"><b>
                            << Back</b></a>
                    <button type="submit" class="btn btn-md btn-primary text-center px-4"><b>
                            Next >></b></button>

                </div>
            </form>
        </div>
        {{-- ./Content --}}
    </div>
@endsection
