<?php
include('db.php');
if(isset($_POST["submit"]))
{
		$new_email= $_POST['email'];

$sql = mysql_query("SELECT email FROM signup WHERE email = $new_email");
$row = mysql_fetch_row($sql);

if(!isset($row[email])){
    // no match .... continue.
		$Fname=$_POST["fname"];
	$Lname=$_POST["lname"];
	$Email=$_POST["email"];
	$Pass=$_POST["pass"];
	$query=mysqli_query($con,"insert into signup(fname,lname,email,pass) values ('$Fname','$Lname','$Email','$Pass')");

	echo"<script>
		alert('signed up succesfully');
window.location='loginsignup.php'; 
</script>";
}

} else {
   // match , back to registration page.
   echo"<script>
		alert('already exists');
window.location='loginsignup.php'; 
</script>";
}  
	}
	

?>