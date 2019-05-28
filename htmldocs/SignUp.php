<?php session_start(); ?>
<?php
include_once("DB.php");

if(isset($_POST["signUp"]))
{
    $name = strip_tags(trim($_POST["name"]));
	$surname = strip_tags(trim($_POST["surname"]));
    $email = strip_tags(trim($_POST["email"]));
    $password = strip_tags($_POST["password"]);
	 
	mysqli_query($linkToBd, "INSERT INTO Register (name, surname, email, password)
                                    VALUES ('$name', '$surname','$email','$password') ");
    echo "<p style='color: #4cae4c; font-size: 20px; text-align: center; font-family: 'Helvetica' >Congratulations!</p>";
		$_SESSION["name"] = $name;
	header('Location: ../Index.php');
}
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="../css/45529.css">
<link rel="shortcut icon" type="image/ico" href="../img/logo.png"/>
<meta charset="utf-8">
<title>Sign</title>
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
			<form class="input" method="post" action="SignUp.php">
					<div class="wrapper">
						<h3>Name</h3><input type="textarea" placeholder="Enter your Name" required name="name" ><br>
						<h3>Surname</h3><input type="textarea" placeholder="Enter your Surname" id="Surname" required name="surname"><br>
						<h3>E-Mail</h3><input type="email" placeholder="example@gmail.com" id="Email" required name="email"><br>
						<h3>Password</h3><input type="password" id="pas" placeholder="Password" required name="password"><br>
						<h3>Confirm Password</h3><input type="password" id="verpas" placeholder="Confirm Password" required name="verpas"><br>
					</div>
					<div class="button">
						<button name="signUp" type="submit">SignUp</button>
					</div>
				</form>
	</div>
</body>
</html>

