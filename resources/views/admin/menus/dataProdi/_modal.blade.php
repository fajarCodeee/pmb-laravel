{{-- MODAL TAMBAH --}}
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">Buat Program Studi Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-light">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputKodeProdi">Kode Program Studi</label>
                            <input type="text" class="form-control" id="inputKode" placeholder="Kode Program Studi">
                        </div>
                        <div class="form-group">
                            <label for="inputNamaProdi">Nama Program Studi</label>
                            <input type="text" class="form-control" id="inputProdi" placeholder="Nama Program Studi">
                        </div>
                        <div class="form-group">
                            <label for="inputGelar">Gelar</label>
                            <select class="form-control" id="inputGelar">
                                <option selected value=""> -- Pilih Gelar --</option>
                                <option value="D3">D3</option>
                                <option value="D4/S1">D4/S1</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id="btn-add-prodi">Save</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
{{-- Modal Edit --}}
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">Edit Program Studi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-light">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card-body">
                        <input type="hidden" id="prodi_id">
                        <div class="form-group">
                            <label for="inputKodeProdi">Kode Program Studi</label>
                            <input type="text" class="form-control" id="inputKode-edit"
                                placeholder="Kode Program Studi">
                        </div>
                        <div class="form-group">
                            <label for="inputNamaProdi">Nama Program Studi</label>
                            <input type="text" class="form-control" id="inputProdi-edit"
                                placeholder="Nama Program Studi">
                        </div>
                        <div class="form-group">
                            <label for="inputGelar">Gelar</label>
                            <select class="form-control" id="inputGelar-edit">
                                <option selected value=""> -- Pilih Gelar --</option>
                                <option value="D3">D3</option>
                                <option value="D4/S1">D4/S1</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id="btn-edit-prodi">Save Change</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
