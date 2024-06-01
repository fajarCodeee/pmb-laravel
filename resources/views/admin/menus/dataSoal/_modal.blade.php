{{-- MODAL TAMBAH --}}
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">Buat Pertanyaan Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-light">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputUjian">Jenis Ujian</label>
                            <select name="inputUjian" class="form-control" id="inputUjian">
                                <option selected> -- Pilih Ujian --</option>
                                <option value="">Psikolog</option>
                                <option value="">Matematika</option>
                                <option value="">Sosial</option>
                            </select>
                            <label for="inputPertanyaan">Pertanyaan</label>
                            <input type="text" name="inputPertanyaan" id="inputPertanyaan" class="form-control"
                                placeholder="Masukan Pertanyaan">
                            <label for="opsi1">Opsi A</label>
                            <input type="text" name="opsi1" id="opsi1" class="form-control"
                                placeholder="Jawaban Opsi A">
                            <label for="opsi1">Opsi B</label>
                            <input type="text" name="opsi1" id="opsi1" class="form-control"
                                placeholder="Jawaban Opsi B">
                            <label for="opsi1">Opsi C</label>
                            <input type="text" name="opsi1" id="opsi1" class="form-control"
                                placeholder="Jawaban Opsi C">
                            <label for="opsi1">Opsi D</label>
                            <input type="text" name="opsi1" id="opsi1" class="form-control"
                                placeholder="Jawaban Opsi D">
                            <label for="opsiBenar">Opsi Benar</label>
                            <select name="opsiBenar" id="opsiBenar" class="form-control">
                                <option selected>Pilih Jawaban Benar</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

{{-- MODAL SHOW --}}
<div class="modal fade" id="modal-show">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">Data Ujian</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputUjian">Jenis Ujian</label>
                            <select name="inputUjian" class="form-control" id="inputUjian" disabled>
                                <option selected> -- Pilih Ujian --</option>
                                <option value="">Psikolog</option>
                                <option value="">Matematika</option>
                                <option value="">Sosial</option>
                            </select>
                            <label for="inputPertanyaan">Pertanyaan</label>
                            <input type="text" name="inputPertanyaan" id="inputPertanyaan" class="form-control"
                                placeholder="Masukan Pertanyaan" readonly>
                            <label for="opsi1">Opsi A</label>
                            <input type="text" name="opsi1" id="opsi1" class="form-control"
                                placeholder="Jawaban Opsi A" readonly>
                            <label for="opsi1">Opsi B</label>
                            <input type="text" name="opsi1" id="opsi1" class="form-control"
                                placeholder="Jawaban Opsi B" readonly>
                            <label for="opsi1">Opsi C</label>
                            <input type="text" name="opsi1" id="opsi1" class="form-control"
                                placeholder="Jawaban Opsi C" readonly>
                            <label for="opsi1">Opsi D</label>
                            <input type="text" name="opsi1" id="opsi1" class="form-control"
                                placeholder="Jawaban Opsi D" readonly>
                            <label for="opsiBenar">Opsi Benar</label>
                            <select name="opsiBenar" id="opsiBenar" class="form-control" disabled>
                                <option selected>Pilih Jawaban Benar</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
{{-- MODAL EDIT --}}
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title">Data Ujian</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputUjian">Jenis Ujian</label>
                            <select name="inputUjian" class="form-control" id="inputUjian">
                                <option selected> -- Pilih Ujian --</option>
                                <option value="">Psikolog</option>
                                <option value="">Matematika</option>
                                <option value="">Sosial</option>
                            </select>
                            <label for="inputPertanyaan">Pertanyaan</label>
                            <input type="text" name="inputPertanyaan" id="inputPertanyaan" class="form-control"
                                placeholder="Masukan Pertanyaan">
                            <label for="opsi1">Opsi A</label>
                            <input type="text" name="opsi1" id="opsi1" class="form-control"
                                placeholder="Jawaban Opsi A">
                            <label for="opsi1">Opsi B</label>
                            <input type="text" name="opsi1" id="opsi1" class="form-control"
                                placeholder="Jawaban Opsi B">
                            <label for="opsi1">Opsi C</label>
                            <input type="text" name="opsi1" id="opsi1" class="form-control"
                                placeholder="Jawaban Opsi C">
                            <label for="opsi1">Opsi D</label>
                            <input type="text" name="opsi1" id="opsi1" class="form-control"
                                placeholder="Jawaban Opsi D">
                            <label for="opsiBenar">Opsi Benar</label>
                            <select name="opsiBenar" id="opsiBenar" class="form-control">
                                <option selected>Pilih Jawaban Benar</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
