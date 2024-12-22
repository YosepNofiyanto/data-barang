<link rel="stylesheet" href="style.css">

<div class="container">
<nav align="center">
  <a href="tambah_barang.php">Tambah Barang</a>
  <a href="data_barang.php">Data Barang</a>
  <a href="index.php" onclick="logout()">Logout</a>
</nav>

<h3 align="center"> Tambah Barang </h3>

<form method="POST" action="">
    <table>
        <tr>
            <td><input type="text" placeholder="Kode Barang" name="kode_barang"></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Nama Barang" name="nama_barang"></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Harga Barang" name="harga_barang"></td>
        </tr>
        <tr>
            <td>
              <button type="submit" value="simpan" name="proses">simpan</button>
            </td>
        </tr>
    </table>
</form>
</div> 

<?php 
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into barang set
    kode_barang = '$_POST[kode_barang]',
    nama_barang = '$_POST[nama_barang]',
    harga_barang = '$_POST[harga_barang]'");

    echo "Data barang baru telah tersimpan";
}
?>
