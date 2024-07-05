@extends('admin.layouts.template')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mb-5">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Buat Soal Baru</h3>
                        {{-- <div class="card-tools">
                            <a href="#" class="btn btn-sm btn-success">Tambah
                                Soal</a>
                        </div> --}}
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ route('kelola-ujian-cbt.store') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="card-body table-responsive p-2">
                            <textarea name="isi_soal" id="inputSoal" rows="10" cols="80" required>
                            Tuliskan soal disini...
                        </textarea>

                            <label class="mb-2 mt-3">Buat & Pilih Jawaban Soal</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="jawaban_benar" id="A"
                                            aria-label="radio for jawaban A">
                                    </div>
                                </div>
                                <input type="text" name="jawaban[A]" id="jawaban[A]" class="form-control"
                                    placeholder="Jawaban A" required>
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="jawaban_benar" id="B"
                                            aria-label="radio for jawaban B">
                                    </div>
                                </div>
                                <input type="text" name="jawaban[B]" id="jawaban[B]" class="form-control"
                                    placeholder="Jawaban B" required>
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="jawaban_benar" id="C"
                                            aria-label="radio for jawaban C">
                                    </div>
                                </div>
                                <input type="text" name="jawaban[C]" id="jawaban[C]" class="form-control"
                                    placeholder="Jawaban C" required>
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="jawaban_benar" id="D"
                                            aria-label="radio for jawaban D">
                                    </div>
                                </div>
                                <input type="text" name="jawaban[D]" id="jawaban[D]" class="form-control"
                                    placeholder="Jawaban D" required>
                            </div>
                            <button type="submit" class="btn btn-success mt-4" id="btn-test">Submit</button>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        CKEDITOR.replace('inputSoal');
    </script>
    <script>
        let dataUjian = JSON.parse(sessionStorage.getItem('dataSoal'));
        let data = dataUjian.data

        console.log(data.jawaban_cbt);

        let jawaban_a = $('input[name="jawaban[A]"]');

        $(document).ready(function() {
            $(window).on('beforeunload', function() {
                // Hapus data dari session storage
                sessionStorage.removeItem('dataSoal');
            });

            if (dataUjian) {
                CKEDITOR.instances.inputSoal.setData(data.isi_soal);
                // set isi jawban
                jawaban_a.val(data.jawaban_cbt[0].jawaban);
                // checked radio button
                if (data.jawaban_cbt[0].is_correct == 1) {
                    $('#A').prop('checked', true)
                }
            }
        });
    </script>
@endsection
