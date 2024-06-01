@extends('formPendaftaran.layout.template')
@section('content')
    <div class="card border-0 shadow-sm rounded-md mt-4">
        {{-- Content --}}
        <div class="card-body">
            <form action="{{ route('post.pendaftaran.prodi') }}" method="POST">
                <h3 class="text-center mb-3">Pilih Program Studi dan Kelas</h3>
                <hr>
                {{-- prodi --}}
                {{-- <x-select-input name="prodi" label="Program Studi" require="true" :options=$prodi /> --}}
                @csrf
                <div class="form-group">
                    <label for="prodi_id">Program Studi <span class="text-danger">*</span></label>
                    <select name="prodi_id" id="prodi_id" class="form-control">
                        <option value="" selected> --- Pilih prodi --- </option>
                        @foreach ($prodi as $item)
                            <option value="{{ $item->id }}" {{ old('prodi_id') == $item->id ? 'selected' : '' }}>
                                {{ $item->gelar . ' - ' . $item->namaProdi }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('prodi_id'))
                        <span class="text-danger text-capitalize" style="font-size: 14px">
                            {{ $errors->first('prodi_id') }}
                        </span>
                    @endif
                </div>
                {{-- kelas --}}
                {{-- <x-select-input name="kelas" label="Kelas" require="true" :options=$kelas /> --}}
                <div class="form-group">
                    <label for="kelas_id">Kelas <span class="text-danger">*</span></label>
                    <select name="kelas_id" id="kelas_id" class="form-control">
                        <option value="" selected>--- Pilih Kelas ---</option>
                        @foreach ($kelas as $item)
                            <option value="{{ $item->id }}" {{ old('kelas_id') == $item->id ? 'selected' : '' }}>
                                {{ $item->namaKelas . ' - ' . $item->waktu }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('kelas_id'))
                        <span class="text-danger text-capitalize" style="font-size: 14px;">
                            {{ $errors->first('kelas_id') }}
                        </span>
                    @endif
                </div>


                <i style="font-size: 14px">Catatan: tanda (<span class="text-danger font-weight-bolder">*</span>) wajib
                    diisi!</i>

                {{-- btn next/prevous --}}
                <div class="d-flex mt-5 justify-content-between">
                    <a href="{{ route('form.pendaftaran.data-orangtua') }}"
                        class="btn btn-md btn-secondary text-center px-4"><b>
                            << Back</b></a>
                    <button type="submit" class="btn btn-md btn-primary text-center px-4"><b>
                            Next >></b></button>

                </div>
            </form>
        </div>
        {{-- ./Content --}}
    </div>
@endsection
