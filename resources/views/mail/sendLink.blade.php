<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Mahasiswa Baru | Politeknik Sawunggalih Aji</title>
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
</head>

<body>
    <h1>{{ $mailData['title'] }}</h1>
    <p>Ayo selesaikan administrasi Anda untuk melanjutkan pendaftaran mahasiswa baru di Politeknik Sawunggalih Aji.</p>
    <p>
        Untuk menyelesaikan administrasi, silahakan upload bukti pembayaran administrasi pendaftaran sebesar <b>Rp.
            {{ $mailData['biayaPendaftaran']->jumlah_administrasi }}</b> ke salah satu nomer rekenik berikut : </p>
    <ul>
        @foreach ($mailData['bank'] as $bank)
            <li>{!! '<b>' . $bank->nama_bank . '</b> - ' . $bank->nomer_rekening !!}</li>
        @endforeach
    </ul>
    <p>Silahkan upload bukti transfer melalui link berikut ini :
    </p>
    <p>
        <a href="{{ url('/form/p/') . '/' . $mailData['id'] }}">{{ url('form/p/') . '/' . $mailData['id'] }}</a>
    </p>
    <p>
        Terima Kasih.
    </p>


</body>

</html>
