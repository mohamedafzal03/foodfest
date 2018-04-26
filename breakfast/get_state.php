<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["break_id"])) {
	$query ="SELECT * FROM break1 WHERE break_id = '" . $_POST["break_id"] . "'";
	$results = $db_handle->runQuery($query);
?>
	<option value="">Select breakfast</option>
<?php
	foreach($results as $break1) {
	echo'<option value= "'.$break1["break1_name"].'" name="'.$break1["break1_name"].'" id="'.$break1["break1_name"].'">'.$break1["break1_name"].'</option>';
	}
}
?>