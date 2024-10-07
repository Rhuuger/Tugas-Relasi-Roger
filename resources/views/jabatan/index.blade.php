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
                <th>NO</th>
                <th>Nama Jabatan</th>
                <th>Gaji Pokok</th>
                <th>Tunjangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp {{-- Inisialisasi variabel no --}}
            @foreach($jabatan as $j)
                <tr>
                    <td>{{ $no++ }}</td> {{-- Menampilkan nomor urut dan menambahkannya --}}
                    <td>{{ $j->nama_jab }}</td>
                    <td>{{ $j->gaji_pokok }}</td>
                    <td>{{ $j->tunjangan }}</td>
                    <td>
                        <a href="{{ route('jabatan.edit', $j->id_jab) }}">Edit</a>
                        <form action="{{ route('jabatan.destroy', $j->id_jab) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
    
</body>
</html>
