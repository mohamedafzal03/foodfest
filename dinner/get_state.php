<?php
require_once("dbcontroller.php");
$db_handle = new DBController2();
if(!empty($_POST["dinner_id"])) {
	$query ="SELECT * FROM dinner1 WHERE dinner_id = '" . $_POST["dinner_id"] . "'";
	$results = $db_handle->runQuery($query);
?>
	<option value="">Select dinner</option>
<?php
	foreach($results as $dinner1) {
?>
	<option value="<?php echo $dinner1["dinner1_name"]; ?>"><?php echo $dinner1["dinner1_name"]; ?></option>
<?php
	}
}
?>