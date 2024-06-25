<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">title</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- data diri --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            {{-- <div class="card-header">
                                <h3 class="card-title">Expandable Table Tree</h3>
                            </div> --}}
                            <!-- ./card-header -->
                            <div class="card-body p-0">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr data-widget="expandable-table" aria-expanded="false" data-name="data-diri">
                                            <td class="font-weight-bolder">
                                                <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                                Data Diri
                                            </td>
                                        </tr>
                                        <tr class="expandable-body">
                                            <td>
                                                <div class="p-0">
                                                    <table class="table table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <th>Nama Lengkap</th>
                                                                <td id="namaLengkap"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-widget="expandable-table" aria-expanded="false" data-name="alamat">
                                            <td class="font-weight-bolder">
                                                <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                                Alamat
                                            </td>
                                        </tr>
                                        <tr class="expandable-body">
                                            <td>
                                                <div class="p-0">
                                                    <table class="table table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <th>Jalan</th>
                                                                <td id="jalan"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Desa</th>
                                                                <td id="kelurahan"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Dusun</th>
                                                                <td id="dusun"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>RT</th>
                                                                <td id="rt"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>RW</th>
                                                                <td id="rw"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
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
<!-- /.modal -->
