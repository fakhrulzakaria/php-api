<?php 

	$conn = mysqli_connect("localhost", "root", "", "php-api");

	function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$box = [];
		while ($data = mysqli_fetch_assoc($result)) {
			$box[] = $data;
		}
		return $box;
	}

	function create($data) {
		global $conn;
		$username = htmlspecialchars($data["username"]);
		$password = htmlspecialchars($data["password"]);
		$level = htmlspecialchars($data["level"]);
		$fullname = htmlspecialchars($data["fullname"]);

		$query = "INSERT INTO users
					VALUES
						('', '$username', '$password', '$level', '$fullname')		
				";

		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}

	function delete($id) {
		global $conn;
		mysqli_query($conn, "DELETE FROM users WHERE id = $id" );
		return mysqli_affected_rows($conn);
	}

	function update($data) {
		global $conn;
		
		$id = $data["id"];
		$username = htmlspecialchars($data["username"]);
		$password = htmlspecialchars($data["password"]);
		$level = htmlspecialchars($data["level"]);
		$fullname = htmlspecialchars($data["fullname"]);

		$query = "UPDATE users SET 
					username = '$username',
					password = '$password',
					level = '$level',
					fullname = '$fullname'
				WHERE id = $id				
				";

		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}

	function search($keyword) {
		$query = "SELECT * FROM users
					WHERE
				id LIKE '%$keyword%' OR 
				username LIKE '%$keyword%' OR
				password LIKE '%$keyword%' OR
				level LIKE '%$keyword%' OR
				fullname LIKE '%$keyword%' 
				";

		return query($query);				
	}

 ?>