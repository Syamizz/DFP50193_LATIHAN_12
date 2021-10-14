<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="simpan.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat"></textarea>
                </td>
            </tr>
            <tr>
                <td>Negeri</td>
                <td>
                    <select name="negeri">
                        <option value=""></option>
                        <option value="09">Perlis</option>
                        <option value="02">Kedah</option>
                        <option value="08">Perak</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Hobi</td>
                <td>
                    <label>
                        <input type="checkbox" name="membaca" value="Membaca">Membaca
                    </label>
                    <label>
                        <input type="checkbox" name="berenang" value="Berenang">Berenang
                    </label>
            </tr>

            <tr>
                <td>Jantina</td>
                <td>
                    <input type="radio" name="Lelaki" value="Lelaki">
                    <input type="radio" name="Perempuan" value="Perempuan">
                </td>
            </tr>

        </table>
</body>
</html>