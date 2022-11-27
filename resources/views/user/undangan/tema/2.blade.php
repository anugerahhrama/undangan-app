<h1>Tema ke 2</h1>
<h1>{{ $data->judul_acara }}</h1>
<h5>{{ $data->hari }} {{ $data->tanggal }} {{ $data->bulan }} {{ $data->tahun }}</h5>
<h4>{{ $data->deskripsi }}</h4>
@foreach($acara as $ac)
<h3>{{ $ac->acara }}</h3>
@endforeach