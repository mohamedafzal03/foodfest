<?php
require_once("dbcontroller.php");
$db_handle = new DBController1();
if(!empty($_POST["lunch_id"])) {
	$query ="SELECT * FROM lunch1 WHERE lunch_id = '" . $_POST["lunch_id"] . "'";
	$results = $db_handle->runQuery($query);
?>
	<option value="">Select lunch 1</option>
<?php
	foreach($results as $lunch1) {
?>
	<option value="<?php echo $lunch1["lunch1_name"]; ?>"><?php echo $lunch1["lunch1_name"]; ?></option>
<?php
	}
}
?>