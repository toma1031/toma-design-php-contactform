<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$message = htmlspecialchars($_POST['message']);

	$body .= "Thank you for message!\n\n";
	$body .= "Name:".$name."\n";
	$body .= "Emal:".$email."\n";
	$body .= "Message:\n".$message."\n\n";


	$flg = bSENDMAIL3($email,"info@www4212.sakura.ne.jp","Thank you for contacting!",$body);
	
	if($flg == true) {
		$flg = bSENDMAIL3("newchunk1031@gmail.com","info@www4212.sakura.ne.jp","Thank you for contacting!",$body);
		if($flg == true) {
			$massage .= "The email has been sent!";
		} else {
			$massage .= "Failed to send the email. Please try again.";
		}
	} else {
		$massage .= $email."Failed to send the email. Please try again.";
	}
}

function bSENDMAIL3($to,$from,$sub,$body) {
	mb_language("ja");
	mb_internal_encoding("utf-8");
	$Head="";
	$Head.="From: ".$from."\n";
	$Head.="Mime-Version: 1.0\n";
	$Head.="Reply-To: ".$from."\n";
	$Head.="X-Mailer: PHP/" . phpversion();
	$flg = mb_send_mail($to, $sub, $body,$Head);
	return $flg;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Submit</title>
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
	
	<div class="submitmassage"><?=$massage?></div><br>
	
	<div class="text-center">
		<a href="./about.html" class="btn btn-primary btn-lg mb-3 gobackto" id="idwhite">Go back to contact page.</a>
	</div><br>
</body>
</html>