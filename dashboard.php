<!DOCTYPE html>
<?php
	require 'connect.php';
	session_start();
?>
<?php


if(ISSET($_POST['afspraak_update'])){
  if($_POST['datum_update'] != ""){
    try{
      $datum = $_POST['datum_update'];
      $afspraak_ID = $_POST['afspraak_ID'];
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "UPDATE philomena2.afspraak SET datum='$datum' WHERE afspraak_ID='$afspraak_ID'";
      $conn->exec($sql);
    }catch(PDOException $e){
      echo $e->getMessage();
    }
    $_SESSION['message']=array("text"=>"Afspraak succesvol geupdate!","alert"=>"info");
    $conn = null;
    header('location:dashboard.php');
    exit();
  }else{
    echo "
      <script>alert('Vul alle velden in!')</script>
      <script>window.location = 'dashboard.php'</script>
    ";
  }
}

if(ISSET($_POST['afspraak_delete'])){
  try{
    $afspraak_ID = $_POST['afspraak_ID'];
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM `afspraak` WHERE afspraak_ID='$afspraak_ID'";
    $conn->exec($sql);
  }catch(PDOException $e){
    echo $e->getMessage();
  }
  $_SESSION['message']=array("text"=>"Afspraak succesvol verwijderd!","alert"=>"info");
  $conn = null;
  header('location:dashboard.php');
}

?>
<html lang="en">
<head>
  <title>Philomena - Home</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="./images/philomena-favicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <a href="./index2.php"><img src="./images/philomena-logo-wit.png" width="60%"></a>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="./dashboard.php">Alle Afspraken</a></li>
        <li><a href="./inschrijven_medewerker.php">Inschrijven Medewerker</a></li>
        <li><a href="./uitloggen.php">Uitloggen</a></li>
      </ul><br>
    </div>

    <div class="col-sm-2">

    </div>
    <div class="col-sm-10">
        <h2 style="text-align:center">Welkom op het Philomena dashboard!</h2>
                <?php
                    $sql = 'SELECT afspraak_ID, datum, tijd, klant_ID, medewerker_ID, behandeling_ID FROM afspraak';

                    try{
                        $stmt = $conn->query($sql);
                        
                        if($stmt === false){
                        die("Error");
                        }
                        
                    }catch (PDOException $e){
                        echo $e->getMessage();
                    }
                ?>
                <table width="100%">
                    <thead>
                        <tr>
                            <th>Datum</th>
                            <th>Tijd</th>
                            <th>Klant</th>
                            <th>Medewerker</th>
                            <th>Behandeling</th>
                            <th>Update</th>
                            <th>Verwijderen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                            <tr>
                                <td><input type="date" class="" name="datum_update" value="<?php echo ($row['datum']); ?>"></td>
                                <td><input type="time" class="" name="tijd_update" value="<?php echo ($row['tijd']); ?>"></td>
                                <td><input type="select" class="" name="klant_update" value=<?php echo ($row['klant_ID']); ?>></td>
                                <td><input type="select" class="" name="medewerker_update" value=<?php echo $row['medewerker_ID']?>></td>
                                <td><input type="select" class="" name="behandeling_update" value=<?php echo ($row['behandeling_ID']); ?>></td>
                                <td>
                                    <form method="POST" class="dog-input-form"> 
                                        <input type="submit" class="button" name="afspraak_update" value="Update" class="update_button">
                                    </form>
                                </td>
                                <td>
                                    <form method="POST" class="dog-delete-form">
                                        <input type="submit" class="button" name="afspraak_delete" value="Verwijderen" class="dog_delete_button">
                                    </form>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
        
    </div>
    <div class="col-sm-3">

    </div>
  </div>
</div>

<footer class="container-fluid">
  <div class="col-sm-6">
    <p>123 Pleasent Street</p>
  </div>
  <div class="col-sm-6">
    <p>Openingstijden</p>
    <p>Maandag t/m donderdag: 10:00 –18:00.<br> 
       Vrijdag: 10:00 –21:00<br> 
       Zaterdag: 10:00 –15:00<br>
       Zondag: Gesloten</p>
  </div>
</footer>

</body>
</html>