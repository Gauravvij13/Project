<?php
require_once'includes/settings.php';
?>


<!doctype html>
<html>
<head>
  <style >
 .log p{
  margin:0;
  padding:0;
font-weight:bold;   
}
    .log input[type="submit"]
{
  border:none;
  outline:none;
  height:40px;
  background:#fb2525;
  color:#fff;
  font-size:18px;
border-radius:20px;}

  </style>
	<link rel="stylesheet" href="css/register.css">
</head>
<body style="background:url(images/f.jpg);background-size:cover;background-repeat:no-repeat;">
    


	<div style="padding:15px;background-color :rgba(240 ,240, 240, 0.1);"> 
		 <a href="home.php"> <img src="images/mini.png"width="180px"height="80px"></a>
	<div  class="id" style="font-size:30px;float:right;padding-right:100px;padding-top:14px;padding-bottom:5px"> 
	
	<a href="login.php">LogIn</a>  
	<a href="contact.php">Contact</a> 
	<a href="about.php">About us</a> 
	</div></div>
    <div class="log">
      <img src="./images/d.png" class="d">
		<h1 style="font-size: 25px">Register here</h1>
		<form action="./register.php" method="post">
			<p>Full Name</p>
			<input type="text" name="name" placeholder="Enter Name">
			<p>UserName</p>
			<input type="text" name="username" placeholder="Enter UserName">
			Gender  &nbsp &nbsp
			<input type="radio" name="gender" value="male">Male  &nbsp &nbsp &nbsp &nbsp 
			<input type="radio" name="gender" value="Female">Female <br><br>
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter password">
			<input type="password" name="" placeholder="ReEnter password">
			Phone
			<input type="text" name="ph" placeholder="Phone Number">
			<input type="submit" name="register" value="Register">
       <a id="acc" href="login.php">Already have an account!</a>

		</form>
	</div>

  <script type="text/javascript">
    

  </script>



<?php 
$name = $user = $gender = $pass = $phone = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
				if (empty($_POST["name"])) {
    				$nameErr = "Name is required";
                    }
    			else {
    				$name = ($_POST["name"]);
  					}
  				if (empty($_POST["username"])) {
    			   $userErr = "Email is required";
  					}
  			   else {
   					 $user = addslashes($_POST["username"]);
  					}
  				if (empty($_POST["gender"])) {
    				$genderErr = "Gender is required";
  					}
  			   else {
  					  $gender = test_input($_POST["gender"]);
  					}
  				if (empty($_POST["password"])) {
   					 $passwordErr = "Password is required";
 					 }
   				else {
    					$pass = addslashes($_POST["password"]);
  						}
  				if (empty($_POST["ph"])) {
    				$phoneErr = "Phone is required";
 					 } 
  					else {
				    $phone = test_input($_POST["ph"]);
  					}
if (!empty($name)&&!empty($username)&&!empty($gender)&&!empty($pass)&&!empty($phone)){
$sql ="INSERT INTO `table` (name,username,gender,password,phone) values ('$name','$user','$gender','$pass','$phone')";
		
		if($con->query($sql) === TRUE)
{			
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

}else  echo "<script type=\"text/javascript\">
        alert('please full fill all details')</script>";

  					
}
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	?>
  
	
</body>
</html>