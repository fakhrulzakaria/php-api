<?php 

	require 'functions.php';

	if (isset($_POST["submit"])) {

		if (create($_POST) > 0) {
			echo "
				<script>
					alert('Data Berhasil Ditambahkan!');
					document.location.href = 'dashboard.php';	
				</script>
			";
		}	else {
			echo "
				<script>
					alert('Data Gagal Ditambahkan!');
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
 	<title>Tambah Siswa</title>
 </head>
 <body>
 	
	<form action="" method="post" enctype="multipart/form-data">
		<label for="username">username : </label>
		<input type="text" name="username" id="username" required>
		<br>
		<br>
		<label for="password">password : </label>
		<input type="password" name="password" id="password" required>
		<br>
		<br>
		<label for="level">level : </label>
		<input type="text" name="level" id="level" required>
		<br>
		<br>
		<label for="fullname">fullname : </label>
		<input type="text" name="fullname" id="fullname" required>
		<br>
		<br>
		<button type="submit" name="submit">Tambah</button>
	</form>

 </body>
 </html>