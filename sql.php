<?php
echo "aa";
$sql_query="SELECT count(breakfast) AS num_customers, breakfast FROM suggestions GROUP BY breakfast;"

if(mysqli_query($con,$sql_query)){
	
echo "aaaa";
}
else
{
	echo "bb";
	
}
?>