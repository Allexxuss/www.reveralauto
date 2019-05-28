<?php session_start(); ?>
<!doctype html>
<?php include_once("DB.php"); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="../css/45529.css">
<link rel="shortcut icon" type="image/ico" href="../img/logo.png"/>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />
<title>Cabinet</title>
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
					echo "<a href='htmldocs/Login.php'>Log In</a>
						<a href='htmldocs/SignUp.php' >SingUp</a>";
			?>
		</div>
	</div>
	</header>
	<div class="caginet_menu">
		<table style="background-color: #9EFBFF; width: 100%">
			<tbody>
			<tr>
				<td><h2><a href="#" style="color: black; text-decoration: none; margin-left: 25%;">Manage your account</a></h2></td></a>
				<td><h2><a href="#" style="color: black; text-decoration: none; margin-right: 25%;">History</a></h2></td></a>
			</tr>
			</tbody>
		</table>
	</div>
<div class="borders">
	<div style="padding-top: 50px; margin-left: 150px;">
	<div class="acc_params">
		<div class="panel-acc">
			<span>Account parameters</span>
			<a href="#" style="padding-left: 150px;"><img src="../images/Tab/edit.png" title="Edit" alt="Edit" style="width: 30px; height: 30px;"/></a>
		</div>
		<div style="display: flex; justify-content: space-between;">
			<div>
				<div>
					<p>ACCOUNT STATUS</p>
						<?php
							$session_name = $_SESSION["name"];
							$DB = mysqli_query($linkToBd,"SELECT * FROM Register WHERE Email = '$session_name' ");
							$dataForUser = mysqli_fetch_assoc($DB);
							if($dataForUser["Verified"] == 1)
								echo("<p  style='color: green'><strong> Verified </strong></p>");
							else
								echo("<p style='color: red''><strong> Not verified </strong></p>");
						?> 
				</div>
			</div>
			<div style="padding-right: 450px;">
				<div>
					<p class="field-label"><span>E-MAIL ADDRESS</span></p>
					<p><strong style='color = green'>
					<?php
						$email = $dataForUser["email"];
						echo $email;
					?></strong></p>
				</div>
				<div>
					<p class="field-label"><span>PASSWORD</span></p>
					<p class="field-value"><strong>	
					<?php for($i = 0; $i < strlen ($dataForUser["password"]); $i++)
						echo('*');
					?>
					</strong></p>
				</div>
			</div>
		</div>
	</div>
	<div class="acc_params">
		<div class="panel-acc">
			<span>Personal data</span>
			<a href="PersonalData.php" style="padding-left: 245px;"><img src="../images/Tab/edit.png" title="Edit" alt="Edit" style="width: 30px; height: 30px;"/></a>
		</div>
		<div style="display: flex; justify-content: space-between;">
			<div>
				<div>
					<p>FIRST NAME</p>
					<p><strong><?php echo($dataForUser["name"]) ?></strong></p>
				</div>
				<div>
					<p>SURNAME</p>
					<p><strong><?php echo($dataForUser["surname"]) ?></strong></p>
				</div>
				<div>
					<p>STREET</p>
					<p><strong><?php echo($dataForUser["Street"]) ?></strong></p>
				</div>
				<div>
					<p>BUILDING NO</p>
					<p><strong><?php echo($dataForUser["Building"]) ?></strong></p>
				</div>
				<div>
					<p>APARTMENT NO</p>
					<p><strong><?php echo($dataForUser["Apartament"]) ?></strong></p>
				</div>

			</div>
			<div style="padding-right: 320px;">
				
				<div>
					<p>POSTAL CODE</p>
					<p><strong><?php echo($dataForUser["Post_code"])?></strong></p>
				</div>
				<div>
					<p>CITY</p>
					<p><strong><?php echo($dataForUser["City"]) ?></strong></p>
				</div>
				<div>
					<p>COUNTRY</p>
					<p><strong><?php echo($dataForUser["Country"]) ?></strong></p>
				</div>
				<div>
					<p class="field-label"><span>DRIVING LICENSE NUMBER</span></p>
					<p class="field-value"><strong><?php echo($dataForUser["License_num"]) ?></strong></p>
				</div>
				<div>
					<p>TELEPHONE NUMBER</p>
					<p><strong><?php echo($dataForUser["Tel_num"]) ?></strong></p>
				</div>
			</div>
		</div>
	</div>	
	</div>
</div>
	</body>
</html>
