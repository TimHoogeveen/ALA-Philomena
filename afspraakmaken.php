<!DOCTYPE html>
<?php
	require 'connect.php';
	session_start();
 
	
?>

<html lang="en">
<head>
  <title>Philomena - Afspraak maken</title>
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
        <li><a href="./index2.php">Home</a></li>
        <li class="active"><a href="./afspraakmaken.php">Afspraak maken</a></li>
        <li><a href="./uitloggen.php">Uitloggen</a></li>
      </ul><br>
    </div>

    <div class="col-sm-3">
    </div>
    <div class="col-sm-5">
    <div id="afspraak-maken">
       <form action= "./afspraakmaken_query.php" name="afspraak-nagels" method="POST" enctype="multipart/form-data">
              <h3>Maak hier uw nagels afspraak!</h3>
              Tijd<br><input type="time" class="field" name="tijd-nagels" placeholder=""><br><br>
              Datum<br><input type="date" class="field" name="datum-nagels" placeholder=""><br><br>
              Medewerker<br><select type="select" class="" name="medewerker-nagels" placeholder=""><br><br>
              <option value="4">Kimberly</option><option value="5">Britt</option><option value="6">Priscilla</option></select><br><br>
              Behandeling<br><select type="select" class="" name="behandeling-nagels" placeholder=""><br><br>
              <option value="1">Naturel : Gel /powergel / acryl (nieuw)</option><option value="2">French manicure : gel/powergel/acryl (nieuw)</option><option value="3">Gelpolish: gel/powergel/acryl (nieuw)</option>
              <option value="4">Naturel: gel / powergel/ acryl (nabehandeling)</option><option value="5">French manicure: gel/powergel/acryl (nabehandeling)</option><option value="6">Gelpolish: gel/powergel/acryl (nabehandeling)</option>
              <option value="7">Kunstnagels verwijderen (nabehandeling)</option><option value="8">Gel op natuurlijke nagels (nabehandeling)</option><option value="9">Gelpolish op natuurlijke nagels (nabehandeling)</option>
              <option value="10">Manicure 30 min (handen)</option><option value="11">Gelpolish op natuurlijke nagels (handen)</option><option value="12">Manicure incl. gelpolish (handen)</option>
              <option value="13">Eelt verwijderen en verzorging 30 min (voeten)</option><option value="14">Gelpolish op tenen nagels (voeten)</option><option value="15">Gel met French manicure op teen nagels (voeten)</option>
              <option value="16">Spa pedicure incl. Gelpolish (voeten)</option>
              </select><br><br>
              <input type="submit" class="button" name="afspraakmaken-nagels" value="Afspraak maken"><br>
        </form>
        <form action="./afspraakmaken_query.php" name="afspraak-haar" method="POST" enctype="multipart/form-data">
              <h3>Maak hier uw haar afspraak!</h3>
              Tijd<br><input type="time" class="field" name="tijd-haar" placeholder=""><br><br>
              Datum<br><input type="date" class="field" name="datum-haar" placeholder=""><br><br>
              Medewerker<br><select type="select" class="" name="medewerker-haar" placeholder=""><br><br>
              <option value="7">Jamy</option><option value="8">Angelique</option></select><br><br>
              Behandeling<br><select type="select" class="" name="behandeling-haar" placeholder=""><br><br>
              <option value="17">Knippen (dames)</option><option value="18">Knippen/drogen/zonder product (dames)</option><option value="19">Knippen/modelleren (dames)</option>
              <option value="20">Wassen/knippen (dames)</option><option value="21">Wassen/knippen/drogen/zonder product (dames)</option><option value="22">Wassen/knippen/modelleren (dames)</option>
              <option value="23">Knippen (heren)</option><option value="24">Wassen/knippen (heren)</option><option value="25">Knippen (kinderen t/m 11 jaar)</option>
              <option value="26">Wassen/knippen (kinderen t/m 11 jaar)</option><option value="27">Wassen/knippen/drogen (kinderen t/m 11 jaar)</option><option value="28">Knippen (kinderen 12 t/m 15 jaar)</option>
              <option value="29">Wassen/knippen (kinderen 12 t/m 15 jaar)</option><option value="30">Knippen/drogen (kinderen 12 t/m 15 jaar)</option><option value="31">Wassen/knippen/drogen (kinderen 12 t/m 15 jaar</option>
              </select><br><br>
              <input type="submit" class="button" name="afspraakmaken-haar" value="Afspraak maken"><br>
       </form>
       </div>
    </div>
    <div class="col-sm-2">

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
