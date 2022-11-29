<h1>Edit Undangan</h1>
<form action="{{ route('update_undangan', $datas->id ) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Pembuat</label>
    <input type="text" value="{{ $user->nama }}" readonly><br>
    <input type="hidden" value="{{ $user->id }}" name="id_user"><br>
    <label for="cars">Tema</label>
    <select id="cars" name="id_tema">
    @foreach($temas as $tema)
    <option value="{{ $tema->id }}" selected>{{ $tema->nama_tema }}</option>
    @endforeach
    </select>
    <select id="cars" name="id_kategori">
    <option value="{{ $kategori_undangan->id }}" selected >{{ $kategori_undangan->kategori }}</option>
    @foreach($kategoris as $kategori)
    <option value="{{ $kategori->id }}" >{{ $kategori->kategori }}</option>
    @endforeach
    </select>
    <br>
    <label for="">Hari :</label>
    <select id="" name="hari">
    <option>{{ $datas->hari }}</option>
    <option value="senin">Senin</option>
    <option value="selasa">selasa</option>
    <option value="rabu">rabu</option>
    <option value="kamis">kamis</option>
    <option value="jumat">jum'at</option>
    <option value="sabtu">Sabtu</option>
    <option value="minggu">minggu</option>
    <br>
</select>
<input type="date" name="tanggal" placeholder="tanggal" value="{{ $datas->tanggal }}"><br>
<input type="text" name="judul_acara" placeholder="judul acara" value="{{ $datas->judul_acara }}"><br>
<input type="text" name="deskripsi" value="{{ $datas->deskripsi }}"><br>
<input type="time" name="jam" value="{{ $datas->jam }}"><br>
<input type="text" name="lokasi" value="{{ $datas->lokasi }}"><br>
<button type="submit">Simpan</button>
</form>