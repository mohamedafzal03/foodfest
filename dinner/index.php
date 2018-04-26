<?php
require_once("dbcontroller.php");
$db_handle = new DBController2();
$query ="SELECT * FROM dinner";
$results = $db_handle->runQuery($query);
?>
<html>
<head>
<TITLE>jQuery Dependent DropDown List - Countries and States</TITLE>
<head>
<style>
body{width:610px;font-family:calibri;}
.frmDronpDown {border: 1px solid #7ddaff;background-color:#C8EEFD;margin: 2px 0px;padding:40px;border-radius:4px;}
.demoInputBox {padding: 10px;border: #bdbdbd 1px solid;border-radius: 4px;background-color: #FFF;width: 50%;}
.row{padding-bottom:15px;}
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function getState2(val) {
	$.ajax({
	type: "POST",
	url: "get_state.php",
	data:'dinner_id='+val,
	success: function(data){
		$("#state-list").html(data);
	}
	});
}

function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>
</head>
<body>
<div class="frmDronpDown">
<div class="row">
<label>Lunch:</label><br/>
<select name="country2" id="country-list2" class="demoInputBox" onChange="getState2(this.value);">
<option value="">Select Lunch</option>
<?php
foreach($results as $dinner) {
?>
<option value="<?php echo $dinner["id"]; ?>"><?php echo $dinner["dinner_name"]; ?></option>
<?php
}
?>
</select>
</div>
<div class="row">
<label>dinner 1:</label><br/>
<select name="state" id="state-list" class="demoInputBox">
<option value="">Select dinner 1</option>
</select>
</div>
</div>
</body>
</html>