<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>Contact Form | CodyHouse</title>
</head>
<body>
	<form class="cd-form floating-labels"  action="insertfeedback.php" method="post" onsubmit="return call();">
		<fieldset>
			<legend>student Info</legend>

			

			<div class="icon">
				<label class="cd-label" for="cd-name">Name:</label>
				<input class="user" type="text" name="name" id="name" required>
		    </div> 

		    <div class="icon">
		    	<label class="cd-label" for="cd-company">Roll No:</label>
				<input class="company" type="text" name="rno" id="rno">
		    </div> 

		    
		</fieldset>

		<fieldset>
			<legend>students suggestion</legend>
			
			
			
			
			<!--breakfast-->
<?php
require_once("breakfast/dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT * FROM break";
$results = $db_handle->runQuery($query);
?>
<script>
function getState(val) {
	//alert(val);
	$.ajax({
	type: "POST",
	url: "breakfast/get_state.php",
	data:'break_id='+val,
	success: function(data){
		$("#breakfast1").html(data);
	}
	});
}

</script>			
			
			
			
			<div class="frmDronpDown">    <h4>BREAKFAST</h4>
<div class="row">

<p class="cd-select icon">
<select   class="budget" name="breakfast" id="breakfast" class="demoInputBox" required="required" onChange="getState(this.value); ">
<option value="">Select Breakfast</option>
<?php
foreach($results as $break) {
?>

<option value="<?php echo $break["id"]; ?>"><?php echo $break["break_name"]; ?></option>

<?php
}
?>
</select>	</p>
</div>
<div class="row">

<p class="cd-select icon">
<select  class="budget" name="breakfast1" id="breakfast1" required="required" class="demoInputBox">
<option value="">Select Breakfast 1</option>
</select>
</p>
</div>
</div>
			<!--breakfast ends-->
		
			<!--<div>
				<h4>Breakfast</h4>

				<p class="cd-select icon">
					<select class="budget" name="breakfast" required>
                        <option value="" disabled selected hidden>Select Dinner</option>
						<option value="Idle">Idle</option>
						<option value="Pongal">Pongal</option>
						<option value="Dosa">Dosa</option>
						<option value="Chapathi">Chapathi</option>
					</select>
                    	
				</p>
                <p class="cd-select icon">
                <select class="budget" name="breakfast1" required>
                        <option value="" disabled selected hidden>Select Dinner</option>
						<option value="Kesari">Kesari</option>
						<option value="Vada">Vada</option>
						<option value="Semiya">Semiya</option>
						<option value="jangiri">jangiri</option>
                    </select></p>
			</div> -->
           
			
			
			
			                        <!--lunch-->
			
			
<?php
require_once("lunch/dbcontroller.php");
$db_handle = new DBController1();
$query ="SELECT * FROM lunch";
$results = $db_handle->runQuery($query);
?>

<script>
function getState1(val) {
	$.ajax({
	type: "POST",
	url: "lunch/get_state.php",
	
	
	data:'lunch_id='+val,
	success: function(data){
		$("#state-list1").html(data);
	}
	});
}

function selectCountry1(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>

<div class="frmDronpDown">    <h4>LUNCH</h4>
<div class="row">
<p class="cd-select icon">
<select  class="budget" name="lunch" id="country-list1" class="demoInputBox" required="required" onChange="getState1(this.value);">
<option value="">Select Lunch</option>
<?php
foreach($results as $lunch) {
?>
<option value="<?php echo $lunch["id"]; ?>"><?php echo $lunch["lunch_name"]; ?></option>
<?php
}
?>

</select></p>
</div>
<div class="row">
<p class="cd-select icon">
<select class="budget" name="lunch1" id="state-list1"  required="required" class="demoInputBox">
<option value="">Select Lunch 1</option>
</select></p>
</div>
</div>

                                          <!--lunch ends-->

                  <!--  <div>
                        <h4>Lunch</h4>

                        <p class="cd-select icon">
                            <select class="budget" name="lunch" required>
                                 <option value="" disabled selected hidden>Select Lunch</option>
                                <option value="Rice">Rice</option>
                                <option value="Mushroom Biriyani">Mushroom Biriyani</option>
                                <option value="Veg Biriyani">Veg Biriyani</option>
                    
                            </select>

                        </p>
                        <p class="cd-select icon">
                            <select class="budget" name="lunch1"required>
                                 <option value="" disabled selected hidden>Select Lunch</option>
                                <option value="Egg">Egg</option>
                                <option value="Beetroot">Beetroot</option>
                                <option value="Ladies Finger">Ladies Finger</option>
                                <option value="Tomato">Tomato</option>
                            </select></p>
                    </div> -->
					
					
					
					
					
					
					
					
					
					
					
											<!--Dinner-->
											
	<?php
require_once("dinner/dbcontroller.php");
$db_handle = new DBController2();
$query ="SELECT * FROM dinner";
$results = $db_handle->runQuery($query);
?>										
	<script>
function getState2(val) {
	$.ajax({
	type: "POST",
	url: "dinner/get_state.php",
	data:'dinner_id='+ val,
	success: function(data){
		$("#state-list2").html(data);
	}
	});
}

function selectCountry2(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>										
											
											
											<div class="frmDronpDown"><h4>DINNER</h4>
<div class="row">
<p class="cd-select icon">
<select  class="budget" name="dinner" id="country-list2" class="demoInputBox" required="required" onChange="getState2(this.value);">
<option value="">Select Dinner</option>
<?php
foreach($results as $dinner) {
?>
<option value="<?php echo $dinner["id"]; ?>"><?php echo $dinner["dinner_name"]; ?></option>
<?php
}
?>
</select></p>
</div>
<div class="row">
<p class="cd-select icon">
<select class="budget"  name="dinner1" id="state-list2" required="required" class="demoInputBox">
<option value="">Select Dinner 1</option>
</select></p>
</div>
</div>
											
											
											
											
										<!--dinner ends-->	
											
											
											
									<!--		
											
             <div>
                        <h4>Dinner</h4>

                        <p class="cd-select icon">
                            <select class="budget" name="dinner" required>
                                 <option value="" disabled selected hidden>Select Dinner</option>
                                <option value="Chapathi">Chapathi</option>
                                <option value="Semiya"> Semiya</option>
                                <option value="Noodles">Noodles</option>
                    
                            </select>

                        </p>
                        <p class="cd-select icon">
                     
                            <select class="budget" name="dinner1" required>
                                <option value="" disabled selected hidden>Select Dinner</option>
                                <option value="Egg">Egg</option>
                                <option value="Tomato">Tomato </option>
                                <option value="Fruit Salad ">Fruit Salad</option>
                       
                            </select></p>
                    </div>  -->
			
		<!--	<div class="icon">
				<label class="cd-label" for="cd-textarea">Project description</label>
      			<textarea class="message" name="cd-textarea" id="cd-textarea" required></textarea>
			</div>-->

			<div>
		      	<input type="submit" name="submit"value="submit">
		    </div>
			<div>
		      	<input type="submit2" name="submit2" value="submit2" onclick=" return call()">
		    </div>
		</fieldset>
	</form>
	<script>
	function call()
	{
		var a=document.getElementById('state-list').value();
		alert(a);
		return true;
	}
	</script>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>


</body>
</html>