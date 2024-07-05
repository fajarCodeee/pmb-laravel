<script src="{{ asset('adminlte') }}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- jQuery -->
<script src="{{ asset('adminlte') }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('adminlte') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('adminlte') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('adminlte') }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset('adminlte') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('adminlte') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('adminlte') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('adminlte') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('adminlte') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('adminlte') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('adminlte') }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminlte') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte') }}/dist/js/adminlte.js"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('adminlte') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="{{ asset('adminlte') }}/plugins/toastr/toastr.min.js"></script>

<script>
    $(document).ready(function() {
        $(document).on('click', '.accept', function() {
            // Menampilkan SweetAlert untuk konfirmasi
            // console.log($(this).data('id'));
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda akan melakukan perubahan pada data ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, lanjutkan!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {

                    // console.log('User chose to update data.');
                    var dataId = $(this).data('id');

                    $.ajax({
                        url: '/admin/update-status/pmb/' + dataId,
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            // console.log(response.message);

                            Swal.fire({
                                title: 'Berhasil!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Reload halaman
                                    location.reload();
                                }
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                            Swal.fire('Oops...',
                                'Terjadi kesalahan saat melakukan perubahan.',
                                'error');
                        }
                    });
                }
            });
        });

        $(document).on('click', '.reject', function() {
            // Menampilkan SweetAlert untuk konfirmasi
            // console.log($(this).data('id'));
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda akan melakukan perubahan pada data ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, lanjutkan!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {

                    // console.log('User chose to update data.');
                    var dataId = $(this).data('id');

                    $.ajax({
                        url: '/admin/reject/pmb/' + dataId,
                        type: 'PUT',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            // console.log('Update successful');

                            Swal.fire({
                                title: 'Berhasil!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Reload halaman
                                    location.reload();
                                }
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                            Swal.fire('Oops...',
                                'Terjadi kesalahan saat melakukan perubahan.',
                                'error');
                        }
                    });
                }
            });
        });
    });

    $(document).ready(function() {
        bsCustomFileInput.init()
    })
</script>
