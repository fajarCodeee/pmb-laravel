<script>
    // CREATE
    $('body').on('click', '#btn-tambah', function() {
        $('#modal-default').modal('show')
    })
    $('#btn-save').click(() => {
        let namaGelombang = $('#inputGelombang').val()
        let tanggalMulai = $('#tanggalMulai').val()
        let tanggalAkhir = $('#tanggalAkhir').val()
        let token = $("meta[name='csrf-token']").attr("content")

        let URL = '/admin/gelombang-pendaftaran'

        $.ajax({
            url: URL,
            type: "POST",
            cache: false,
            data: {
                "namaGelombang": namaGelombang,
                "tanggalMulai": tanggalMulai,
                "tanggalAkhir": tanggalAkhir,
                "_token": token
            },
            success: (response) => {
                // menampilkan pesan sukses
                Swal.fire({
                    type: 'success',
                    icon: 'success',
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 3000
                });
                // close modal
                $('#modal-default').modal('hide')
                // clear field
                $('#inputGelombang').val('')
                $('#tanggalMulai').val('')
                $('#tanggalAkhir').val('')
                // reload page
                setTimeout(() => {
                    location.reload()
                }, 1500);
            },
            error: (error) => {
                // console.log(error.responseJSON.errors)
                if (error.responseJSON.errors.namaGelombang[0]) {
                    $('#inputGelombang').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.namaGelombang[0])
                        .addClass('invalid-feedback')
                    $('#inputGelombang').after(message)
                }
                if (error.responseJSON.errors.tanggalMulai[0]) {
                    $('#tanggalMulai').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.tanggalMulai[0])
                        .addClass('invalid-feedback')
                    $('#tanggalMulai').after(message)
                }
                if (error.responseJSON.errors.tanggalAkhir[0]) {
                    $('#tanggalAkhir').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.tanggalAkhir[0])
                        .addClass('invalid-feedback')
                    $('#tanggalAkhir').after(message)
                }
            }
        })
    })
    // UPDATE
    $('body').on('click', '#btn-edit', function() {
        let gelombang_id = $(this).data('id')
        $.ajax({
            url: `/admin/gelombang-pendaftaran/${gelombang_id}`,
            type: "GET",
            cache: false,
            success: (response) => {
                $('#modal-edit').modal('show')
                $('#inputGelombang-edit').val(response.data.namaGelombang)
                $('#tanggalMulai-edit').val(response.data.tanggalMulai)
                $('#tanggalAkhir-edit').val(response.data.tanggalAkhir)
                $('#gelombang_id').val(response.data.id)
            }
        })
    })

    $('#btn-update').click(() => {
        let namaGelombang = $('#inputGelombang-edit').val()
        let tanggalMulai = $('#tanggalMulai-edit').val()
        let tanggalAkhir = $('#tanggalAkhir-edit').val()
        let gelombang_id = $('#gelombang_id').val()
        let token = $("meta[name='csrf-token']").attr("content")

        $.ajax({
            url: `/admin/gelombang-pendaftaran/${gelombang_id}`,
            type: "PUT",
            cahce: false,
            data: {
                "namaGelombang": namaGelombang,
                "tanggalMulai": tanggalMulai,
                "tanggalAkhir": tanggalAkhir,
                "_token": token
            },
            success: (response) => {
                Swal.fire({
                    type: 'success',
                    icon: 'success',
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 3000
                });
                // close modal
                $('#modal-edit').modal('hide')
                // reload page
                setTimeout(() => {
                    location.reload()
                }, 1500);
            },
            error: (error) => {
                if (error.responseJSON.errors.namaGelombang[0]) {
                    $('#inputGelombang').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.namaGelombang[0])
                        .addClass('invalid-feedback')
                    $('#inputGelombang').after(message)
                }
                if (error.responseJSON.errors.tanggalMulai[0]) {
                    $('#tanggalMulai').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.tanggalMulai[0])
                        .addClass('invalid-feedback')
                    $('#tanggalMulai').after(message)
                }
                if (error.responseJSON.errors.tanggalAkhir[0]) {
                    $('#tanggalAkhir').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.tanggalAkhir[0])
                        .addClass('invalid-feedback')
                    $('#tanggalAkhir').after(message)
                }
            }
        })
    })
    // DELETE
    $('body').on('click', '#btn-delete', function() {
        let gelombang_id = $(this).data('id')
        let token = $("meta[name='csrf-token']").attr("content")

        Swal.fire({
            title: 'Apakah Kamu Yakin?',
            text: "ingin menghapus data ini!",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: 'TIDAK',
            confirmButtonText: 'YA, HAPUS!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: `/admin/gelombang-pendaftaran/${gelombang_id}`,
                    type: "DELETE",
                    cache: false,
                    data: {
                        "_token": token
                    },
                    success: (response) => {
                        Swal.fire({
                            type: 'success',
                            icon: 'success',
                            title: `${response.message}`,
                            showConfirmButton: false,
                            timer: 3000
                        });

                        setTimeout(() => {
                            location.reload()
                        }, 1500);
                    }
                })
            }
        })
    })
</script>
