<?php
	session_start();
	require_once 'connect.php';
	
	if(ISSET($_POST['inschrijven'])){
		$firstname = $_POST['voornaam'];
		$lastname = $_POST['achternaam'];
        $email = $_POST['email'];
        $function = $_POST['functie'];
		$password = md5($_POST['wachtwoord']);

		$stmt = $conn->prepare("INSERT INTO philomena2.medewerker (voornaam, achternaam, email, functie, wachtwoord) VALUES ('$firstname', '$lastname', '$email', '$function', '$password');");
		$stmt->execute();
		header("location: ./inloggen_medewerker.php");
	}
?>