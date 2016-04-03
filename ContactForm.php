<?php
	
	$name = $_GET["name"];
	$email = $_GET["email"];
	$phone = $_GET["phone"];
	$description = $_GET["description"];
	
	if($name==null || $email==null || $description==null){
		
		echo "The form is incomplete.";
		
	}else{
	
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
		} 
		$sql = "INSERT INTO 1997742_saumil.contact (name, email, phone, description, time)
		VALUES ('".$name."','".$email."','".$phone."','".$description."','".$time."')";

		if ($conn->query($sql) === TRUE) {
			//echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
		
		// the message
		$msg = "Name: ".$name."\nEmail: ".$email."\nPhone: ".$phone."\nDescription: ".$description."\nTime: ".$time;

		// use wordwrap() if lines are longer than 70 characters
		$msg = wordwrap($msg,70);

		// send email
		mail("saumil11@yahoo.com","You have a contact query",$msg);
	
	}
?>
<h3>Thank you for contacting me, I will get back to you as soon as I can...</h3>
<a href="http://www.saumilsoni.me">Go back</a>