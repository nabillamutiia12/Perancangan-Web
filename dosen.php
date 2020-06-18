<?php
    session_start();
    if(!isset($_SESSION['password'])){
    	echo "Anda belum masuk. Silahkan <a href='login.php'>Login</a>";
    }else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Dosen</title>
</head>
<body>
<h3>Selamat Datang di Halaman Dosen</h3>
<a href="login.php">Logout</a>
</body>
</html>
<?php } ?>