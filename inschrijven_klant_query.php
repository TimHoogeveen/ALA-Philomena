<?php
	session_start();
	require_once 'connect.php';
	
	if(ISSET($_POST['inschrijven'])){
		$firstname = $_POST['voornaam'];
		$lastname = $_POST['achternaam'];
		$street = $_POST['straat'];
		$postcode = $_POST['postcode'];
		$residence = $_POST['woonplaats'];
        $email = $_POST['email'];
		$password = md5($_POST['wachtwoord']);

		$stmt = $conn->prepare("INSERT INTO philomena2.klant (voornaam, achternaam, straat, postcode, woonplaats, email, wachtwoord) VALUES ('$firstname', '$lastname', '$street', '$postcode', '$residence', '$email', '$password');");
		$stmt->execute();
		header("location: ./inloggen_klant.php");
	}
?>