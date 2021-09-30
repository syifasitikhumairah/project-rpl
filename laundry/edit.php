<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laundry - Edit Data</title>
</head>

<body>
    <?php

include '../database.php';
$laundry = new Laundry();
foreach ($laundry->edit($_GET['nama']) as $data) {
    $nama = $data['nama'];
    $tlp = $data['no_telepon'];
    $alamat = $data['alamat'];
    $tgl = $data['tanggal'];
    $pilih = $data['jenis_layanan'];
    $berat = $data['berat'];

}
?>
    <fieldset>
        <legend>Edit Data laundry</legend>
        <form action="proses.php" method="post">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="nama" value="<?php echo $nama; ?>">
            <table>
            <tr>
                    <td>Nama pelanggan</td>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                    <td><input type="number" name="tlp" value="<?php echo $tlp; ?>" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat" value="<?php echo $alamat; ?>" required></textarea></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td><input type="date" name="tgl" value="<?php echo $tgl; ?>" required></td>
                </tr>
                <tr>
                    <td>Jenis layanan</td>
                    <td><select name="pilih" value="<?php echo $pilih; ?>">
                        <option value="Cuci Kering">Cuci Kering | Rp. 6000</option>
                        <option value="Cuci Lipat">Cuci Lipat | Rp. 7000</option>
                        <option value="Cuci Setrika">Cuci Setrika | Rp. 10000</option></select>
                    </td>
                </tr>
                <tr>
                    <td>Berat</tds>
                    <td><input type="number" name="berat" value="<?php echo $berat; ?>" required></td>
                </tr>
                <tr>
                    <td>Total</tds>
                    <td><input type="number" name="total" value="<?php echo $total; ?>" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" name="save" >Simpan </button>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>