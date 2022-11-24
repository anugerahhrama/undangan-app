<h1>Tambah Tema</h1>
<form action="{{ route('tema.store') }}" method="POST">
    @csrf
    @method('POST')
    <input type="text" name="nama_tema" placeholder="nama tema"><br>
    <input type="text" name="tema" placeholder="tema"><br>
    <button type="submit">Simpan</button>
</form>