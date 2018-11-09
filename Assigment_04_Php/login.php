
 <?php
session_start();
if(isset($_POST["pwd"]))
{
	
	$hash_user='$2y$10$wSfro4e3zkRLWeAKeiaKWeBDxSiAYaAgNylnPjjNtnnqEUrSLNVSW';
	$hash_password = '$2y$10$9Yns5ixfGTYYL7kRHkWu8uJvLDFqla8o/wpBN7XiSOs.19VHSuli.';

	if (password_verify($_POST["pwd"], $hash_password)&& password_verify($_POST["user"],$hash_user)) {
    	echo 'Password is valid!';
		$_SESSION['LAST_ACTIVITY']=time();
		header("Location:Home.php"); /* Redirect browser */
		exit();
	} else {
		echo '<script language="javascript">';
		echo' alert("Invalid UserName Or Password")';
		echo '</script>';
	
	}
}
?>


	
	

