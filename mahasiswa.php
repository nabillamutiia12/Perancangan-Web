<?php
    session_start();
    if(!isset($_SESSION['password'])){
    	echo "Anda belum masuk. Silahkan <a href='login.php'>Login</a>";
    }else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Mahasiswa</title>
</head>
<body>
<h3>Selamat Datang di Halaman Mahasiswa</h3>
</body>
</html>
<?php } ?>