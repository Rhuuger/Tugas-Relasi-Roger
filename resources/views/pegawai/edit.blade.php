<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Pegawai</title>
</head>
<body>
    <h2>Edit Pegawai</h2>

    {{-- Form untuk edit data pegawai --}}
    <form action="{{ route('pegawai.update', $pegawai->no_induk) }}" method="POST">
        @csrf
        @method('PUT') {{-- Method PUT untuk update data --}}

        <table>
            <tr>
                <td>NIK</td>
                <td><input type="text" name="no_induk" value="{{ $pegawai->no_induk }}" disabled></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="{{ old('nama', $pegawai->nama) }}" required></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>
                    <select name="id_jab" required>
                        @foreach($jabatan as $j)
                            <option value="{{ $j->id_jab }}" {{ $pegawai->id_jab == $j->id_jab ? 'selected' : '' }}>
                                {{ $j->nama_jab }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan Perubahan"></td>
            </tr>
        </table>
    </form>

</body>
</html>
