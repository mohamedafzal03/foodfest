<?php
include('db.php');
if(isset($_POST["submit"]))
{
	$email=$_POST["email"];
	$password=$_POST["pass"];
	$query=mysqli_query($con,"select *from signup where email='$email' and pass='$password'");
	$num=mysqli_num_rows($query);
	if($num==1)
	{
		
		session_start();
		$_SESSION["id"]=$email;
		header("Location:stdindex.php");
		echo "aaaaaaaaaaaaaaaaaaa";
	}
	else
	{
		echo"<script>
		alert('Incorrect username or password');
window.location='user.php'; 
</script>";
		
	}
}

?>