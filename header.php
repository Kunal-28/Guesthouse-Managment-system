



<?php

$conn=mysqli_connect("localhost","root","","guest_house");
if(!isset($conn))
{
	echo "Sorry! Database Connection error";
}
else
{
	error_reporting(E_ERROR | E_PARSE);
}



?>


        <link rel="stylesheet" type="text/css" href="css/oi.css">
		 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		 <script type="text/javascript" src="js/jquery.min.js"></script>