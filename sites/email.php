<?php 

if(isset($_POST['ergebnis'])){
	
	$email = "malsn.strasser@gmx.at";
	$ergebnis = $_POST['ergebnis'];
	$idee = $_POST['idee'];
	
	$nachricht = $ergebnis.$idee;
	
	$betreff = "Satiere-Feedback";
	$header = "From: satierewebsite@fhstp.ac.at \r\n";
	//$header .= "Reply-To: malsn.strasser@gmx.at \r\n";
	//$header .= "Cc:";
	$header .= 'MIME-Version: 1.0' . "\r\n";
	$header .= 'Content-type: text/html; charset-iso-8859-1'."\r\n";
	mail($email, $betreff, $nachricht, $header);
	}

header("Location:your_ideas.php?ges=1");

?>