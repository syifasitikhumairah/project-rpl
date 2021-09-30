<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
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
    <li><span class="glyphicon glyphicon-heart"><a href="beranda.php">Beranda</a></span></li>
    <li><a href="create.php">Order</a></li>
    <li><a href="index.php">Riwayat</a></li>
    <li><a href="login.php">Logout</a></li>
    
    </ul>
    </nav>
    <hr>
    </header>
    <h2>Laundry Shop</h2>
    <img src="img/logo3.jpg" alt="logo3" class="logo3">
</div>
<footer>
    &copy;Copyright by : syifask
</footer>
</body>

</html>