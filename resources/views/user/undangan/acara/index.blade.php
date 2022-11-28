<h1>Susunan acara</h1>
<a href="{{ route('tambah_acara', $datas->id) }}">Tambah</a>
<table border="2">
    <tbody>
        
        @foreach($dataAcara as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->acara }}</td>
                <td>
                    <form action="{{ route('hapus_acara', ['id' => $datas->id, 'id_user' => $data->id]) }}" method="POST">
                    <a href="{{route('edit_acara', ['id' => $datas->id, 'id_user' => $data->id] )}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>