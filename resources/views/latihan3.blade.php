<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Data Tabungan Perorangan</center>
    Nama : {{$tabungan->nama}}<br>
    NIS : {{$tabungan->nis}}<br>
    Kelas : {{$tabungan->kelas}}<br>
    Jumlah : {{$tabungan->jml}}<br>
    @if($tabungan->jml > 25000)
    paket tabungan : A
    @elseif($tabungan->jml > 10000)
    paket tabungan : B
    @elseif(tabungan->jml < 5000)
    paket tabungan : C
    @endif
</body>
</html>
