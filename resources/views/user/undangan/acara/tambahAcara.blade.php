<h1>Tambah Acara</h1>
<form action="{{ route('simpan_acara', $datas->id) }}" method="POST">
    @csrf
    @method('POST')
    <input type="text" name="id_detail" value="{{ $datas->id }}">
    <input type="text" name="acara" placeholder="acara">
    <button type="submit">Simpan</button>
</form>
