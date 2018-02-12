<?php
    require_once ('includes/settings.php');

   if(!empty($_POST ['submit'])){
   	if(empty($_POST['email'])  || empty($_POST['password'])){
   		 echo "<script type=\"text/javascript\">
   		  alert('please full fill all details')</script>";
   		}

    $email = addslashes($_POST['email']);
    $password = addslashes( $_POST['password'] );
$sql = "SELECT * FROM `table` WHERE `username` = '$email' LIMIT 0,1;";
    $result = $con->query($sql);
   	if( $result->num_rows > 0 ){	
   		$array = $result->fetch_array();
   		
   		
   		if($password === $array['password']){
   		
			echo  ("<script> window.location.href='./contact.php' </script>");
		}else{
			echo  "<script type=\"text/javascript\">
   		  alert('Wrong Password')
   		  </script>";
	  }}}  ?>
<!doctype html>
<html>
<head>
	<style >
	.log input[type="submit"]
{
	border:none;
	outline:none;
	height:40px;
	background:#fb2525;
	color:#fff;
	font-size:18px;
border-radius:20px;}
		a{
text-decoration:none;
color: white;
padding:20px;
font-family:Helvetica-Bold;
}
.id a:hover{
background-color:rgba(240,240,240,0.1);
padding:35px;color:silver;
}
h1{
	font-weight:bold; 
    
}

	</style>
    <title>AutoWorld</title>
	<link rel="stylesheet" href="./css/style4.css">
</head>
<body>
	
	<div style="padding:15px;background-color :rgba(240 ,240, 240, 0.1);"> 
		 <a href="home.php"> <img src="images/mini.png"width="180px"height="80px"></a>
	<div  class="id" style="font-size:30px;float:right;padding-right:100px;padding-top:14px;padding-bottom:5px"> 
	
	<a href="register.php">Register</a>  
	<a href="contact.php">Contact</a> 
	<a href="about.php">About us</a> 
	</div></div>



	<div class="log">
	<img src="./images/d.png" class="d">

		<h1 >Sign In</h1>
	<form action="" method="POST">
	<p>Username</p>
	<input type="text" name="email" placeholder="Enter Username">
	<p>Password</p>
	<input type="password" name="password" placeholder="Enter password">
	<input type="submit" name="submit" value="logIn">
</form>
	<a style="float: right;font-size: 30px;color:white" href="register.php">Dont Have An Account?</a>
	</div>
</body>
</html>