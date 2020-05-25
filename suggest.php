<?php
  

	$name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

	

	// Database connection
	$conn = new mysqli('localhost','root','','user_opinion');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into opinion(name, email, message) values(?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo "thanks for your concern!!!";
		header("location: index.html")
		
		
		$stmt->close();
		$conn->close();
	}
	?>
	

