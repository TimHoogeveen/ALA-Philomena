<?php
	session_start();
	require_once 'connect.php';
	
	if(ISSET($_POST['afspraakmaken-nagels'])){
		$id = $_SESSION['user'];
		$time = $_POST['tijd-nagels'];
		$date = $_POST['datum-nagels'];
		$medewerker = $_POST['medewerker-nagels'];
		$behandeling = $_POST['behandeling-nagels'];

		$stmt = $conn->prepare("INSERT INTO philomena2.afspraak (tijd, datum, status, klant_ID, medewerker_ID, behandeling_ID) VALUES ('$time', '$date', 'geaccepteerd', '$id', '$medewerker', '$behandeling');");
		$stmt->execute();
		header("location: afspraakmaken.php");
	}
?>
<?php
	session_start();
	require_once 'connect.php';
	
	if(ISSET($_POST['afspraakmaken-haar'])){
		$id = $_SESSION['user'];
		$time = $_POST['tijd-haar'];
		$date = $_POST['datum-haar'];
		$medewerker = $_POST['medewerker-haar'];
		$behandeling = $_POST['behandeling-haar'];

		$stmt = $conn->prepare("INSERT INTO philomena2.afspraak (tijd, datum, status, klant_ID, medewerker_ID, behandeling_ID) VALUES ('$time', '$date', 'geaccepteerd', '$id', '$medewerker', '$behandeling');");
		$stmt->execute();
		header("location: afspraakmaken.php");
	}
?>
