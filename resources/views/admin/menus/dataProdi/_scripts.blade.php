<script>
    $('body').on('click', '#btn-add', function() {
        $('#modal-default').modal('show')
    })

    $('#btn-add-prodi').click(function() {
        let namaProdi = $('#inputProdi').val()
        let kodeProdi = $('#inputKode').val()
        let gelar = $('#inputGelar').val()
        let token = $("meta[name='csrf-token']").attr("content")

        $.ajax({
            type: "POST",
            url: `/admin/data-program-studi`,
            data: {
                'namaProdi': namaProdi,
                'kodeProdi': kodeProdi,
                'gelar': gelar,
                '_token': token
            },
            cache: false,
            success: function(response) {
                Swal.fire({
                    type: 'success',
                    icon: 'success',
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 3500
                })

                $('#modal-default').modal('hide')
                setTimeout(() => {
                    location.reload()
                }, 1500);

                $('#inputKode').val('')
                $('#inputProdi').val('')
                $('#inputGelar').val('')

            },
            error: function(error) {
                console.log(error)
                if (error.responseJSON.errors.namaProdi[0]) {
                    $('#inputProdi').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.namaProdi[0])
                        .addClass('invalid-feedback')
                    $('#inputProdi').after(message)
                }
                if (error.responseJSON.errors.kodeProdi[0]) {
                    $('#inputKode').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.kodeProdi[0])
                        .addClass('invalid-feedback')
                    $('#inputKode').after(message)
                }
                if (error.responseJSON.errors.gelar[0]) {
                    $('#inputGelar').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.gelar[0])
                        .addClass('invalid-feedback')
                    $('#inputGelar').after(message)
                }
            }
        });
    })

    $('body').on('click', '#btn-edit', function() {
        let prodi_id = $(this).data('id')
        $.ajax({
            'url': `/admin/data-program-studi/${prodi_id}`,
            'type': "GET",
            'cache': false,
            success: function(response) {
                $('#prodi_id').val(response.data.id)
                $('#inputProdi-edit').val(response.data.namaProdi)
                $('#inputKode-edit').val(response.data.kodeProdi)
                $('#inputGelar-edit').val(response.data.gelar)
                // show modal
                $('#modal-edit').modal('show')
            }
        })
    })

    $('#btn-edit-prodi').click(function() {
        let namaProdi = $('#inputProdi-edit').val()
        let kodeProdi = $('#inputKode-edit').val()
        let gelar = $('#inputGelar-edit').val()
        let prodi_id = $('#prodi_id').val()
        let token = $("meta[name='csrf-token']").attr("content")

        $.ajax({
            type: "PUT",
            url: `/admin/data-program-studi/${prodi_id}`,
            data: {
                'namaProdi': namaProdi,
                'kodeProdi': kodeProdi,
                'gelar': gelar,
                '_token': token
            },
            cache: false,
            success: function(response) {
                Swal.fire({
                    type: 'success',
                    icon: 'success',
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 3500
                })

                $('#modal-default').modal('hide')
                setTimeout(() => {
                    location.reload()
                }, 1500);

                $('#inputKode-edit').val('')
                $('#inputProdi-edit').val('')
                $('#inputGelar-edit').val('')

            },
            error: function(error) {
                console.log(error)
                if (error.responseJSON.errors.namaProdi[0]) {
                    $('#inputProdi-edit').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.namaProdi[0])
                        .addClass('invalid-feedback')
                    $('#inputProdi-edit').after(message)
                }
                if (error.responseJSON.errors.kodeProdi[0]) {
                    $('#inputKode-edit').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.kodeProdi[0])
                        .addClass('invalid-feedback')
                    $('#inputKode-edit').after(message)
                }
                if (error.responseJSON.errors.gelar[0]) {
                    $('#inputGelar-edit').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.gelar[0])
                        .addClass('invalid-feedback')
                    $('#inputGelar-edit').after(message)
                }
            }
        });
    })

    $('body').on('click', '#btn-delete', function() {
        let prodi_id = $(this).data('id')
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
                    url: `/admin/data-program-studi/${prodi_id}`,
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
