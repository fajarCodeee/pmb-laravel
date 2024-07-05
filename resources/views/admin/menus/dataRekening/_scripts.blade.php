<script>
    $('body').on('click', '#btn-add', () => {
        $('#modal-create').modal('show')
    })

    $('#btn-save-rek').click(() => {
        let token = $("meta[name='csrf-token']").attr("content")
        let jenis_administrasi = $('#inputJenisAdministrasi').val()
        let nama_bank = $('#inputNamaBank').val()
        let nomer_rekening = $('#inputNomerRekening').val()
        let nama_pemilik = $('#inputNamaPemilik').val()
        let jumlah_administrasi = $('#inputJumlahAdministrasi').val()


        $.ajax({
            type: "POST",
            url: '{{ route('data-rekening.store') }}',
            cache: false,
            data: {
                'jenis_administrasi': jenis_administrasi,
                'nama_bank': nama_bank,
                'nomer_rekening': nomer_rekening,
                'nama_pemilik': nama_pemilik,
                'jumlah_administrasi': jumlah_administrasi,
                '_token': token,
            },
            success: function(response) {
                Swal.fire({
                    type: 'success',
                    icon: 'success',
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 3000
                }).then((result) => {
                    $('#modal-create').modal('hide')
                    location.reload()
                })

            },
            error: function(error) {
                // console.log(error)
                if (error.responseJSON.errors.jenis_administrasi[0]) {
                    $('#inputJenisAdministrasi').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.jenis_administrasi[0])
                        .addClass('invalid-feedback')
                    $('#inputJenisAdministrasi').after(message)
                }

                if (error.responseJSON.errors.nama_bank[0]) {
                    $('#inputNamaBank').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.nama_bank[0])
                        .addClass('invalid-feedback')
                    $('#inputNamaBank').after(message)
                }

                if (error.responseJSON.errors.nomer_rekening[0]) {
                    $('#inputNomerRekening').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.nomer_rekening[0])
                        .addClass('invalid-feedback')
                    $('#inputNomerRekening').after(message)
                }

                if (error.responseJSON.errors.nama_pemilik[0]) {
                    $('#inputNamaPemilik').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.nama_pemilik[0])
                        .addClass('invalid-feedback')
                    $('#inputNamaPemilik').after(message)
                }
                if (error.responseJSON.errors.jumlah_administrasi[0]) {
                    $('#inputJumlahAdministrasi').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.jumlah_administrasi[0])
                        .addClass('invalid-feedback')
                    $('#inputJumlahAdministrasi').after(message)
                }

            }
        });
    })

    $('body').on('click', '#btn-edit', function() {
        let id = $(this).data('id')
        // alert(kelas_id)
        $.ajax({
            url: `/admin/data-rekening/${id}`,
            type: "GET",
            cache: false,
            success: (response) => {
                console.log(response)
                $('#modal-edit').modal('show')
                $('#inputJenisAdministrasi-edit').val(response.data.jenis_administrasi)
                $('#inputNamaBank-edit').val(response.data.nama_bank)
                $('#inputNomerRekening-edit').val(response.data.no_rekening)
                $('#inputNamaPemilik-edit').val(response.data.nama_pemilik)
                $('#inputJumlahAdministrasi-edit').val(response.data.jumlah_administrasi)

                $('#id').val(response.data.id)
            }

        })
    })

    $('#btn-save-edit').click(() => {
        // alert('klik')
        let id = $('#id').val()

        let token = $("meta[name='csrf-token']").attr("content")
        let jenis_administrasi = $('#inputJenisAdministrasi-edit').val()
        let nama_bank = $('#inputNamaBank-edit').val()
        let nomer_rekening = $('#inputNomerRekening-edit').val()
        let nama_pemilik = $('#inputNamaPemilik-edit').val()
        let jumlah_administrasi = $('#inputJumlahAdministrasi-edit').val()


        $.ajax({
            url: `/admin/data-rekening/${id}`,
            type: "PUT",
            cache: false,
            data: {
                'jenis_administrasi': jenis_administrasi,
                'nama_bank': nama_bank,
                'nomer_rekening': nomer_rekening,
                'nama_pemilik': nama_pemilik,
                'jumlah_administrasi': jumlah_administrasi,
                '_token': token,
            },
            success: (response) => {
                Swal.fire({
                    type: 'success',
                    icon: 'success',
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 3000
                }).then((result) => {
                    $('#modal-edit').modal('hide')
                    // reload page
                    setTimeout(() => {
                        location.reload()
                    }, 500);
                });

            },
            error: (error) => {
                // console.log(error);
                if (error.responseJSON.errors.jenis_administrasi[0]) {
                    $('#inputJenisAdministrasi-edit').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.jenis_administrasi[0])
                        .addClass('invalid-feedback')
                    $('#inputJenisAdministrasi-edit').after(message)
                }

                if (error.responseJSON.errors.nama_bank[0]) {
                    $('#inputNamaBank-edit').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.nama_bank[0])
                        .addClass('invalid-feedback')
                    $('#inputNamaBank-edit').after(message)
                }

                if (error.responseJSON.errors.nomer_rekening[0]) {
                    $('#inputNomerRekening-edit').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.nomer_rekening[0])
                        .addClass('invalid-feedback')
                    $('#inputNomerRekening-edit').after(message)
                }

                if (error.responseJSON.errors.nama_pemilik[0]) {
                    $('#inputNamaPemilik-edit').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.nama_pemilik[0])
                        .addClass('invalid-feedback')
                    $('#inputNamaPemilik-edit').after(message)
                }

                if (error.responseJSON.errors.jumlah_administrasi[0]) {
                    $('#inputJumlahAdministrasi-edit').addClass('is-invalid')
                    let message = $('<div>').html(error.responseJSON.errors.jumlah_administrasi[0])
                        .addClass('invalid-feedback')
                    $('#inputJumlahAdministrasi-edit').after(message)
                }
            }
        })
    })

    $('body').on('click', '#btn-delete', function() {
        let id = $(this).data('id')
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
                    url: `/admin/data-rekening/${id}`,
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
