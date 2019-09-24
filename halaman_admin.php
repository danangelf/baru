<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin </title>
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<center><h1>Halaman Admin</h1></center>
 
	<center><p>Hallo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p></center>
	<center><a href="logout.php">LOGOUT</a></center>
 
	<br/>
	<br/>
 
</body>
</html>