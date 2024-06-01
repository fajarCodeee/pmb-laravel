@extends('formPendaftaran.layout.template')
@section('content')
    <div class="card border-0 shadow-sm rounded-md mt-4">
        {{-- Content --}}
        <div class="card-body">
            <form action="{{ route('post.alamat') }}" method="POST">
                <h3 class="text-center mb-3">Alamat</h3>
                <hr>
                @csrf
                {{-- kewarganegaraan --}}
                <x-select-input name="kewarganegaraan" label="Kewarganegaraan" require="true" :options="['ID' => 'Indonesia']"
                    selected="{{ $pmb->kewarganegaraan ?? old('kewarganegaraan') }}" />

                {{-- provinsi --}}
                <div class="form-group">
                    <label for="provinsi">Provinsi <span class="text-danger">*</span></label>
                    <select name="provinsi" id="provinsi"
                        class="form-control @if ($errors->has('provinsi')) is-invalid @endif">
                        <option value="" selected> --- Pilih Provinsi --- </option>
                        @foreach ($dataProvinsi as $item)
                            <option value="{{ $item['id'] }}" {{ old('provinsi') == $item['id'] ? 'selected' : '' }}>
                                {{ $item['name'] }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('provinsi'))
                        <span class="invalid-feedback text-capitalize">{{ $errors->first('provinsi') }}</span>
                    @endif
                </div>
                {{-- kabupaten --}}
                <div class="form-group">
                    <label for="kabupaten">Kabupaten <span class="text-danger">*</span></label>
                    <select name="kabupaten" id="kabupaten"
                        class="form-control @if ($errors->has('kabupaten')) is-invalid @endif">
                        <option value="" selected> --- Pilih Provinsi Terlebih Dahulu --- </option>
                    </select>
                    @if ($errors->has('kabupaten'))
                        <span class="invalid-feedback text-capitalize">{{ $errors->first('kabupaten') }}</span>
                    @endif
                </div>
                {{-- kecamatan / kode kecamatan --}}
                <div class="form-group">
                    <label for="kecamatan">Kecamatan <span class="text-danger">*</span></label>
                    <select name="kecamatan" id="kecamatan"
                        class="form-control @if ($errors->has('kecamatan')) is-invalid @endif">
                        <option value="" selected> --- Pilih Kabupaten Terlebih Dahulu --- </option>
                    </select>
                    @if ($errors->has('kecamatan'))
                        <span class="invalid-feedback text-capitalize">{{ $errors->first('kecamatan') }}</span>
                    @endif
                </div>


                <div class="row">
                    <div class="col-md-6">
                        {{-- kelurahan --}}
                        <x-text-input name="kelurahan" label="Kelurahan" value="{{ $pmb->kelurahan ?? old('kelurahan') }}"
                            require="true" />
                        {{-- jalan --}}
                        <x-text-input name="jalan" label="Jalan" value="{{ $pmb->jalan ?? old('jalan') }}"
                            require="true" />
                        {{-- jenis tinggal --}}
                        <x-select-input name="jenisTinggal" label="Jenis Tinggal" :options=$jenis_tinggal
                            selected="{{ $pmb->jenisTinggal ?? old('jenisTinggal') }}" require="true" />
                    </div>
                    <div class="col-md-6">
                        <x-text-input name="dusun" label="Dusun" value="{{ $pmb->dusun ?? old('dusun') }}"
                            require="true" />
                        <div class="row">
                            <div class="col-md-6">
                                <x-text-input name="rt" label="RT" value="{{ $pmb->rt ?? old('rt') }}"
                                    require="true" />
                            </div>
                            <div class="col-md-6">
                                <x-text-input name="rw" label="RW" value="{{ $pmb->rw ?? old('rw') }}"
                                    require="true" />
                            </div>
                        </div>
                        <x-text-input name="kodePos" label="Kode Pos" value="{{ $pmb->kodePos ?? old('kodePos') }}"
                            require="true" />
                    </div>
                </div>


                <i style="font-size: 14px">Catatan: tanda (<span class="text-danger font-weight-bolder">*</span>) wajib
                    diisi!</i>

                {{-- btn next/prevous --}}
                <div class="d-flex mt-5 justify-content-between">
                    <a href="{{ route('form.pendaftaran.data-diri') }}"
                        class="btn btn-md btn-secondary text-center px-4"><b>
                            << Back </b></a>
                    <button type="submit" class="btn btn-md btn-primary text-center px-4"><b>
                            Next >> </b></button>

                </div>
            </form>
        </div>
        {{-- ./Content --}}
    </div>
@endsection
@section('script')
    @include('formPendaftaran.form-alamat._script')
@endsection
