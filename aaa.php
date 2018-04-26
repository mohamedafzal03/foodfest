<?php
include('db.php');
if(isset($_POST["submit"]))
{
	$Rno=$_POST["rno"];
    $Sub=$_POST["sub"];
	
	$query=mysqli_query($con,"insert into rno(rno,sub) values ('$Rno','$Sub')");

	echo"<script>
		alert('signed up succesfully');
window.location='destroy.php'; 
</script>";
}
?>