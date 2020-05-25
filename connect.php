<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/registerSuccess.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  </head>
  <body>
<?php
  

	$username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
	$password = $_POST['password'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','register');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(username, email, phone, password) values(?, ?, ?, ?)");
		$stmt->bind_param("ssis", $username, $email, $phone, $password);
		$execval = $stmt->execute();
		echo $execval;
		
		
		
		$stmt->close();
		$conn->close();
	}
	
?>
<div class="container">
	<div class="registerMessage" >
		<h2> <?php echo "Welcome $username!" ?> </h2>
		<h1>Your account has been created.</h1>
		<p>Login Now from <a href="login.html"><span id=log>HERE</span></a></p>
	</div>
</div>

    </body>
    </html>