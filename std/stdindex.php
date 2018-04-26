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
	<form class="cd-form floating-labels"  action="insertfeedba.php" method="post">
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

			<div>
				<h4>Budget</h4>

				<p class="cd-select icon">
					<select class="budget" name="breakfast">
						<option value="0">Idle</option>
						<option value="1">Pongal</option>
						<option value="2">Dosa</option>
						<option value="3">Chapathi</option>
					</select>
				</p>
			</div> 

			
		<!--	<div class="icon">
				<label class="cd-label" for="cd-textarea">Project description</label>
      			<textarea class="message" name="cd-textarea" id="cd-textarea" required></textarea>
			</div>-->

			<div>
		      	<input type="submit" value="Send Message">
		    </div>
		</fieldset>
	</form>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>