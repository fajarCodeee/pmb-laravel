{{-- MODAL TAMBAH --}}
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">Buat Gelombang Pendaftaran Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-light">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputGelombang">Gelombang Pendaftaran</label>
                            <input type="text"
                                class="form-control @if ($errors->has('inputGelombang')) is-invalid @endif"
                                id="inputGelombang" name="inputGelombang" placeholder="Gelombang Pendaftaran"
                                value="{{ old('inputGelombang') }}">
                        </div>
                        <div class="form-group">
                            <label for="tanggalMulai">Tanggal Mulai Pendaftaran</label>
                            <input type="date"
                                class="form-control @if ($errors->has('tanggalMulai')) is-invalid @endif"
                                id="tanggalMulai" name="tanggalMulai" value="{{ old('tanggalMulai') }}">
                        </div>
                        <div class="form-group">
                            <label for="tanggalAkhir">Tanggal Akhir Pendaftaran</label>
                            <input type="date"
                                class="form-control @if ($errors->has('tanggalAkhir')) is-invalid @endif"
                                id="tanggalAkhir" name="tanggalAkhir" value="{{ old('tanggalAkhir') }}">
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="clear()">Close</button>
                <button type="button" class="btn btn-success" id="btn-save">Save</button>
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
                        {{-- ID --}}
                        <input type="hidden" id="gelombang_id">
                        <div class="form-group">
                            <label for="inputGelombang-edit">Gelombang Pendaftaran</label>
                            <input type="text" class="form-control" id="inputGelombang-edit" name="inputGelombang"
                                placeholder="Gelombang Pendaftaran">
                        </div>
                        <div class="form-group">
                            <label for="tanggalMulai-edit">Tanggal Mulai Pendaftaran</label>
                            <input type="date" class="form-control" id="tanggalMulai-edit" name="tanggalMulai">
                        </div>
                        <div class="form-group">
                            <label for="tanggalAkhir-edit">Tanggal Akhir Pendaftaran</label>
                            <input type="date" class="form-control" id="tanggalAkhir-edit" name="tanggalAkhir">
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="clear()">Close</button>
                <button type="button" class="btn btn-success" id="btn-update">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
