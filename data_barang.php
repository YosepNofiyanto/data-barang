<link rel="stylesheet" href="style.css">

<div class="container">

<nav align="center">
  <a href="tambah_barang.php">Tambah Barang</a>
  <a href="data_barang.php">Data Barang</a>
  <a href="index.php" onclick="logout()">Logout</a>
</nav>

<h3 align="center"> DATA BARANG </h3>

<table>
    <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga Barang</th>
    </tr>

<?php 
    
include "koneksi.php";
  $no=1;
  $ambildata = mysqli_query($koneksi,"select * from barang");
 while ($tampil = mysqli_fetch_array($ambildata)){
  echo "
  <tr>
    <td>$no</td>
    <td>$tampil[kode_barang]</td>
    <td>$tampil[nama_barang]</td>
    <td>$tampil[harga_barang]</td>
  </tr>";

  $no++;
}
?>
</table>
</div>