<!doctype html>
<html lang="en">
<head>
<style> 
.id a{
text-decoration:none;
padding:20px;
font-family:Helvetica-Bold;

color:white;}
#video-background {
  position: fixed;
  right: 0; 
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
  width: auto; 
  height: auto;
  z-index: -100;
}
body{
	 margin: 0;
  padding: 0;
/*  Background fallback in case of IE8 & down, or in case video doens't load, such as with slower connections  */
  background: #333;
  background-attachment: fixed;
  background-size: cover;
}

.id a:hover{
background-color:rgba(240,240,240,0.1);
padding:35px;color:silver;
}

</style>
	<meta charset="UTF-8">
	<title>	AutoWorld	</title>
</head>
<body >
	<div style="padding:15px;background-color :rgba(240 ,240, 240, 0.0);"> 
		 <a href="home.php"> <img src="images/mini.png"width="180px"height="80px"></a>
	<div  class="id" style="font-size:30px;float:right;padding-right:100px;padding-top:14px;padding-bottom:5px"> 
	<a  href="login.php">LogIn</a>  
	<a href="register.php">Register</a>  
	<a href="contact.php">Contact</a> 
	<a href="about.php">About me</a> 
	</div></div>
	<video autoplay loop id="video-background"  plays-inline>
  <source src="./images/v2.mp4" type="video/mp4">
</video>
	

	
	
	
	
</body>
</html>