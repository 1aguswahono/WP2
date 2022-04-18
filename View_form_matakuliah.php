<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input matakuliah</title>
</head>
<body>

<center>
    <form action="<?=  base_url();?>matakuliah/cetak" method="post">
        <table>
            <tr>
                <th colspan="3">form input data mata kuliah</th>
            </tr>
            <tr>
                <th colspan="3">
                    <hr>
                </th>
            </tr>
            <tr>
                <th>kode MTK</th>
                <th>:</th>
                <th><input type="text" nama="kode" placeholder="input kode mtk" maxlength="10"></th>
            </tr>
            <tr>
                <th>Nama MTK</th>
                <th>:</th>
                <th><input type="text" nama="kode" placeholder="input kode mtk" maxlength="10"></th>
            </tr>
            <tr>
                <th>sks</th>
                <th>:</th>
                <th><select name="sks" id="sks">
                        <option value="">pilih sks</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </th>
            </tr>
            <tr>
                <th colspan="3"><input type="submit" value="SUBMIT"></th>
            </tr>
        </table>
    </form>
</center>

    
</body>
</html>