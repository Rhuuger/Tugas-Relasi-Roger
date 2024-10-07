<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Jabatan</title>
</head>
<body>
    <h2>Daftar Jabatan</h2>

    {{-- Button Tambah Data --}}
    <a href="{{ route('jabatan.create') }}">
        <button>Tambah Data</button>
    </a>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Jabatan</th>
                <th>Gaji Pokok</th>
                <th>Tunjangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jabatan as $j)
                <tr>
                    <td>{{ $j->id_jab }}</td>
                    <td>{{ $j->nama_jab }}</td>
                    <td>{{ number_format($j->gaji_pokok, 0, ',', '.') }}</td>
                    <td>{{ number_format($j->tunjangan, 0, ',', '.') }}</td>
                    <td>
                        {{-- Button Edit --}}
                        <a href="{{ route('jabatan.edit', $j->id_jab) }}">
                            <button>Edit</button>
                        </a>

                        {{-- Button Delete --}}
                        <form action="{{ route('jabatan.destroy', $j->id_jab) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus jabatan ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>
