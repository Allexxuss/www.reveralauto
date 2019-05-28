<?php session_start(); ?>
<!doctype html>
<?php include_once("DB.php"); 

if(isset($_POST["Save"]))
{
	$sesname = $_SESSION["name"];
    $name = strip_tags(trim($_POST["name"]));
	$surname = strip_tags(trim($_POST["surname"]));
	
	$build = strip_tags(trim($_POST["build"]));
	$appart = strip_tags(trim($_POST["appart"]));
    $post_code = strip_tags(trim($_POST["post_code"]));
    $city = strip_tags($_POST["city"]);
	$street = strip_tags($_POST["street"]);
	
	$country = strip_tags(trim($_POST["country"]));
    $license = strip_tags(trim($_POST["license"]));
	$tel = $_POST["tel"];
	
	mysqli_query($linkToBd, "UPDATE Register SET Name='$name', Surname='$surname', Street='$street', Building='$build', Apartament='$appart', Post_code='$post_code', Country='$country', City='$city', License_num='$license', Tel_num='$tel' WHERE Email = '$sesname'");	 
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="../css/45529.css">
<link rel="shortcut icon" type="image/ico" href="../img/logo.png"/>
<link rel="stylesheet" type="text/css" href="../css/new.css"/>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />
<title>PErsonal Data</title>
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
	<div class = "Forms">
			<form class="input" method="post" action="PersonalData.php">
					<div class="wrapper">
						<div style="display: flex; justify-content: space-around;">
							<div style="padding-left: 20px;">
								<?php 
								
								$session_name = $_SESSION["name"];
								$DB = mysqli_query($linkToBd,"SELECT * FROM Register WHERE Email = '$session_name' ");
								$dataForUser = mysqli_fetch_assoc($DB);
								$_name = $dataForUser["name"];
								$surname = $dataForUser["surname"];
								
								$build = $dataForUser["Building"];
								$appart = $dataForUser["Apartament"];
								$post_code = $dataForUser["Post_code"];
								$city = $dataForUser["City"];
								$street = $dataForUser["Street"];
								$country = $dataForUser["Country"];
								$license = $dataForUser["License_num"];
								$tel = $dataForUser["Tel_num"];		
								
								?>
								<h3>Name</h3><input type="text" required name="name" value="<?php echo("$_name"); ?>" placeholder="Enter your Name"></input><br>
								<h3>Surname</h3><input type="textarea" value="<?php echo("$surname"); ?>" placeholder="Enter your Surname" required name="surname"><br>
								<h3>Street</h3><input type="textarea" value="<?php echo("$street"); ?>" placeholder="Street" required name="street"><br>
								<h3>Building no.</h3><input type="number" value="<?php echo("$build"); ?>" placeholder="Building no." required name="build"><br>
								<h3>Telephone number</h3><input type="number" value="<?php echo("$tel"); ?>" placeholder="Tel.:" required name="tel"><br>
							</div>
							<div style="padding-right: 20px;">
								<h3>Apartament no</h3><input type="textarea" value="<?php echo("$appart"); ?>" placeholder="Apartament no." required name="appart"><br>
								<h3>Postal code</h3><input type="textarea" value="<?php echo("$post_code"); ?>" placeholder="Postal code" required name="post_code"><br>
								<h3>City</h3><input type="textarea" value="<?php echo("$city"); ?>" placeholder="City" required name="city"><br>
								<h3>Country</h3><input type="textarea" value="<?php echo("$country"); ?>" placeholder="Country" required name="country"><br>
								<h3>Driving license numb.</h3><input type="textarea" value="<?php echo($dataForUser["License_num"]); ?>" placeholder="License num." required name="license"><br>
							</div>
						</div>
						<br>
					</div>
					<div class="button">
						<a href="Cabinet.php"><button name="Save" type="submit" style="border-radius: 50%; height: 75px; width: 75px;">Save</button></a>
					</div>
				</form>
	</div>
</body>
</html>

