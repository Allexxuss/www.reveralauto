<?php
$linkToBd = mysqli_connect("localhost:3306","root","");
$bd = mysqli_select_db($linkToBd, "test");

if(!$linkToBd || !$bd)
{
	echo mysql_error();
}
?>