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
        <legend>Pesanan berhasil diorder</legend>
        <a href="create.php" class="tambah">+ Tambah data order</a>
        <table>
        <tr >
        <td><h3>- PESANAN SEDANG DI PROSES -</h3></td>
        </tr>
        <tr>
        <td><p>note : <b>*pengambilan 3 hari setelah orderan dibuat</b></p></td>
        </tr>
        
    </table>
    </fieldset>
</div>
<footer>
    &copy;Copyright by : syifask
</footer>
</body>
</html>