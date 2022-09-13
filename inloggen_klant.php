<!DOCTYPE html>
<html lang="en">
<head>
  <title>Philomena - Inloggen</title>
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
        <li><a href="./index.php">Home</a></li>
        <li class="active"><a href="./inloggen_klant.php">Inloggen Klant</a></li>
        <li><a href="./inloggen_medewerker.php">Inloggen Medewerker</a></li>
      </ul><br>
    </div>

    <div class="col-sm-3">
        
    </div>
    <div class="col-sm-4" style="top:100px">
    <div id="inlogblok">
       <form action= "./inloggen_klant_query.php" name="inloggen" method="POST" enctype="multipart/form-data">
              <h3>Log hier in met uw inloggegevens!</h3>
              <input type="email" class="field" name="email" placeholder="E-mail adres"><br><br>
              <input type="password" class="field" name="password" placeholder="Wachtwoord"><br><br>
              <input type="submit" class="button" name="login" value="Inloggen"><br>
            </form>
       </div>

            <br>Nog geen account?<br>
              <a href="inschrijven_klant.php">
                  <input type="button" class="button" name="inschrijven" value="Inschrijven">
              </a>
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
