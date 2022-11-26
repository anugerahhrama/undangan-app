<h1>halaman data undangan</h1>
<table border="2">
    <a href="{{ route('tambah_undangan') }}">Tambah</a>
    <thead>
        <tr>
                <td>id</td>
                <td>Nama pemilik</td>
                <td>Waktu</td>
                <td>judul acara</td>
                <td>kategori</td>
                <td>deskripsi</td>
                <td>action</td>
                <td>susunan acara</td>
                <td>Tamu</td>
        </tr>
    </thead>
    <tbody>
        <!-- dd($datas) -->
        @forelse($datas as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->hari }}-{{ $data->tanggal }}-{{ $data->bulan }}-{{ $data->tahun }}</td>
                <td>{{ $data->judul_acara }}</td>
                <td>{{ $data->kategori }}</td>
                <td>{{ $data->deskripsi }}</td>
                <td>
                    <form action="{{ route('hapus_undangan', $data->id) }}" method="POST">
                    <a href="{{ route('edit_undangan', $data->id ) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('susunan_acara', $data->id) }}">Susunan acara</a>
                </td>
                <td><a href="">Daftar tamu</a></td>
            </tr>
        @empty
        <h1>tidak ada data</h1>
        @endforelse
    </tbody>
</table>