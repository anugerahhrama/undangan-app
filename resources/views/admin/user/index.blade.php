<h1>Halaman Data User</h1>
<a href="{{ route('user.create') }}">Tambah User</a>
<table border="2">
    <tbody>
        @forelse($datas as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->password }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->no_hp }}</td>
                <td>{{ $data->role }}</td>
                <td>
                    <form action="{{ route('user.destroy', $data->id) }}" method="POST">
                    <a href="{{ route('user.edit', $data->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>