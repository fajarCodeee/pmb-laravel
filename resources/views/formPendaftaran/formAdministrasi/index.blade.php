@extends('formPendaftaran.layout.template')

@section('content')
    <div class="card border-0 shadow-sm rounded-md mt-4">
        {{-- Content --}}
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h3 class="text-center mb-3"> Upload Dokumen</h3>
            <hr>
            <form action="{{ route('post.pendaftaran.administrasi') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ktp"> Upload KTP <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file"
                                        class="custom-file-input @if ($errors->has('ktp')) is-invalid @endif"
                                        id="ktp" value="{{ old('ktp') }}" name="ktp">
                                    <label class="custom-file-label" for="ktp"> Upload KTP</label>
                                </div>
                            </div>
                            {{-- @if ($errors->has('ktp'))
                                <span class="text-danger">{{ $errors->first('ktp') }}</span>
                            @endif --}}
                        </div>
                        <div class="form-group">
                            <label for="kk"> Upload KK <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file"
                                        class="custom-file-input @if ($errors->has('kk')) is-invalid @endif"
                                        id="kk" value="{{ old('kk') }}" name="kk">
                                    <label class="custom-file-label" for="kk"> Upload KK</label>
                                </div>
                            </div>
                            {{-- @if ($errors->has('kk'))
                                <span class="text-danger">{{ $errors->first('kk') }}</span>
                            @endif --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ijazah"> Upload Ijazah <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file"
                                        class="custom-file-input @if ($errors->has('ijazah')) is-invalid @endif"
                                        id="ijazah" value="{{ old('ijazah') }}" name="ijazah">
                                    <label class="custom-file-label" for="ijazah"> Upload Ijazah</label>
                                </div>
                            </div>
                            {{-- @if ($errors->has('ijazah'))
                                <span class="text-danger">{{ $errors->first('ijazah') }}</span>
                            @endif --}}
                        </div>
                        <div class="form-group">
                            <label for="foto"> Upload Foto 3x4 <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file"
                                        class="custom-file-input @if ($errors->has('foto')) is-invalid @endif"
                                        id="foto" value="{{ old('foto') }}" name="foto">
                                    <label class="custom-file-label" for="foto"> Upload Foto 3x4</label>
                                </div>
                            </div>
                            {{-- @if ($errors->has('foto'))
                                <span class="text-danger">{{ $errors->first('foto') }}</span>
                            @endif --}}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="akte"> Upload Akte Kelahiran <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file"
                                class="custom-file-input @if ($errors->has('akte')) is-invalid @endif" id="akte"
                                value="{{ old('akte') }}" name="akte">
                            <label class="custom-file-label" for="akte"> Upload Akte Kelahiran</label>
                        </div>
                    </div>
                    {{-- @if ($errors->has('akte'))
                        <span class="text-danger">{{ $errors->first('akte') }}</span>
                    @endif --}}
                </div>
                <i style="font-size: 14px">Catatan: tanda (<span class="text-danger font-weight-bolder">*</span>) wajib
                    diisi! Format file(.jpg, .jpeg, .png, .pdf) dengan. Ukuran file maks. 2MB</i>

                {{-- btn next/previous --}}
                <div class="d-flex mt-5 justify-content-between">
                    <a href="{{ route('form.pendaftaran.prodi') }}" class="btn btn-md btn-secondary text-center px-4">
                        << Back</a>
                            <button type="submit" class="btn btn-md btn-primary text-center px-4 font-weight-bolder">Kirim
                                Data</button>
                </div>
            </form>
        </div>
        {{-- ./Content --}}
    </div>
@endsection

@section('script')
    <script>
        $(function() {
            $('[data-toggle="popover"]').popover();
            bsCustomFileInput.init();
        });
    </script>
    <!-- bs-custom-file-input -->
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
@endsection
