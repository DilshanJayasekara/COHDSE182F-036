<html>
<head><title>Home</title></head>
<body>
<?php
session_start();
$time = $_SERVER['REQUEST_TIME'];
$timeout_duration = 10;
if (isset($_SESSION['LAST_ACTIVITY']) && 
   ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
    session_unset();
    session_destroy();
	session_start();
	header("Location:index.html");
	exit();
}
else if($_SESSION['LAST_ACTIVITY'])
{
	include "LeftBar.php";
	include "dropdownMenu.php";
	include "Image_Slides_Show.php";
}
else
{
	header("Location:index.html");
}
?>
</body>
</html>