<!DOCTY	PE html>
<html lang="en">

<head>
 <title>Welcome</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">
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
            background-image: url('https://images.vexels.com/media/users/3/78631/preview2/7acad042008eaa4cf8426daed9950097-flat-house-illustration.jpg'); 
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

	<style>
*, *:before, *:after {
  box-sizing: border-box;
}

html {
  overflow-y: scroll;
}

body {
  background: #FF5733  ;
  font-family: 'Titillium Web', sans-serif;
}

a {
  text-decoration: none;
  color: #FF5733  ;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
a:hover {
  color: #459195;
}

.form {
	opacity:0.9;
  background: #2E4053;
  padding: 30px;
  max-width: 550px;
  
  margin: 30px auto;
  border-radius: 3px;
  box-shadow: 0 3px 8px 3px rgba(19, 35, 47, 0.3);
}

.tab-group {
  list-style: none;
  padding: 0;
  margin: 0 0 40px 0;
}
.tab-group:after {
  content: "";
  display: table;
  clear: both;
}
.tab-group li a {
  display: block;
  text-decoration: none;
  padding: 15px;
  background: rgba(160, 179, 176, 0.25);
  color: #a0b3b0;
  font-size: 20px;
  float: center;
  width: 50%;
  text-align: center;
  cursor: pointer;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
.tab-group li a:hover {
  background: #459195;
  color: #ffffff;
}
.tab-group .active a {
 	background-color:powderblue;
  color: #ffffff;
}

.tab-content > div:last-child {
  display: none;
}

h1 {
  text-align: center;
  color: #ffffff;
  font-weight: 300;
  margin: 0 0 40px;
}

label {
  position: absolute;
  -webkit-transform: translateY(6px);
          transform: translateY(6px);
  left: 13px;
  color: rgba(255, 255, 255, 0.5);
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
  -webkit-backface-visibility: hidden;
  pointer-events: none;
  font-size: 22px;
}
label .req {
  margin: 2px;
  color: #1ab188;
}

label.active {
  -webkit-transform: translateY(50px);
          transform: translateY(50px);
  left: 2px;
  font-size: 14px;
}
label.active .req {
  opacity: 0;
}

label.highlight {
  color: #ffffff;
}

input, textarea {
  font-size: 18px;
  display: block;
  width: 100%;
  height: 80%;
  padding: 5px 10px;
  background: none;
  background-image: none;
  border: 1px solid #a0b3b0;
  color: #ffffff;
  border-radius: 0;
  -webkit-transition: border-color .25s ease, box-shadow .25s ease;
  transition: border-color .25s ease, box-shadow .25s ease;
}
input:focus, textarea:focus {
  outline: 0;
  border-color: #1ab188;
}

textarea {
  border: 2px solid #a0b3b0;
  resize: horizondal;
}

.field-wrap {
  position: relative;
  margin-bottom: 40px;
}

.top-row:after {
  content: "";
  display: table;
  clear: both;
}
.top-row > div {
  float: left;
  width: 48%;
  margin-right: 4%;
}
.top-row > div:last-child {
  margin: 0;
}

.button {
  border: 0;
  outline: none;
  border-radius: 0;
  padding: 15px 0;
  font-size: 2rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: .1em;
 	background-color:powderblue;
  color: #ffffff;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -webkit-appearance: none;
}
.button:hover, .button:focus {
  background: #459195;
}

.button-block {
  display: block;
  width: 100%;
}

.forgot {
  margin-top: -20px;
  text-align: right;
}
body{
	background-image:url("g1.png");
	
	background-color:powderblue;
}	
		
    </style>
</head>

<body style="background-color:powderblue;"	>


    <!--/.Double navigation-->
    
    <!--Main layout-->
    <main>
 <div class="form">
    
      <ul class="tab-group">
     <center>   <li class="tab active"><a style="align-text:center" href="#signup">BIT Food Issues</a></li></center>
       
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>click here to login</h1>
          
          <form action="admin.php" method="post">
          
          
          <button class="button button-block" type="submit" name="submit">Admin</button><br><br><br>
   
    
 </form>       
  <form action="user.php" method="post">
 <button class="button button-block" type="submit" name="submit">user</button></form>
        </div>
       
      
        
      </div><!-- tab-content -->
      
</div> 
     
<!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script>
	$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});
	</script>

    </main>
    <!--/Main layout-->

	
	
	
	
	
	
	
	
	
	
	
	
	
	

    
    <!-- SCRIPTS -->
    <script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/compiled.min.js"></script>

    <script>
    $(".button-collapse").sideNav();
        
    var el = document.querySelector('.custom-scrollbar');
    Ps.initialize(el);
    </script>
</body>

</html>