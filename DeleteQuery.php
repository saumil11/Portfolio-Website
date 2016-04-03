<?php

	$name = $_POST["username"];
	$password = $_POST["password"];
	$id = $_POST["id"];
	
	if($name == "saumil" && $password == "Sam11sss"){

		$mysql_host = "fdb12.atspace.me";
		$mysql_database = "1997742_saumil";
		$mysql_user = "1997742_saumil";
		$mysql_password = "qqqqqqQ1!";
		
		// Create connection
		$conn = new mysqli($mysql_host, $mysql_user, $mysql_password);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}else{
		
			$sql = "DELETE FROM 1997742_saumil.contact WHERE id='".$id."'";
			mysqli_query($conn, $sql);
			echo "<form id='myForm' action='ContactQueries.php' method='post'>";
			echo "<input type='hidden' name='username' value=".$name.">";
			echo "<input type='hidden' name='password' value=".$password." id='finalField'>";
			echo "</form>";		
		}
	
	}

?>

<script>
	setInterval(function () {
		if(document.getElementById("finalField")){
		document.getElementById("myForm").submit();}
	}, 500);
</script>