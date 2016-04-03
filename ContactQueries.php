<?php
	
	$name = $_POST["username"];
	$password = $_POST["password"];
	
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
			
			$sql = "SELECT * FROM 1997742_saumil.contact";
			$result = $conn->query($sql);
			echo "<b>Total queuries: </b>".$result->num_rows;
			echo "<br><br><br>";
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<b>Name: </b>".$row["name"];
					echo "<br>";
					echo "<b>Email: </b>".$row["email"];
					echo "<br>";
					echo "<b>Phone: </b>".$row["phone"];
					echo "<br>";
					echo "<b>Details: </b>".$row["description"];
					echo "<br>";
					echo "<b>Time: </b>".$row["time"];
					echo "<br>";
					echo "<form action='DeleteQuery.php' method='post'>";
					echo "<input type='hidden' name='username' value=".$name.">";
					echo "<input type='hidden' name='password' value=".$password.">";
					echo "<input type='hidden' name='id' value=".$row['id'].">";
					echo "<input type='submit' value='Delete'>";
					echo "</form>";
					echo "<br><br><br>";
				}
			} else {
				echo "0 results";
			}
			
		} 

	}else{
		
		echo "<br><br><br><center><h1>You shall not pass..........</h1><center>";
		
	}
		
?>