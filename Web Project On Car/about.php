<?php
require_once 'includes/settings.php';
?>
<!doctype html>
<html>
<head>
	<style >
		#video-background {
			margin-top: -50px;
float: right;
  right: 0; 
  bottom: 0;
  min-width: 80%; 
  min-height: 100%;
  width: auto; 
  height: auto;
  z-index: -100;
}
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

	</style>
    <title>AutoWorld</title>
	
</head>
<body style="background-color:black" >
<div style="padding:15px;background-color :rgba(240 ,240, 240, 0.0);"> 
		 <a href="home.php"> <img src="images/mini.png"width="180px"height="80px"></a>
	<div  class="id" style="font-size:30px;float:right;padding-right:100px;padding-top:14px;padding-bottom:5px"> 
	<a  href="login.php">LogIn</a>  
	<a href="register.php">Register</a>  
	<a href="contact.php">Contact</a> 

	</div></div>





	
<div><div style="float:left;width:20%;margin-top: -55px">	
<p style="color:white;margin-left: 20px;float:left">
	A car (or automobile) is a wheeled motor vehicle used for transportation. Most definitions of car say they run primarily on roads, seat one to eight people, have four tires, and mainly transport people rather than goods.[2][3] Cars came into global use during the 20th century, and developed economies depend on them. The year 1886 is regarded as the birth year of the modern car, when German inventor Karl Benz built his Benz Patent-Motorwagen. Cars did not become widely available until the early 20th century. One of the first cars that was accessible to the masses was the 1908 Model T, an American car manufactured by the Ford Motor Company. Cars were rapidly adopted in the US, where they replaced animal-drawn carriages and carts, but took much longer to be accepted in Western Europe and other parts of the world.

Cars have controls for driving, parking, passenger comfort and safety, and controlling a variety of lights. Over the decades, additional features and controls have been added to vehicles, making them progressively more complex. Examples include rear reversing cameras, air conditioning, navigation systems, and in car entertainment. Most cars in use in the 2010s are propelled by an internal combustion engine, fueled by the combustion of fossil fuels. This causes air pollution.
</p></div><div style="margin-top: 50px">
<video autoplay loop id="video-background"  plays-inline>
  <source src="./images/v1.mp4" type="video/mp4">
</video>
	</div>
	
	
	</div>
</body>
</html>