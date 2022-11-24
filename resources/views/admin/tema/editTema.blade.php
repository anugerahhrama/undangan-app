<h1>Edit Tema</h1>
<form action="{{ route('tema.update', $tema->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nama_tema" placeholder="nama tema" value="{{ $tema->nama_tema }}"><br>
    <input type="text" name="tema" placeholder="tema" value="{{ $tema->tema }}"><br>
    <button type="submit">Simpan</button>
</form>