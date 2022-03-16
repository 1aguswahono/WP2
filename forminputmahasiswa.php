<?php
error_reporting(0)
?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width. initial-scale-1.0">
    <title>Form input mahasiswa</title>
</head>
<body>
<form action="tampilmahasiswa.php" method="POST">
<table width="500" align="center" border="0">
    <tr><th colspan="3">Pengelolahan data mahasiswa</th></tr>
    <tr><td>Nama </td><td>:</td><td><input type="text" nama="nama" id="nama" placeholder="masukan nama" size="50" required></td>
    <tr><td>Alamat </td><td>:</td><td><input type="text" nama="alamat" id="alamat" placeholder="masukan alamat" size="50" required></td>
    <tr><td>Jenis kelamin </td><td>:</td><td><input type="radio" nama="jk" id="jk" value="laki laki"> laki laki<input type="radio" nama="jk" id="jk" value="perempuan">perempuan
    <tr><td>Jenis kelamin </td><td>:</td>
        <td>
        <select nama="pekerjaan">
            <option value="pekerja">pekerja</option>
            <option value="mahasiswa">mahasiswa</option>
            <option value="pekerja">karyawan swasta</option>
            <option value="pekerja">pegawai negeri</option>
        </select>
        </td>
    </tr>
    <tr><td>Hobi</td><td>:</td>
        <td>
        <input type="checkbox" nama="hobi1" id="hobi1" value="membaca">membaca
        <input type="checkbox" nama="hobi2" id="hobi2" value="olah raga">olah raga
        <input type="checkbox" nama="hobi3" id="hobi3" value="musik">musik
        <input type="checkbox" nama="hobi4" id="hobi4" value="jalan jalan">jalan jalan
        </td>
    </tr>
    <tr>
        <td colspan="3">
        <input type="submit" nama="submit" value="kirim">
        <input type="submit" nama="submit" value="batal">
        </td>
    </tr>

</table>
</form>
</body>
</html>