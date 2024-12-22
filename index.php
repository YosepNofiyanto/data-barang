<link rel="stylesheet" href="style.css">

<div class="container">
<?php 
session_start();
include "koneksi.php";
?>

<form method="POST" action="">
<h3 align="center"> LOGIN </h3>    
    <table align="center">
        <tr>
            <td><input type="text" placeholder="username" name="username"></td>
        </tr>
        <tr>
            <td><input type="password" placeholder="password" name="password"></td>
        </tr>
        <tr>
            <td><button type="submit" value="Login" name="proseslog">Login</td>
        </tr>
    </table>
</form>
</div>

<?php 
if(isset($_POST['proseslog'])){
    $sql = mysqli_query($koneksi, "select * from user where username = '$_POST[username]'
    and password = '$_POST[password]'");

    $cek = mysqli_num_rows($sql);
    if($cek > 0){
        $_SESSION['username'] = $_POST['usename'];

        echo "<meta http-equiv=refresh content=0;URL='tambah_barang.php'>";
    }else{
        echo "<p align=center><b> Username dan Password salah ! </b></p>";
        echo "<meta http-equiv=refresh content=2;URL='index.php'>";
    }
}

?>