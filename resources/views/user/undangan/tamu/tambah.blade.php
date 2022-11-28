<h1>Tambah Tamu</h1>
<form action="{{ route('simpan_tamu', $datas->id) }}" method="POST">
    @csrf
    @method('POST')
    <input type="text" name="id" value="{{ $kode }}">
    <input type="text" name="id_undangan" value="{{ $datas->id }}" readonly><br>
    <input type="text" name="nama" placeholder="nama"><br>
    <input type="text" name="email" placeholder="email"><br>
    <input type="text" name="alamat" placeholder="alamat"><br>
    <input type="text" name="status_undangan" value="belum" readonly><br>
    <input type="text" name="status_presensi" value="belum" readonly><br>
    <button type="submit">Simpan</button>
</form>