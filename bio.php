<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="background"> 
    <h1 align="center" class="judul">biodata saya</h1>
    <form action="daftar.php" method="post"></form>
    <table>
        <tr>
            <td>nama</td>
            <td ><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>umur</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>jenis kelamin </td>
            <td><input type="radio" name="nama" value="">laki laki
            <input type="radio" name="nama" value="">perempuan</td>
        </tr>
        <tr>
            <td>agama</td>
            <td>
                <select>
                    <option value="">ISLAM</option>
                    <option value="">KATOLIK</option>
                    <option value="">PROSTESTAN</option>
                    <option value="">BUDHA</option>
                    <option value="">HINDU</option>
                    <option value="">KONG HU CHU</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>hobi</td>
            <td>
                <input type="checkbox" name="hobi">coding 
                <input type="checkbox" name="hobi">googling 
                <input type="checkbox" name="hobi">game 
            </td>
            <tr>
                <td>alamat</td>
                <td><textarea ></textarea></td>
            </tr>
            <tr>
                <td>cita cita</td>
                <td> <input type="text" name =" cita"></input></td>
            </tr>
        </tr>
        <tr>
            <td colspan="2"> <button>kirim</button></td>
        </tr>
    </table>
    </div>
</body>
</html>