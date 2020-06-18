<?php
    session_start();
    if(!isset($_SESSION['password'])){
    	echo "Anda belum masuk. Silahkan <a href='login.php'>Login</a>";
    }else{
?>
<?php
include 'koneksi.php';
if(isset($_GET['nim'])){
	$delete = mysqli_query($conn, "DELETE FROM mahasiswa WHERE nim = '".$_GET['nim']."' ");
	header('location:index.php');
}
?>
<?php } ?>