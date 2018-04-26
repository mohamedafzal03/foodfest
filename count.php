<?php
include('db.php');

$query1=mysqli_query($con,"SELECT COUNT(breakfast) FROM `feedback` WHERE breakfast='idle';");
$query1fetch=mysqli_fetch_assoc($query1);

echo"ad";

echo $query1fetch;
?>