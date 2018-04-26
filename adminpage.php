<!DOCTY	PE html>
<html lang="en">

<head><title> Contact Form</title>
	
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS -->
    <link href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled.min.css" rel="stylesheet">
    
    <style>

        .bg-skin-lp {
    
            background-size: cover; 
            background-repeat: no-repeat; 
            background-position: center center; 
            background-attachment: fixed;
        } 
  ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    orange;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:orange;
   opacity:  1;
}

	div.gallery {
    border: 1px solid #ccc;
}
	
div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}	
		
    </style>
</head>

<body class="fixed-sn deep-purple-skin bg-skin-lp">
    <div class="cd-form floating-labels">
			 <?php
			 //include("header.php");
			 ?>
   

	   <main>
	   
	<h3>Students  Suggestions</h3>
	
	
	 	<?php
include('db.php');
				//echo $con; 
				echo $db;
				
				

				$strSQL = "SELECT * FROM feedback"	;
				$rs = mysqli_query($con,"SELECT * FROM feedback");
				while($row = mysqli_fetch_assoc($rs))
				 {	
			 
				echo "<h4  style='color:blue;text-align:center  width: 70%;float: left;padding: 15px;border: 1px solid red;'>". $row['name']
				.  $row['rno']  . $row['breakfast']  .  "</h4><br><br><br>";
		} 

	?>
    
	<br><br><br>
	<h1>Food Wastage
        </h1>
        <form id="some" name="kg" method="post" action="admininsert.php">
Kg wasted:<br><input list="browsers"name="kg" required="required" placeholder="Kg of food wasted">
 kg <select id="browsers"required>
            <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
    <br>    <br>     
            
<br>    Amount Wasted:  <br>      <input name="rs" required="required" placeholder="Rupees for 1 kg of wastage" required><br>    <br>     
   
            
            
            <input type="submit" value="submit" name="submit" class="submitClass"/>
           
            
            
            </div>
        </form><br><br><br><br>
	
	
	

	   </main>
</body>
<?php
include("footer.php");
?>
</html>	   