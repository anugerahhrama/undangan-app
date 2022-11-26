<h1>edit Acara</h1>
<form action="{{ route('update_acara', [ 'id' => $id, 'id_user' => $datas->id ]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="id_detail" placeholder="acara" value="{{ $data->id }}">
    <input type="text" name="acara" placeholder="acara" value="{{ $datas->acara }}">
    <button type="submit">Simpan</button>
</form>
