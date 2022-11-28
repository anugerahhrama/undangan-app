<h1>Presensi Tamu</h1>
<h1>{{ $tamu->email }}</h1>
<form action="{{ route('hadir_tamu', ['id' => $undangan->id, 'id_tamu' => $tamu->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <button type="submit">Hadir</button>
</form>