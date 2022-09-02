<!DOCTYPE HTML>
<html>
<head>

  <title>Connectare &bull; Contatti</title>

  <meta name="theme-color" content="white">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" href="style/m.generale.css">
  <link rel="stylesheet" href="style/m.contatti.css">
  <link rel="shortcut icon" href="images/icon.png">
  <script src="script/m.contatti.js"></script>

  <?php
  function is_device() {
  $user_agent = $_SERVER["HTTP_USER_AGENT"];

  $device = array("iPhone", "Android", "Windows Phone", "BlackBerry", "iPod");
  foreach ($device as $value) {
  	if (strpos($user_agent, $value) !== false) {
      	return true;
      }
  }
  return false;
  }

  if (!is_device()) {
      header("refresh: 0; contatti.php");
      exit;
  }

  if(isset($_POST["invia"]) && isset($_POST["nome"])) {
    $nome = addslashes($_POST["nome"]);
    $cognome = addslashes($_POST["cognome"]);
    $tel = addslashes($_POST["tel"]);
    $mail = addslashes($_POST["mail"]);

    $message = "Nome: " . $nome . "\n";
    $message .= "Cognome: " . $cognome . "\n";
    $message .= "Telefono: " . $tel . "\n";
    $message .= "E-mail: " . $mail . "\n";

    $to = "info@connectare.it";
    $object = "Dati di " . $nome . " " . $cognome . ".";
    $headers = "";

    if(mail($to, $object, $message, $headers)) {
      ?>
        <script>alert("Dati inviati con successo. Ti contatteremo al più presto.")</script>
      <?php
    }
    else {
      ?>
        <script>alert("Errore durante l'invio dei dati. Si prega di riprovare o di contattare il numero indicato nella pagina dei contatti.")</script>
      <?php
    }
  }
  ?>

</head>
<body>


	<div id="back" onclick="location.href='m.index.php'">
    	&lt;
    </div>

    <div id="header">
    	<img src="images/logoM.png">
    </div>


    <div class="container" style="background: url('images/contatti.jpeg') no-repeat fixed; background-size: cover;">
      <div>
        Puoi contattarci telefonicamente <br>o per e-mail
        <div>
          <span><b>E-mail</b> <a href="mailto:info@connectare.it">info@connectare.it</a></span>
          <span><b>Telefono</b> <a href="tel:+393333486119">TEL: 333 3486119</a></span>
        </div>
      </div>
    </div>


    <form method="POST" onsubmit="return send()" id="form">
      <span>
        Inviaci i tuoi dati. Ti contatteremo al più presto.
      </span>
      <input type="text" placeholder="Nome" name="nome" required>
      <input type="text" placeholder="Cognome" name="cognome" required>
      <input type="text" placeholder="Telefono" name="tel">
      <input type="email" placeholder="E-mail" name="mail" required>
      <terms><span><input type="checkbox" required></span><span>Accetto i <a title="Visiona il documento sulla privacy e sul trattamento dei dati." target="_blank" href="docs/privacy.docx">termini e le condizioni.</a></span></terms>
      <input type="reset" value="REIMPOSTA">
      <input type="submit" name="invia" value="INVIA">
    </form>


    <div class="logoFooter">
      <img src="images/logoL.png" class="logo">
    </div>

    <div id="footer">
      <div>
        <b>COLLEGAMENTI</b>
        <a href="m.index.php">Homepage</a>
        <a href="">Contattaci</a>
      </div>

      <div>
        <b>CONTATTI</b>
        <a href="mailto:info@connectare.it">EMAIL: info@connectare.it</a>
        <a href="tel:+393333486119">TEL: 333 3486119</a>
        <span>Melegnano (MI)</span>
        <span>P. IVA: 09173930968</span>
      </div>

      <div>
        <b>IMMAGINI DI</b>
        <a title="Immagini create da rawpixel.com - it.freepik.com" href="http://www.freepik.com">Freepik</a>
      </div>
    </div>


</body>
</html>
