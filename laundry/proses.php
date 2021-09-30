<?php
include '../database.php';
$laundry = new Laundry();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $nama = $_POST['nama'];
    $tlp = $_POST['tlp'];
    $alamat = $_POST['alamat'];
    $tgl = $_POST['tgl'];
    $pilih = $_POST['pilih'];
    $berat = $_POST['berat'];
    $total = $_POST['total'];


    if ($aksi == "create") {
        $laundry->create($nama, $tlp, $alamat, $tgl, $pilih, $berat, $total);
        header("location: hasil.php");
    } elseif ($aksi == "update") {
        $laundry->update($nama, $tlp, $alamat, $tgl, $pilih, $berat, $total);
        header("location: hasil.php");
    }if ($aksi == "delete") {
        $laundry->delete($nama);
        header("location: hasil.php");
    }

}