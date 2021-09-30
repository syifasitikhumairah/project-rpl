<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <style type="text/css">
#card{
    background :#fbfbfb;
    box-shadow: 1px 2px 8px rbga(0, 0, 0, 0.65);
    height: 550px;
    width : 1000px;
    margin-left: 170px;
    margin-top: 50px;
}
nav{
    background-color: white;
    text-align: center; 
    overflow: auto;
    background-image: url("bg4.gif");
    background-size: cover;
    width: 100%;
}
li{
    display: inline;
    list-style-type: none;
    float: none;
    margin-left: 50px;
}
a{
    font-size: 20px;
    text-decoration: none;
    color:cadetblue;
}
img.logo{
    width: 120px;
    height: 90px;
    float: left;
    
}
body{

    background-image:url('img/bg1.jpg');
}
hr{
    color: #1abc9c;
}

h2{
    color: #1abc9c;
    float:left;
    font-family: sans-serif;
    font-size: 50px;
    margin-left: 50px;
}
img.logo3{
    width: 450px;
    height: 430px;
    float: left;
    padding-top: 0px;
}
a.tambah{
    font-size: 15px;
    text-decoration: none;
    color:cadetblue;
    float: right;
}
footer{
    text-align : center;
    
}
legend{
    color: #1abc9c;
    font-size : 20px;
}
</style>
</head>
<body>
<div id="card">
<header>
    <nav>
    <img src="img/logo1.png" alt="logo" class="logo">
    <ul>
    <li><a href="beranda.php">Beranda</a></li>
    <li><a href="create.php">Order</a></li>
    <li><a href="index.php">Riwayat</a></li>
    <li><a href="login.php">Logout</a></li>
    
    </ul>
    </nav>
    <hr>
    </header>
    <fieldset>
        <legend>Input Data Laundry</legend>
        <a href="create.php" class="tambah">+ Tambah data order</a>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <td>Nama pelanggan</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                    <td><input type="number" name="tlp" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat" required></textarea></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td><input type="date" name="tgl" required></td>
                </tr>
                <tr>
                    <td>Jenis layanan</td>
                    <td><select name="pilih">
                        <option value="Cuci Kering">Cuci Kering | Rp. 6000</option>
                        <option value="Cuci Lipat">Cuci Lipat | Rp. 7000</option>
                        <option value="Cuci Setrika">Cuci Setrika | Rp. 10000</option></select>
                    </td>
                </tr>
                <tr>
                    <td>Berat/kg</tds>
                    <td><input type="number" name="berat" required></td>
                </tr>
                <tr>
                    <td>Total</tds>
                    <td><input type="number" name="total" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" name="save" >Pesan </button>
                    </td>
                </tr>
            </table>
        </form>
        <p>note : <b>*pengambilan 3 hari setelah orderan dibuat</b></p>
    </fieldset>
</div>
<footer>
    &copy;Copyright by : syifask
</footer>
</body>
</html>