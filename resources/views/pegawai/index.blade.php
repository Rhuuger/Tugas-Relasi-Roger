<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Pegawai</title>
</head>
<body>
    <h2>Daftar Pegawai</h2>

    {{-- Button Tambah Data --}}
    <a href="{{ route('pegawai.create') }}">
        <button>Tambah Data</button>
    </a>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No Induk</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $p)
                <tr>
                    <td>{{ $p->no_induk }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->jabatan->nama_jab }}</td>
                    <td>
                        {{-- Button Edit --}}
                        <a href="{{ route('pegawai.edit', $p->no_induk) }}">
                            <button>Edit</button>
                        </a>

                        {{-- Button Delete --}}
                        <form action="{{ route('pegawai.destroy', $p->no_induk) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>
