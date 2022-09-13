<?php
	session_start();

	require_once 'connect.php';

	if(ISSET($_POST['login'])){
		if($_POST['email'] != "" || $_POST['password'] != ""){
			$email = $_POST['email'];
            $password = md5($_POST['password']);
			$sql = "SELECT * FROM `medewerker` WHERE `email`=? AND `wachtwoord`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($email, $password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['user'] = $fetch['user_ID'];
				header("location: ./dashboard.php");
			} else{
				echo "
				<script>alert('Ongeldigde gebruikersnaam of wachtwoord')</script>
				<script>window.location = './inloggen_medewerker.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Vul alle velden in alsjeblieft')</script>
				<script>window.location = './inloggen_medewerker.php'</script>
			";
		}
	}
?>