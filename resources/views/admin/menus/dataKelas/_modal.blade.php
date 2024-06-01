{{-- MODAL TAMBAH --}}
<div class="modal fade" id="modal-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">Buat Kelas Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-light">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputKelas">Nama Kelas</label>
                            <input type="text" class="form-control" id="inputKelas" name="inputKelas"
                                placeholder="Nama Kelas" value="{{ old('inputKelas') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputWaktu">Waktu</label>
                            <select name="inputWaktu" class="form-control" id="inputWaktu">
                                <option selected value=""> -- Pilih Waktu Kelas --</option>
                                <option value="Pagi">Pagi</option>
                                <option value="Sore">Sore</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id="btn-save-kelas">Save</button>
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
                <h4 class="modal-title">Gelombang Pendaftaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="hidden" id="kelas_id">
                            <label for="inputKelas">Nama Kelas</label>
                            <input type="text" class="form-control" id="inputKelas-edit" name="inputKelas"
                                placeholder="Nama Kelas">
                        </div>
                        <div class="form-group">
                            <label for="inputWaktu">Waktu</label>
                            <select name="inputWaktu" class="form-control" id="inputWaktu-edit">
                                <option selected value=""> -- Pilih Waktu Kelas --</option>
                                <option value="Pagi">Pagi</option>
                                <option value="Sore">Sore</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn-save-edit">Save Changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
