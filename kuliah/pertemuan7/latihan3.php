<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>
<?php if( isset($_POST["Submit"]) ) : ?>
	<h1>Hello, Welcome to my guys <?= $_POST["nama"]; ?></h1>
<?php endif; ?>

<!-- action kosong = ke halaman sendiri -->
<form action="latihan4.php" method="post">
	Masukkan nama :
	<input type="text" name="nama">
	<br>
	<button type="submit" name="submit">Kirim</button>
</form>

</body>
</html>