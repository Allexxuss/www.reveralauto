<?php session_start(); ?>
<!doctype html>
<?php include_once("DB.php"); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="../css/45529.css">
<link rel="shortcut icon" type="image/ico" href="../img/logo.png"/>
<link rel="stylesheet" type="text/css" href="../css/new.css"/>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />
<title>Acura</title>
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
	<?php 
		$session_name = $_SESSION["name"];
		$DBCar = mysqli_query($linkToBd,"SELECT * FROM Cars WHERE Model = 'NSX' ");
		$Car = mysqli_fetch_assoc($DBCar);
		$price = $Car["Price"];
	?>	
	<div class="top" style="display: inline-block; width: 80%; margin-left: 13%;">
		<ul style=" display: flex; flex-wrap: wrap; list-style: outside none none; margin-bottom: 5%; padding: 0;text-align: center; width: 100%;">
			<li><div class="Acura_ILX">
				<ul class="zoom_img">
					<h2>Acura ILX</h2>
					<li><a href = "#"><img src="../images/acura/Acura_ILX.png" alt="Acura_ILX"></a></li>
					<li style="font-size: 27px;"><a style="font-size: 27px">$28,100</a></li>
					<li style="font-size: 27px; border: 4px inset #FF0004;"><a href="#" style="text-decoration: none; color: #000000; text-shadow: red 0 0 1px;">See More</a></li>
				</ul>
			</div></li>
			<li><div class="Acura_NSX">
				<ul class="zoom_img">
					<h2>Acura NSX</h2>
					<li><a href = "./Acura-NSX.php"><img src="../images/acura/Acura_NSX.png" alt="Acura_NSX"></a></li>
					<li style="font-size: 27px;"><a style="font-size: 27px">$<?php echo("$price");?></a></li>
					<li style="font-size: 27px; border: 4px inset #FF0004;"><a href="Acura-NSX.php" style="text-decoration: none; color: #000000; text-shadow: red 0 0 1px;">See More</a></li>
				</ul>
			</div></li>
			<li><div class="Acura_RDX">
				<ul class="zoom_img">
					<h2>Acura RDX</h2>
					<li><a href = "#"><img src="../images/acura/Acura_RDX.png" alt="RDX"></a></li>
					<li style="font-size: 27px;"><a style="font-size: 27px">$35,500</a></li>
					<li style="font-size: 27px; border: 4px inset #FF0004;"><a href="#" style="text-decoration: none; color: #000000; text-shadow: red 0 0 1px;">See More</a></li>
				</ul>
			</div></li>
		<li><div class="Acura_RLX">
				<ul class="zoom_img">
					<h2>Acura RLX Sport</h2>
					<li><a href = "#"><img src="../images/acura/Acura_RLX_h.png" alt="Acura_RLX"></a></li>
					<li style="font-size: 27px;"><a style="font-size: 27px">$62,300</a></li>
					<li style="font-size: 27px; border: 4px inset #FF0004;"><a href="#" style="text-decoration: none; color: #000000; text-shadow: red 0 0 1px;">See More</a></li>
				</ul>
			</div></li>
		<li><div class="Acura_MDX">
				<ul class="zoom_img">
					<h2>Acura MDX</h2>
					<li><a href = "#"><img src="../images/acura/Acura_MDX.png" alt="Acura_MDX"></a></li>
					<li style="font-size: 27px;"><a style="font-size: 27px">$44,200</a></li>
					<li style="font-size: 27px; border: 4px inset #FF0004;"><a href="#" style="text-decoration: none; color: #000000; text-shadow: red 0 0 1px;">See More</a></li>
				</ul>
			</div></li>
		<li><div class="Acura_RLX">
				<ul class="zoom_img">
					<h2>Acura RLX</h2>
					<li><a href = "#"><img src="../images/acura/Acura_RLX.png" alt="RLX"></a></li>
					<li style="font-size: 27px;"><a style="font-size: 27px">$55,500</a></li>
					<li style="font-size: 27px; border: 4px inset #FF0004;"><a href="#" style="text-decoration: none; color: #000000; text-shadow: red 0 0 1px;">See More</a></li>
				</ul>
			</div></li>
		</ul>
		<div style="width: 90%;">
			<!--<iframe class="YouTube" width="100%" height="720px" src="https://www.youtube.com/embed/8EteOAVppGU?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
			<iframe class="YouTube" width="100%" height="720px" src="https://www.youtube.com/embed/Qi6UF2KfNac" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		
	</div>
	<section>
			<div class="popular">
				<h2 class="popular-searches">Popular Searches</h2>
				<div class="commonWrap">
					<div class="contactWrap">
					<ul>
						<li><p>Acura NSX</p></li>
						<li><p>Alfa Romeo Giulia</p></li>
						<li><p>BMW M5 Base</p></li>
						<li><p>Bugatti Chiron</p></li>
						
					</ul>
					</div>
					<div class="officeWrap">
					<ul>
						<li><p>Audi S5 3.0T Premium Plus quattro</p></li>
						<li><p>Alfa Romeo Stelvio</p></li>
						<li><p>Chevrolet Camaro</p></li>
						<li><p>Dodge Charger</p></li>
					</ul>
					</div>
					<div class="infoWrap">
					<ul>
						<li><p>Ford Focus</p></li>
						<li><p>Land Rover Discovery</p></li>
						<li><p>Mazda 6</p></li>
						<li><p>Mercedes-Benz AMG S 65</p></li>
					</ul>
					</div>
				</div>
			</div>
		</section>
	<div id="slideout">
	<img src="../img/contacts.png" alt="Contact">
	<div id="slideout_inner">
		<a href="http://fb.com"><img src="../images/contact/face.png" title="Facebook" alt="Facebook"/></a>
		<a href="https://twitter.com/"><img src="../images/contact/twit.png" title="Twiter" alt="Twiter"/></a>
		<a href="https://plus.google.com/"><img src="../images/contact/google.png" title="Google+" alt="Google"/></a>
		<a href="https://www.instagram.com"><img src="../images/contact/instagram.png" height="60" width="58" title="instagram" alt="instagram"/></a>
		<a href="https://www.youtube.com"><img src="../images/contact/you.png" height="60" width="58" title="youtube" alt="youtube"/></a>
	<br><br>
	</div>
</div>
	

	




</body>
</html>
