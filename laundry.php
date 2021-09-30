<?php
class Laundry extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datalaundry = mysqli_query($this->koneksi, "select * from orders");
        // var_dump($datadosen);
        return $datalaundry;
    }

    // Menambah Data
    public function create($nama, $tlp, $alamat, $tgl, $pilih, $berat,$total)
    {
        mysqli_query(
            $this->koneksi,
            "insert into orders values('$nama','$tlp','$alamat','$tgl','$pilih','$berat', '$total')"
        );
    }
    // Menampilkan Data Berdasarkan Nama
    public function show($nama)
    {
        $datalaundry = mysqli_query(
            $this->koneksi,
            "select * from orders where nama='$nama'"
        );
        return $datalaundry;
    }

    // Menampilkan data berdasarkan nama
    public function edit($nama)
    {
        $datalaundry = mysqli_query(
            $this->koneksi,
            "select * from orders where nama='$nama'"
        );
        return $datalaundry;
    }
    // mengupdate data berdasarkan alamat
    public function update($nama, $tlp, $alamat, $tgl, $pilih, $berat, $total)
    {
        mysqli_query(
            $this->koneksi,
            "update orders set nama='$nama', tlp='$tlp' where alamat='$alamat'"
        );
    }

    // menghapus data berdasarkan nama
    public function delete($nama)
    {
        mysqli_query($this->koneksi, "delete from orders where nama='$nama'");
    }
}