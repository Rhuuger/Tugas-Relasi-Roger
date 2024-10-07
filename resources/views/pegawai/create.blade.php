<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pegawai</title>
</head>
<body>
    <h2>Tambah Data Pegawai</h2>

    {{-- Form untuk menambah data pegawai --}}
    <form action="{{ route('pegawai.store') }}" method="POST">
        @csrf {{-- Token CSRF untuk keamanan --}}
        <table>
            <tr>
                <td width="100">NIK</td>
                <td><input type="text" name="no_induk" value="{{ old('no_induk') }}" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="{{ old('nama') }}" size="30" required></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>
                    <select name="id_jab" required>
                        <option value="">---</option>
                        @foreach($jabatan as $j)
                            <option value="{{ $j->id_jab }}" {{ old('id_jab') == $j->id_jab ? 'selected' : '' }}>
                                {{ $j->nama_jab }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>

    {{-- Pesan Error jika ada --}}
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>
