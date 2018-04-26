<?php
include('db.php');

$result=mysqli_query($con,"SELECT  count(*)  FROM `feedback`GROUP By breakfast;");
$data=mysqli_fetch_row($result);

echo $data[0];echo $data[1];

?>      





    