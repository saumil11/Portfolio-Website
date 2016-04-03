<?php
	
	$linkName = $_GET["linkName"];
	$time = date("Y-m-d",time());
	
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
		$sql = mysql_query("SELECT * FROM 1997742_saumil.link");
		$num_rows = mysql_num_rows($sql);
		echo $num_rows;
	} 
	echo "aksdkjansdkjnasd";	
?>