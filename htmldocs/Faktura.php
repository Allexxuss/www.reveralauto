<?php session_start(); ?>
<!doctype html>
<?php include_once("DB.php"); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="../css/45529.css">
<link rel="shortcut icon" type="image/ico" href="../img/logo.png"/>
<link rel="stylesheet" type="text/css" href="../css/new.css"/>
<meta charset="utf-8">
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
		$DB = mysqli_query($linkToBd,"SELECT * FROM Register WHERE Email = '$session_name' ");
		$DBCar = mysqli_query($linkToBd,"SELECT * FROM Cars WHERE Model = 'NSX' ");
		$dataForUser = mysqli_fetch_assoc($DB);
		$Car = mysqli_fetch_assoc($DBCar);
		$name = $dataForUser["Name"];
		$surname = $dataForUser["Surname"];
		$make = $Car["Make"];
		$model = $Car["Model"];
		$nr_reg = $Car["Nr_reg"];
		$price = $Car["Price"];
	?>	
		<div class = "Forms">
			<form class="input" method="post" action="Cabinet.php">
					<div class="wrapper">
						<div style="display: flex; justify-content: space-around;">
							<div style="padding-left: 20px;">	
								<h3>Imię</h3><input type="text" value="<?php echo("$name"); ?>"></input><br>
								<h3>Nazwisko</h3><input type="text" value="<?php echo("$surname"); ?>"></input><br>
								<h3>Data wynaęcia</h3><input type="date"></input><br>
								<h3>Godzina wynajęcia</h3> <input type="time"></input><br>
								<h3>Numer rejestracyjny</h3> <p><?php echo("$nr_reg"); ?> </p>
							</div>
							<div style="padding-right: 20px;">
								<h3>Samochód</h3><p><?php echo("$make"." ".$model); ?> </p>
								<h3>Data zwrotu</h3><input type="date"></input><br>
								<h3>Godzina zwrotu</h3><input type="time"></input><br>
								<h3>Wartość(za dobę)</h3> <p><?php echo("$price");?> </p>
								<h3>Ostateczna cena</h3><br>
							</div>
						</div>
					</div>
					<div class="button">
						<a href="Cabinet.php" style="text-decoration:none;color: black;text-shadow: black 0 0 1px; ">
						<button name="Wynajmuj" type="submit" style="border-radius: 50%; height: 75px; width: 75px;">Wynajmuj</button></a>
					</div>
				</form>
			</div>

	</body>
</html>
