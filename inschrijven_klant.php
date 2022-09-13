<!DOCTYPE html>
<html lang="en">
<head>
  <title>Philomena - Inschrijven</title>
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
    <a href="./index.php"><img src="./images/philomena-logo-wit.png" width="60%"></a>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="./index.php">Home</a></li>
        <li><a href="./inschrijven_klant.php">Inschrijven</a></li>
        <li><a href="./inloggen_klant.php">Mijn Afspraken</a></li>
      </ul><br>
    </div>

    <div class="col-sm-3">
        
    </div>
    <div class="col-sm-4" style="top:100px">
       <div id="inlogblok">
       <form action="./inschrijven_klant_query.php" method="post" enctype="multipart/form-data">
         <h3>Vul hier uw gegevens in!</h3>
          Voornaam<br><input required type="text" class="field" name="voornaam" placeholder="Vul hier je voornaam in!"><br><br>
          Achternaam<br><input required type="text" class="field" name="achternaam"
            placeholder="Vul hier je achternaam in!"><br><br>
          Straat<br><input required type="text" class="field" name="straat"
            placeholder="Vul hier je e-mailadres in!"><br><br>
          Postcode<br><input required type="text" class="field" name="postcode"
            placeholder="Vul hier je gebruikernaam in!"><br><br>
          Woonplaats<br><input requiredtype="text" class="field" name="woonplaats"
            placeholder="Vul hier je woonplaats in!"><br><br>
          E-mail adres<br><input required type="email" class="field" name="email" placeholder="Vul hier je e-mail adres in!"><br><br>
          Wachtwoord<br><input required type="password" class="field" name="wachtwoord"
            placeholder="Vul hier je wachtwoord in!"><br><br><br>
          <input type="submit" class="button" name="inschrijven" value="Inschrijven">
          <a href="inloggen_klant.php">
            <input type="button" class="button" name="annuleren" value="Terug naar inloggen">
          </a>
        </div>
      </form>
       </div>
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
