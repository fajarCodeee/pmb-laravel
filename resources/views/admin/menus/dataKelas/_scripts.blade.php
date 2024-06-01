<script>
    $('body').on('click', '#btn-add', () => {
        $('#modal-create').modal('show')
    })

    $('#btn-save-kelas').click(() => {
        let token = $("meta[name='csrf-token']").attr("content")
        let namaKelas = $('#inputKelas').val()
        let waktuKelas = $('#inputWaktu').val()

        $.ajax({
            type: "POST",
            url: '/admin/data-kelas',
            cache: false,
            data: {
                'namaKelas': namaKelas,
                'waktuKelas': waktuKelas,
                '_token': token
            },
            success: function(response) {
                Swal.fire({
                    type: 'success',
                    icon: 'success',
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 3000
                })
                $('#modal-create').modal('hide')
                setTimeout(() => {
                    location.reload()
                }, 1500);

                $('#inputKelas').val('')
                $('#inputWaktu').val('')

            },
            error: function(error) {
                // console.log(error)
                if (error.responseJSON.errors.namaKelas[0]) {
                    $('#inputKelas').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.namaKelas[0])
                        .addClass('invalid-feedback')
                    $('#inputKelas').after(message)
                }
                if (error.responseJSON.errors.waktuKelas[0]) {
                    $('#inputWaktu').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.waktuKelas[0])
                        .addClass('invalid-feedback')
                    $('#inputWaktu').after(message)
                }
            }
        });
    })

    $('body').on('click', '#btn-edit', function() {
        let kelas_id = $(this).data('id')
        // alert(kelas_id)
        $.ajax({
            url: `/admin/data-kelas/${kelas_id}`,
            type: "GET",
            cache: false,
            success: (response) => {
                $('#modal-edit').modal('show')
                $('#inputKelas-edit').val(response.data.namaKelas)
                $('#inputWaktu-edit').val(response.data.waktu)
                $('#kelas_id').val(response.data.id)
            }

        })
    })

    $('#btn-save-edit').click(() => {
        // alert('klik')
        let namaKelas = $('#inputKelas-edit').val()
        let waktuKelas = $('#inputWaktu-edit').val()
        let kelas_id = $('#kelas_id').val()
        let token = $("meta[name='csrf-token']").attr("content")

        $.ajax({
            url: `/admin/data-kelas/${kelas_id}`,
            type: "PUT",
            cache: false,
            data: {
                "namaKelas": namaKelas,
                "waktuKelas": waktuKelas,
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

                $('#modal-edit').modal('hide')
                // reload page
                setTimeout(() => {
                    location.reload()
                }, 1500);
            },
            error: (error) => {
                if (error.responseJSON.errors.namaKelas[0]) {
                    $('#inputKelas-edit').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.namaKelas[0])
                        .addClass('invalid-feedback')
                    $('#inputKelas-edit').after(message)
                }
                if (error.responseJSON.errors.waktuKelas[0]) {
                    $('#inputWaktu-edit').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.waktuKelas[0])
                        .addClass('invalid-feedback')
                    $('#inputWaktu-edit').after(message)
                }
            }
        })
    })

    $('body').on('click', '#btn-delete', function() {
        let kelas_id = $(this).data('id')
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
                    url: `/admin/data-kelas/${kelas_id}`,
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
