<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Kelompok 1 | undang</title>
</head>
<body style="text-align: center; background-color: aqua;">
    <p>{{ $data['salam'] }}</p><br>
    <b>{{$data['nama']}}</b>
    <p>mohon maaf menggangu waktunya disini saya ingin menyampaikan <br> beberapa
        perihal mengenai acara yang kami selenggarakan untuk mengundang <b>{{ $data['nama'] }}</b>
        untuk hadir dalam acara ini
    </p>

        <h3>perihal undangan : {{$data['judul']}}</h3>

    <p>klik link berikut untuk mengakses undangan anda</p>
    <h3>{{ $qrcode }}</h3>
    <p>Terimakasih <b>{{$data['nama']}}</b> atas perhatiannya</p><br>
    <p>wassalamualaikum wr.wb</p>
</body>
</html>