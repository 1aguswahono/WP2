<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form data matakuliah</title>
</head>
<body>

    <center>

        <table>
            <tr>
                <th colspan="3">form data mata kuliah</th>
            </tr>
            <tr>
                <th colspan="3">
                    <hr>
                </th>
            </tr>
            <tr>
                <th>kode MTK</th>
                <th>:</th>
                <th><?=$kode;?></th>
            </tr>
            <tr>
                <th>Nama MTK</th>
                <th>:</th>
                <th><?=$nama;?></th>
            </tr>
            <tr>
                <th>SKS</th>
                <th>:</th>
                <th><?=$sks:?>
                </th>
            </tr>
            <tr>
                <tr colspan="3"><a href="<?= base_url();?>matakuliah" title= "kembali">kembali</a></th>
            </tr>
        </table>

    </center>
  
</body>
</html>