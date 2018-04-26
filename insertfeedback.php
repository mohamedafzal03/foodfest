<?php
include('db.php');
if(isset($_POST["submit"]))
{
	$Name=$_POST["name"];
    $Rno=$_POST["rno"];
	$Breakfast=$_POST["breakfast"];
   
	$Breakfast1=$_POST["breakfast1"];
    $Breakfast_query=mysqli_query($con,"select * from break where id=$Breakfast");
	$breakfast_res=mysqli_fetch_assoc($Breakfast_query);
	echo $Breakfast;
	echo $Breakfast1;
	$Breakfast=$breakfast_res['break_name'];
	//echo'alert('.$breakfast_query['break_name'].');';
	$Lunch=$_POST["lunch"]; 
	$Lunch1=$_POST["lunch1"];
    
    $Lunch_query=mysqli_query($con,"select * from lunch where id=$Lunch");
    $Lunch_res=mysqli_fetch_assoc($Lunch_query);
    $Lunch=$Lunch_res['lunch_name'];
	
    //echo '<script>alert('.$Breakfast1.');</script>'
    $Dinner=$_POST["dinner"]; 
	$Dinner1=$_POST["dinner1"];
    
    $Dinner_query=mysqli_query($con,"select * from dinner where id=$Dinner");
    $Dinner_res=mysqli_fetch_assoc($Dinner_query);
    $Dinner=$Dinner_res['dinner_name'];
	
    
    $query=mysqli_query($con,"insert into feedback(name,rno,breakfast,breakfast1,lunch,lunch1,dinner,dinner1) values ('$Name','$Rno','$Breakfast','$Breakfast1','$Lunch','$Lunch1','$Dinner','$Dinner1')");
	if($query==1)    
    {
     echo"<script>
		alert('inserted  succesfully');
        window.location='destroy.php'; 
        </script>";
    }
        else{
  echo"<script>
		alert('something went wrong');
        window.location='stdindex.php'; 
        </script>";
}
}
?>