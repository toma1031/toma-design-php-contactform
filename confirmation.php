<?php

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Confirmation</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/vendor/animate.css">
<link rel="stylesheet" href="css/vendor/magnific-popup.css">
</head>

<body>
	
<header>
	<div class='fixed-top'>
	  <nav class="navbar navbar-expand-sm navbar-light bg-light">
	      <div class="navbar-brand"><a href="index.html">Toma</a></div>
	      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
	          <span class="navbar-toggler-icon"></span>
	      </button>
	       <div class="collapse navbar-collapse" id="nav-bar">
	          <ul class="navbar-nav">
	              <li class="nav-item"><a href="./index.html" class="nav-link">Gallery</a></li>
	              <li class="nav-item"><a href="./animation.html" class="nav-link">Animation</a></li>
	              <li class="nav-item"><a href="./about.html" class="nav-link">About</a></li>
	          </ul>
	       </div>
	  </nav> 
	</div>
</header>
	
	<h1 class="everything">Everything Correct?</h1>
	<br><br>
	
	<form action="submit.php" method="post" name="myform">
		  <div class="form-group row">
		  <label class="col-sm-3 col-form-label">Name</label>
		  <div class="col-sm-8">
			<input type="text" name="name" class="form-control" readonly="readonly" value="<?=$name?>" />
		  </div>
		  </div><br>
	      <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Email</label>
	      <div class="col-sm-8">
			<input type="text" name="email" class="form-control" readonly="readonly" value="<?=$email?>" />
	      </div>
	      </div><br>
	      <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Message</label>
	      <div class="col-sm-8">
			<textarea name="message" class="form-control" readonly><?=$message?></textarea>
	      </div>
	      </div><br>
	      <div class="text-center">
			<input type="submit" class="btn btn-primary btn-lg mb-3" value="Yes, Everything Correct!" />
	      </div><br>
	       <div class="text-center">
			<a href="./about.html" class="btn btn-primary btn-lg mb-3" id="idwhite">No, go back to contact page.</a>
	      </div><br>
	</form>

</body>
</html>