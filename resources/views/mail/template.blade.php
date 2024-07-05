<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil!</title>
    <style>
        * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif'

        }
    </style>
</head>

<body>
    <h2>Selamat Pembayaran Anda Telah Diterima!</h2>
    <p>Pembayaran administrasi pendaftaran mahasiswa baru di <b>Politeknik Sawunggalih Aji</b> telah terverifikasi.
        Selanjutnya Anda diminta untuk mengikut ujian seleksi secara online. Gunakan informasi berikut untuk mengikuti
        ujian : </p>

    <ul>
        <li>Username : {{ $mailData['username'] }}</li>
        <li>Password : {{ $mailData['password'] }} </li>
    </ul>

    <p>Tautan ujian seleksi : {{ $mailData['link_cbt'] }}</p>
    <br>
    <p>Terima Kasih.</p>
    <hr>
</body>

</html>
