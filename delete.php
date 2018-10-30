<?php 

	require 'functions.php';

	$id = $_GET["id"];

	if (delete($id) > 0) {
		echo "
			<script>
				alert('Data berhasil dihapus!');
				document.location.href = 'dashboard.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data berhasil dihapus!');
				document.location.href = 'dashboard.php';
			</script>
		";
	}

 ?>