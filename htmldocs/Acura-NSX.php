<?php session_start(); ?>
<!doctype html>
<?php include_once("DB.php"); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="../css/45529.css">
<link rel="shortcut icon" type="image/ico" href="../img/logo.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<meta charset="utf-8">
<title>NSX</title>
</head>
<body class="wall">
<header>
	<div style="display: flex; justify-content: space-between">
		<div class="logo">
			<a href="../Index.php"><img src="../img/logo.png" alt="Reweral-Auto" title="Reweral-Auto" class="logo"></a>
		</div>
		<div class="Login">
			<?php  
				if(isset($_SESSION["name"]))
				{
					echo "<a href='Cabinet.php'>Hello, ".$_SESSION["name"];
					echo (
						"<a>
							<form method='post' action='Index.php'>
								<button name='logout' type='submit'>Log out</button>
							</form>
						</a>");
					if(isset($_POST["logout"]))
						session_destroy();									
				}
				else
					echo "<a href='Login.php'>Log In</a>
						<a href='SignUp.php' >SingUp</a>";
			?>
		</div>
	</div>
	</header>

<div class="maingallery" style="width:80%; margin: 0 auto; margin-top: 5%">	
	<div class="w3-row-padding gallery">
		<div class="w3-col s3 w3-container">
		<a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('1_large');">
		  <img src="../images/acura/nsx/1_large.png" alt="" style="width:100%; border: inset 10px white;">
		</a>
		</div>
		<div class="w3-col s3 w3-container">
		  <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('2_large');">
			<img src="../images/acura/nsx/2_large.png" alt="Snow" style="width:100%; border: inset 10px white;">
		  </a>
		</div>
		<div class="w3-col s3 w3-container">
		  <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('3_large');">
			<img src="../images/acura/nsx/3_large.png" alt="Mountains" style="width:100%; border: inset 10px white;">
		  </a>
		</div>
		<div class="w3-col s3 w3-container">
		  <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('4_large');">
			<img src="../images/acura/nsx/4_large.png" alt="Lights" style="width:100%; border: inset 10px white;">
		  </a>
		</div>
	  </div><br>
	  <div class="largegallery">		  
		   <div id="1_large" class="picture w3-display-container" style="display:none;   border: inset 10px white; ">
			<img src="../images/acura/nsx/1_large.png" alt="" style="width:100%">
			<span onclick="this.parentElement.style.display='none'" 
			class="w3-display-topright w3-button w3-transparent">&times;</span>
		  </div>		  
		  <div id="2_large" class="picture w3-display-container" style="display:none;   border: inset 10px white; ">
			<img src="../images/acura/nsx/2_large.png" alt="Snow" style="width:100%">
			<span onclick="this.parentElement.style.display='none'" 
			class="w3-display-topright w3-button w3-transparent">&times;</span>
		  </div>
		  <div id="3_large" class="picture w3-display-container" style="display:none;   border: inset 10px white; ">
			<img src="../images/acura/nsx/3_large.png" alt="Mountains" style="width:100%">
			<span onclick="this.parentElement.style.display='none'" 
			class="w3-display-topright w3-button w3-transparent">&times;</span>
		  </div>
		  <div id="4_large" class="picture w3-display-container" style="display:none; border: inset 10px white; ">
			<img src="../images/acura/nsx/4_large.png" alt="Lights" style="width:100%">
			<span onclick="this.parentElement.style.display='none'" 
			class="w3-display-topright w3-button w3-transparent">&times;</span>
		  </div>
	  </div>
</div>
	<?php 
		$session_name = $_SESSION["name"];
		$DBCar = mysqli_query($linkToBd,"SELECT * FROM Cars WHERE Model = 'NSX' ");
		$Car = mysqli_fetch_assoc($DBCar);
		$price = $Car["Price"];
		$make = $Car["Make"];
		$model = $Car["Model"];
		$year = $Car["year"];
		$type_of_engine = $Car["type_of_engine"];
		$transmisson = $Car["transmisson"];
		$o_to_100 = $Car["o_to_100"];
		$HP = $Car["HP"];


	?>	
	<div class="table">
		<h1 align = "center">Specifications</h1>
		<div style="border: 4px inset #FF0004; display: flex; flex-direction: row; justify-content: space-around; text-align: left">
			<div class="table_left">
			<?php
			echo(
				"<p>Make</p>
				<p>model</p>
				<p>year</p>
				<p>Type of engine</p>
				<p>Transmission</p>
				<p>From 0 to 100 Km/h</p>
				<p>Horsepower</p>
				<p>Price</p>
			</div>
			<div class='table_right'>
				<p>$make</p>
				<p>$model</p>
				<p>$year</p>
				<p>$type_of_engine</p>
				<p>$transmisson</p>
				<p>$o_to_100 s</p>
				<p>$HP hp</p>
				<p>$ $price </p>");
				?>
			</div>
		</div>
		<div style="text-align: center; width: 100%; margin-top: 5%; margin-bottom: 5%;">
			<a href="Faktura.php"><button class="button_to" type="submit"><p>RENT</p></button></a>
		</div>		
	</div>

  <script>
  function openImg(imgName) {
	var i, x;
	x = document.getElementsByClassName("picture");
	for (i = 0; i < x.length; i++) {
	   x[i].style.display = "none";
	}
	document.getElementById(imgName).style.display = "block";
  }
  </script>
</body>
</html>
