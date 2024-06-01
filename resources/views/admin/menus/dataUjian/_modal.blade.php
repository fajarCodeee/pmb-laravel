{{-- MODAL TAMBAH --}}
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">Buat Ujian Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-light">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputNamaUjian">Nama Ujian</label>
                            <input type="text" class="form-control" id="inputNamaUjian" name="inputNamaUjian"
                                placeholder="Nama Ujian">
                        </div>
                        <div class="form-group">
                            <label for="inputDurasi">Durasi</label>
                            <select name="inputDurasi" class="form-control" id="inputDurasi">
                                <option selected> -- Pilih Durasi --</option>
                                <option value="05:00">05:00</option>
                                <option value="10:00">10:00</option>
                                <option value="15:00">15:00</option>
                                <option value="20:00">20:00</option>
                                <option value="30:00">30:00</option>
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
                            <label for="inputNamaUjian">Nama Ujian</label>
                            <input type="text" class="form-control" id="inputNamaUjian" name="inputNamaUjian"
                                placeholder="Nama Ujian" value="Ujian Psikologi" readonly>
                        </div>
                        <div class="form-group">
                            <label for="inputDurasi">Durasi</label>
                            <select name="inputDurasi" class="form-control" id="inputDurasi" disabled>
                                <option selected> -- Pilih Durasi --</option>
                                <option value="05:00">05:00</option>
                                <option value="10:00">10:00</option>
                                <option value="15:00">15:00</option>
                                <option value="20:00">20:00</option>
                                <option value="30:00">30:00</option>
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
                            <label for="inputNamaUjian">Nama Ujian</label>
                            <input type="text" class="form-control" id="inputNamaUjian" name="inputNamaUjian"
                                placeholder="Nama Ujian">
                        </div>
                        <div class="form-group">
                            <label for="inputDurasi">Durasi</label>
                            <select name="inputDurasi" class="form-control" id="inputDurasi">
                                <option selected> -- Pilih Durasi --</option>
                                <option value="05:00">05:00</option>
                                <option value="10:00">10:00</option>
                                <option value="15:00">15:00</option>
                                <option value="20:00">20:00</option>
                                <option value="30:00">30:00</option>
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
