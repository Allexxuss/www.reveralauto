<?php session_start();?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
<title>Reweral-Auto</title>
<link rel="shortcut icon" type="image/ico" href="./img/logo.png"/>
</head>
<body>
	
<!--Slideoutleft -->
<link rel="stylesheet" type="text/css" media="screen" href="css/45529.css">
	<header>
	<div style="display: flex; justify-content: space-between">
		<div class="logo">
			<a href="Index.php"><img src="./img/logo.png" alt="Reweral-Auto" title="Reweral-Auto" class="logo"></a>
		</div>
		<div class="Login">
			<?php  
				if(isset($_SESSION["name"]))
				{
					echo "<a href='htmldocs/Cabinet.php'>Hello, ".$_SESSION["name"];
					echo (
						"<a>
							<form method='post' action='Index.php'>
								<button name='logout' type='submit'>Log out</button>
							</form>
						</a>");
					if(isset($_POST["logout"]))
					{
						session_destroy();
						header("Refresh:0");
					}
																			
				}
				else
					echo "<a href='htmldocs/Login.php'>Log In</a>
						<a href='htmldocs/SignUp.php' >SingUp</a>";
			?>
		</div>
	</div>
	</header>

<div id="slideout">
	<img src="./img/contacts.png" alt="Contact">
	<div id="slideout_inner">
		<a href="http://fb.com"><img src="./images/contact/face.png" title="Facebook" alt="Facebook"/></a>
		<a href="https://twitter.com/"><img src="images/contact/twit.png" title="Twiter" alt="Twiter"/></a>
		<a href="https://plus.google.com/"><img src="images/contact/google.png" title="Google+" alt="Google"/></a>
		<a href="https://www.instagram.com"><img src="images/contact/instagram.png" height="60" width="58" title="instagram" alt="instagram"/></a>
		<a href="https://www.youtube.com"><img src="images/contact/you.png" height="60" width="58" title="youtube" alt="youtube"/></a>
	<br><br>
	</div>
</div>
	<div class="top" style="display: inline-block; width: 80%; margin-left: 15%;">
	<ul style=" display: flex; flex-wrap: wrap; list-style: outside none none; margin: 0 auto; padding: 0;text-align: center; width: 100%;">
		<?php
	$array = array("acura", "alfa", "audi", "bmw", "bugatti", "chevrole", "dodje", "ford","land", "mazda", "mers", "nissan",);
	for($i=0; $i < count($array); $i++)
	{
		echo("<li><div><a href='htmldocs/$array[$i].php'><img src='images/little/$array[$i].png' width='100%' title='array[$i]' alt='array[$i]'/></a></div></li>");
	}
	?>
	</ul>
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
	<section>
		<div class="container">
			<span class="main_text">Contact Reweral-Auto.com</span>
			<div class="commonWrap">
				<div class="contactWrap">
				<ul>
					<h2>Customer Service</h2>
					<li><p>Text or Call: (888) 123-1234</p></li>
				</ul>
				</div>
				<div class="officeWrap">
				<ul>
					<h2>Reweral-Auto Offices</h2>
					<li><p>Fax: (321) 456-9876</p></li>
				</ul>
				</div>
				<div class="infoWrap">
				<ul>
					<h2>E-Mail</h2>
					<li><p>Reweral-Auto@gmail.com</p></li>
				</ul>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
	