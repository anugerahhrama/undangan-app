<h1>Tambah Undangan</h1>
<form action="{{ route('simpan_undangan') }}" method="POST">
    @csrf
    @method('POST')
    <label for="">Pembuat</label>
    <input type="text" value="{{ $user->nama }}" readonly><br>
    <input type="hidden" value="{{ $user->id }}" name="id_user"><br>
    <label for="cars">Tema</label>
    <select id="cars" name="id_tema">
    @foreach($temas as $tema)
    <option value="{{ $tema->id }}">{{ $tema->nama_tema }}</option>
    @endforeach
    </select>
    <select id="cars" name="id_kategori">
    @foreach($kategoris as $kategori)
    <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
    @endforeach
    </select>
    <br>
    <label for="">Hari :</label>
    <select id="cars" name="hari">
    <option value="senin">Senin</option>
    <option value="selasa">selasa</option>
    <option value="rabu">rabu</option>
    <option value="kamis">kamis</option>
    <option value="jumat">jum'at</option>
    <option value="sabtu">Sabtu</option>
    <option value="minggu">minggu</option>
    <br>
</select>
<input type="number" name="tanggal" placeholder="tanggal"><br>
<input type="text" name="bulan" placeholder="bulan"><br>
<input type="number" placeholder="tahun" name="tahun"><br>
<input type="text" name="judul_acara" placeholder="judul acara"><br>
<input type="text" name="deskripsi" placeholder="deskripsi"><br>
<input type="time" name="jam" placeholder="jam"><br>
<input type="text" name="lokasi" placeholder="lokasi"><br>
<button type="submit">Simpan</button>
</form>