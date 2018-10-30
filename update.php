<?php 

	require 'functions.php';

	// Ambil data id dari url
	$id = $_GET["id"];

	// Query data mahasiswa berdasarkan id
	$student = query("SELECT * FROM users WHERE id = $id")[0];

	if (isset($_POST["submit"])) {
				

		if (update($_POST) > 0) {
			echo "
				<script>
					alert('Data Berhasil Diupdate!');
					document.location.href = 'dashboard.php';	
				</script>
			";
		}	else {
			echo "
				<script>
					alert('Data Gagal Diupdate!');
					document.location.href = 'dashboard.php';	
				</script>
			";
		}		
	};

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Update</title>
 </head>
 <body>
 	
	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $student["id"] ?>">
		<label for="username">username : </label>
		<input type="text" name="username" id="username" required value="<?= $student["username"] ?>">
		<br>
		<br>
		<label for="password">password : </label>
		<input type="password" name="password" id="password" required value="<?= $student["password"] ?>">
		<br>
		<br>
		<label for="level">level : </label>
		<input type="text" name="level" id="level" required value="<?= $student["level"] ?>">
		<br>
		<br>
		<label for="fullname">fullname : </label>
		<input type="text" name="fullname" id="fullname" required value="<?= $student["fullname"] ?>">
		<br>
		<br>
		<button type="submit" name="submit">Update</button>
	</form>

 </body>
 </html>