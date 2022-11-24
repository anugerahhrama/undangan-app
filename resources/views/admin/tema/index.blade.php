<h1>halaman Tema</h1>
<a href="{{ route('tema.create') }}">Tambah Tema</a>
<table border="2">
    <tbody>
        @forelse($datas as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->nama_tema }}</td>
            <td>{{ $data->tema }}</td>
            <td>
                <form action="{{ route('tema.destroy', $data->id) }}" method="POST">
                <a href="{{ route('tema.edit', $data->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <h1>data belum ada</h1>
        @endforelse
    </tbody>
</table>