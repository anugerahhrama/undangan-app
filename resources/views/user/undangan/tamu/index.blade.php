<h1>Tamu Undangan</h1>
<a href="{{ route('tambah_tamu', $datas->id) }}">Tambah</a>
<table border="2">
        <tbody> 
    @forelse($data as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->id_undangan }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->email }}</td>
                <td>{{ $d->judul_acara }}</td>
                <td><a href="{{route('lihat_tamu', ['id' => $datas->id, 'id_tamu' => $d->id ] )}}">Lihat</a></td>
                <td><a href="{{route('edit_tamu', ['id' => $datas->id, 'id_tamu' => $d->id ] )}}">Edit</a></td>
            </tr>
    @empty
        <h1>Data tidak ada</h1>
    @endforelse
        </tbody>
</table>