<?php
$error='';
$success='';
$errorMessage="";

if($_POST){

  if(!$_POST["email"]){
    $error .= "An email address is required.<br>";
  }
  if(!$_POST["subject"]){
    $error .= "A subject is required.<br>";
  }
	
	
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content = "text/html; charset = UTF-8">
		<meta charset= "utf-8">
		<meta name="viewport" content= "width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- font from google-->
		<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;700&display=swap" rel="stylesheet"> 
		<title>PHP contact form</title>
		<!-- bootstrap core css-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	  <div class='container'>
		<h1>Get in touch!</h1>
		<div id="error" ><? echo $errorMessage.$successMessage; ?></div>
	  <form method="post">
	      <fieldset class="form-group">
		<label for="email">Email address</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
		<small class="text-muted">We'll never share your email with anyone else.</small>
	      </fieldset>
	      <fieldset class="form-group">
		<label for="subject">Subject</label>
		<input type="text" class="form-control" id="subject" name="subject" >
	      </fieldset>
	      <fieldset class="form-group">
		<label for="exampleTextarea">What would you like to ask us?</label>
		<textarea class="form-control" id="content" name="content" rows="3"></textarea>
	      </fieldset>
	      <button type="submit" id="submit" class="btn btn-primary">Submit</button>
	    </form>
	  </div>
	  
  <script type="text/javascript">
	  $('form').submit(function(e){
	  //  e.preventDefault();
	    var error = '';
	    if ($('#email').val()==''){
	      error+="The email field is required<br>";
	    }
	    if ($('#subject').val()==''){
	      error+="The subject field is required<br>";
	    }
	    if ($('#content').val()==''){
	      error+="The content field is required<br>";
	    }
	    if (error != "") {
		$("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
		return false;
	      } else {
	      //  $("form").unbind("submit").submit();
		return true;
	    }
	  });
  </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
  </body>	
 </html>
