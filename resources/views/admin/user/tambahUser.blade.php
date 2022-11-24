<h1>Halaman Tambah data user</h1>
<form action="{{ route('user.store') }}" method="POST">
    @csrf
    @method('POST')
    <input type="text" name="nama" placeholder="nama"><br>
    <input type="email" name="email" placeholder="email"><br>
    <input type="password" name="password" placeholder="password"><br>
    <input type="text" name="alamat" placeholder="alamat"><br>
    <input type="number" name="no_hp" placeholder="no_hp"><br>
    <input type="hidden" name="role" value="user">
    <button type="submit">Simpan</button>
</form>