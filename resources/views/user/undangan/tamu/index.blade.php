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
                <td>{{ $d->status_undangan }}</td>
                <td>{{ $d->status_presensi }}</td>
                <td><a href="{{route('lihat_tamu', ['id' => $datas->id, 'id_tamu' => $d->id ] )}}">Lihat</a></td>
                <td><a href="{{route('presensi_tamu', ['id' => $datas->id, 'id_tamu' => $d->id ] )}}">Presensi</a></td>
                <td><a href="{{route('edit_tamu', ['id' => $datas->id, 'id_tamu' => $d->id ] )}}">Edit</a></td>
                <td>
                    <form action="{{ route('hapus_tamu', ['id' => $datas->id, 'id_tamu' => $d->id ]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
                <?php  
                    if($d->status_undangan == 'terkirim'){
                ?>
                <td>
                    Terkirim
                </td>
                <?php }else{ ?>
                <td>
                    <a href="{{ route('kirim_tamu', ['id' => $datas->id, 'id_tamu' => $d->id ]) }}" method="POST">Kirim</a>
                </td>
                <?php } ?>
            </tr>
    @empty
        <h1>Data tidak ada</h1>
    @endforelse
        </tbody>
</table>