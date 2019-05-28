<?php session_start(); ?>
<?php
include_once("DB.php");

if(isset($_POST["u_sign_in"]))
{
    $login = $_POST["email"];
    $password = $_POST["password"];

    $query = mysqli_query($linkToBd, "SELECT * FROM Register WHERE email ='$login'");
    $dataForUser = mysqli_fetch_assoc($query);

    if($dataForUser["password"] == $password)	
	{
        header('Location: ../Index.php');
		$_SESSION["name"] = $login;
    }
    else
    {
        echo " <h5 style='text-align: center'>Password or Login is incorrect </h5> ";
    }
}
//        echo "qwwqqw";
//        $_SESSION["name"] = $login;
//        echo $_SESSION["name"];

?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="../css/45529.css">
<link rel="shortcut icon" type="image/ico" href="../img/logo.png"/>
<meta charset="utf-8">
<title>Login</title>
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
	<div class = "FormsLogin">
			<form class="input" method="post" action="Login.php">
					<div class="wrapper">
						<h3>E-Mail</h3><input type="email" placeholder="example@gmail.com" id="Email" required name="email"><br>
						<h3>Password</h3><input type="password" id="pas" placeholder="Password" required name="password"><br>
					</div>
					<div class="button">
						<button name="u_sign_in" type="submit">LogIn</button>
					</div>
				</form>
	</div>
</body>
</html>

