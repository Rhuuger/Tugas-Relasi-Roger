<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Jabatan</title>
</head>
<body>
    <h2>Tambah Jabatan</h2>

    <form action="{{ route('jabatan.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nama Jabatan</td>
                <td><input type="text" name="nama_jab" required></td>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td><input type="number" name="gaji_pokok" required></td>
            </tr>
            <tr>
                <td>Tunjangan</td>
                <td><input type="number" name="tunjangan" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>

</body>
</html>
