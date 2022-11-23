<h1>Halaman Edit data user</h1>
<form action="{{ route('user.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nama" placeholder="nama" value="{{ $user->nama }}"><br>
    <input type="email" name="email" placeholder="email" value="{{ $user->email }}"><br>
    <input type="password" name="password" placeholder="password" value="{{ $user->password }}"><br>
    <input type="text" name="alamat" placeholder="alamat" value="{{ $user->alamat }}"><br>
    <input type="number" name="no_hp" placeholder="no_hp" value="{{ $user->no_hp }}"><br>
    <input type="hidden" name="role" value="{{$user->role}}">
    <button type="submit">Simpan</button>
</form>