
<?php
include('db.php');echo'aa';
if(isset($_POST["submit"]))
{
    echo'aa';
	$Kg=$_POST["kg"];
    $Rs=$_POST["rs"];

    $Rupees=$Kg * $Rs;
   
	
	$query=mysqli_query($con,"insert into waste(kg,rs,rupees) values ('$Kg','$Rs','$Rupees')");
	    echo"<script>
		alert('inserted  succesfully');
       
        </script>";
}
?>