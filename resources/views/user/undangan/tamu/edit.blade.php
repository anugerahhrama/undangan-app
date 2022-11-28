<h1>Edit Tamu</h1>
<form action="{{ route('update_tamu', ['id' => $undangan->id, 'id_tamu' => $tamu->id ]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="id" value="{{ $tamu->id }}" readonly>
    <input type="text" name="id_undangan" value="{{ $tamu->id_undangan }}" readonly><br>
    <input type="text" name="nama" placeholder="nama" value="{{ $tamu->nama }}"><br>
    <input type="text" name="email" placeholder="email" value="{{ $tamu->email }}"><br>
    <input type="text" name="alamat" placeholder="alamat" value="{{ $tamu->alamat }}"><br>
    <input type="text" name="status_undangan" value="belum" readonly><br>
    <input type="text" name="status_presensi" value="belum" readonly><br>
    <button type="submit">Simpan</button>
</form>