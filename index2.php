<!DOCTYPE html>
<?php
	require 'connect.php';
	session_start();
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
        <li class="active"><a href="./index.php">Home</a></li>
        <li><a href="./afspraakmaken.php">Afspraak maken</a></li>
        <li><a href="./uitloggen.php">Uitloggen</a></li>
      </ul><br>
    </div>

    <div class="col-sm-2">

    </div>
    <div class="col-sm-8">
    <h2>Welkom bij Philomena!</h2>
        <h3>Bekijk hier de prijzen</h3>
        <table id="prijzen">
        <tr>
          <th><h3>Nagels</h3></th>
          <th></th>
          <th></th>
          <th><h3>Haar</h3></th>
        </tr>
        <tr>
          <th><h4>Nieuwe set:</h4></th>
          <th></th>
          <th></th>
          <th><h4>Dames:</h4></th>
        </tr>
        <tr>
          <th><h5>Naturel : Gel /powergel / acryl</h5></th>
          <th><h5>€50</h5></th>
          <th></th>
          <th><h5>Knippen</h5></th>
          <th><h5>€25</h5></th>
        </tr>
        <tr>
          <th><h5>French manicure : gel/powergel/acryl</h5></th>
          <th><h5>€55</h5></th>
          <th></th>
          <th><h5>Knippen/drogen/zonder product</h5></th>
          <th><h5>€28</h5></th>
        </tr>
        <tr>
          <th><h5>Gelpolish: gel/powergel/acryl</h5></th>
          <th><h5>€57,50</h5></th>
          <th></th>
          <th><h5>Knippen/modelleren</h5></th>
          <th><h5>€32</h5></th>
        </tr>
        <tr>
          <th><h4>Nabehandeling:</h4></th>
          <th></th>
          <th></th>
          <th><h5> Wassen/knippen</h5></th>
          <th><h5>€28</h5></th>
        </tr>
        <tr>
          <th><h5>Naturel: gel / powergel/ acryl</h5></th>
          <th><h5>€32,50</h5></th>
          <th></th>
          <th><h5>Wassen/knippen/drogen/zonder product</h5></th>
          <th><h5>€31</h5></th>
        </tr>
        <tr>
          <th><h5>French manicure: gel/powergel/acryl</h5></th>
          <th><h5>€35</h5></th>
          <th></th>
          <th><h5>Wassen/knippen/modelleren</h5></th>
          <th><h5>€35</h5></th>
        </tr>
        <tr>
          <th><h5>Gelpolish: gel/powergel/acryl</h5></th>
          <th><h5>€37,50</h5></th>
          <th></th>
          <th><h4>Heren:</h4></th>
          <th></th>
        </tr>
        <tr>
          <th><h5>Kunstnagels verwijderen</h5></th>
          <th><h5>€25</h5></th>
          <th></th>
          <th><h5>Knippen</h5></th>
          <th><h5>€25</h5></th>
        </tr>
        <tr>
          <th><h5>Gel op natuurlijke nagels</h5></th>
          <th><h5>€30</h5></th>
          <th></th>
          <th><h5>Wassen/knippen</h5></th>
          <th><h5>€27</h5></th>
        </tr>
        <tr>
          <th><h5>Gelpolish op natuurlijke nagels</h5></th>
          <th><h5>€25</h5></th>
          <th></th>
          <th><h4>Kinderen t/m 11 jaar:</h4></th>
          <th></th>
        </tr>
        <tr>
          <th><h4>Handen:</h4></th>
          <th></th>
          <th></th>
          <th><h5>Knippen</h5></th>
          <th><h5>€18,50</h5></th>
        </tr>
        <tr>
          <th><h5>Manicure 30 min</h5></th>
          <th><h5>€17,50</h5></th>
          <th></th>
          <th><h5>Wassen/knippen</h5></th>
          <th><h5>€21,50</h5></th>
        </tr>
        <tr>
          <th><h5>Gelpolish op natuurlijke nagels</h5></th>
          <th><h5>€25</h5></th>
          <th></th>
          <th><h5>Wassen/knippen/drogen</h5></th>
          <th><h5>€24,50</h5></th>
        </tr>
        <tr>
          <th><h5>Manicure incl. gelpolish</h5></th>
          <th><h5>€35</h5></th>
          <th></th>
          <th><h4>Kinderen 12 t/m 15 jaar*:</h4></th>
        </tr>
        <tr>
          <th><h4>Voeten:</h4></th>
          <th><h5></h5></th>
          <th></th>
          <th><h5>Knippen</h5></th>
          <th><h5>€21,50</h5></th>
        </tr>
        <tr>
          <th><h5>Eelt verwijderen en verzorging 30 min</h5></th>
          <th><h5>€27,50</h5></th>
          <th></th>
          <th><h5>Wassen/knippen</h5></th>
          <th><h5>€23,50</h5></th>
        </tr>
        <tr>
          <th><h5>Gelpolish op tenen nagels</h5></th>
          <th><h5>€25</h5></th>
          <th></th>
          <th><h5>Knippen/drogen</h5></th>
          <th><h5>€23,50</h5></th>
        </tr>
        <tr>
          <th><h5>Gel met French manicure op teen nagels</h5></th>
          <th><h5>€35</h5></th>
          <th></th>
          <th><h5>Wassen/knippen/drogen</h5></th>
          <th><h5>€26,50</h5></th>
        </tr>
        <tr>
          <th><h5>Spa pedicure incl. Gelpolish</h5></th>
          <th><h5>€45</h5></th>
          <th></th>
        </tr>                    
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