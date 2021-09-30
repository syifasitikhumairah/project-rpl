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

h3{
    color: #1abc9c;
    text-align: center;
    font-family: sans-serif;
    font-size: 30px;
    margin-left: 225px;
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
    <center><b>Data Laundry</b></center><br>
        <table border="2" align= center cellpadding="8">
            <tr>
                <th>Nama</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th>Tanggal</th>
                <th>Jenis layanan</th>
                <th>Berat</th>
                <th>Total</th>
                <th colspan="2">Aksi</th>

            </tr>
            <?php

include '../database.php';
$laundry = new Laundry();

foreach ($laundry->index() as $data) {
    ?>
                <tr >
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['no_telepon']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['tanggal']; ?></td>
                    <td><?php echo $data['jenis_layanan'];?></td>
                    <td><?php echo $data['berat']. " Kg"; ?></td>
                    <td><?php echo "Rp. ".$data['total']; ?></td>
                    <td>
                        <form action="proses.php" method="post">
                            <input type="hidden" name="nama" value="<?php echo $data['nama']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>

            <?php
}       
?>
</table></center>
    </fieldset>
</div>
<footer>
    &copy;Copyright by : syifask
</footer>
</body>
</html>