<?php  
session_start(); 
if(isset($_SESSION['admin_sid']) || isset($_SESSION['customer_sid']))
{
	header("location:orderDetails.php");
}
else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Login</title>



  
  <link href="css/login.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body>
<section class="billboard light">
		<header class="wrapper light">
			<a href="index.html"><img class="logo" src="./img/logo.png" alt="Restaurant Logo"/></a>

			<nav>
			
				<ul id="check-class" >
					<li><a href="index.html">Home</a></li>
					
					<li><a href="./menu.html">Menu</a></li>
					<li><a href="./Gallery.html">Gallery</a></li>
					<li><a href="./promotions.html">Promotions/Events</a></li>
					<li><a href="./contact.html">Contact Us</a></li>
					<li><a href="./register.php">Sign In</a></li>
					
				</ul>
		 	</nav>
			</header>
      </section>
 
<div id="login-page" class="form-row">
    <div class="col s12 z-depth-4 card-panel">
      <form method="post" action="routers/router.php" class="login-form" id="form">
      <div class="login-box" >
    <h1>Please Login to order food</h1>
    <div class="textbox">
      <i class="fas fa-user"></i>
     <input name="username" id="username"type="text" placeholder="Username">
   </div>

   <div class="textbox">
    <i class="fas fa-lock"></i>
    <input name="password" id="password" type="password" placeholder="Password">
   </div>
   <div class="row">
			<a href="javascript:void(0);" onclick="document.getElementById('form').submit();" class="btn">Login</a>
          </div>
		  		<div class="row">
          <div class="buttom-text">
            <p class="or">don't have account?</p>
            <p class="register-text"><a href="register.php"><span class="text1">Register Here!</span></a></p>
          </div>         
        </div>
</div>


      </form>
    </div>
  </div>


  <!-- jQuery Library -->
  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <script type="text/javascript" src="js/custom-script.js"></script>

</body>
</html>
<?php
}
?>