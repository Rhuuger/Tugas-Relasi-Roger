<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Jabatan</title>
</head>
<body>
    <h2>Edit Jabatan</h2>

    <form action="{{ route('jabatan.update', $jabatan->id_jab) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>Nama Jabatan</td>
                <td><input type="text" name="nama_jab" value="{{ $jabatan->nama_jab }}" required></td>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td><input type="number" name="gaji_pokok" value="{{ $jabatan->gaji_pokok }}" required></td>
            </tr>
            <tr>
                <td>Tunjangan</td>
                <td><input type="number" name="tunjangan" value="{{ $jabatan->tunjangan }}" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>

</body>
</html>
