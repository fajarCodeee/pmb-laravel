<script>
    $(document).ready(function() {})
    $('#provinsi').change(function() {
        let provinsi_id = $(this).val()
        const url_kab = 'https://fajarcodeee.github.io/api-wilayah-indonesia/api/regencies/'
        if (provinsi_id) {
            $.ajax({
                type: "GET",
                url: url_kab + provinsi_id + '.json',
                success: function(response) {
                    $('#kabupaten').empty().append(
                        '<option value="" selected> --- Pilih Kabupaten --- </option>')
                    $.each(response, function(key, val) {
                        $('#kabupaten').append(
                            '<option value="' + val.id +
                            '">' + val.name + '</option>'
                        )
                    })
                }
            });
        }
    });
    $('#kabupaten').change(function() {
        let kab_id = $(this).val()
        const url_kec = 'https://fajarcodeee.github.io/api-wilayah-indonesia/api/districts/'
        if (kab_id) {
            $.ajax({
                type: "GET",
                url: url_kec + kab_id + '.json',
                success: function(response) {
                    console.log(response);
                    $('#kecamatan').empty().append(
                        '<option value="" selected> --- Pilih Kecamatan --- </option>')
                    $.each(response, function(key, val) {
                        $('#kecamatan').append(
                            '<option value="' + val.id +
                            '">' + val.name + '</option>'
                        )
                    })
                }
            });
        }
    });
</script>
