<!DOCTYPE HTML>
<html>
<head>

  <title>Connectare &bull; Home</title>
  <link rel="stylesheet" href="style/generale.css">
  <link rel="stylesheet" href="style/home.css">
  <link rel="shortcut icon" href="images/icon.png">
  <script src="script/home.js"></script>

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

  if (is_device()) {
      header("refresh: 0; m.index.php");
      exit;
  }
  ?>

</head>
<body>

  <div id="header">
    <div>

    </div>
    <div>
      <img src="images/logoL.png" class="logo">
    </div>
    <div>
      <input type="button" onclick="location.href='contatti.php'" value="&phone; Contattaci">
    </div>
  </div>


  <div class="show" style="background: url('images/imm1.jpeg') no-repeat fixed; background-size: cover;">
    <div id="container">
      <div id="question">
        Riesci ad essere un<br>imprenditore di successo e<br>avere una vita privata<br>appagante e di qualit&agrave;?
      </div>
      <div id="line">
        <hr>
      </div>
      <div id="prop">
        Fare business oggi e riappropriarsi della <br>qualit&agrave; della propria vita
      </div>
      <div id="scroll">
        SCORRI IN BASSO PER SCOPRIRE DI PI&Ugrave;
      </div>
    </div>
  </div>


  <div class="divVideo" onmouseover="play()" onmouseout="pause()">
    <video id="video" controls onended="end()">
      <source src="videos/CONNECTARE_TELA_NO_SUB.mov" type="video/mp4">
      <source src="videos/CONNECTARE_TELA_NO_SUB.mov" type="video/ogg">
      Video tag non supportato
    </video>

    <div id="redirect" onclick="location.href = 'contatti.php'">
      Scopri di pi&ugrave;
    </div>
  </div>


  <div class="section" style="background: url('images/imm2.jpeg') no-repeat fixed; background-size: cover;">
    <p class="liltitle">VISIONE</p>
    <p class="titd">Talenti delle persone +<br>Qualit&agrave; delle relazioni =<br>Successo competitivo</p>
    <div>
      Basta riflettere un momento e lo percepiamo tutti.<br><br> Viviamo un’epoca di profondi cambiamenti,
      trasformazioni, contrasti e insicurezze. <o>A volte ne siamo protagonisti, a volte siamo semplici spettatori</o>.
      <br><br>Da un lato c'&egrave; la nostra
      quotidianit&agrave; che con le sue scadenze ci spinge a rispondere ai bisogni personali e familiari, al meglio che
      possiamo. Dall'altro lato ci sono le cose che succedono nel resto del mondo di cui ci sentiamo spesso vittime
      impotenti, come le crisi economiche, ambientali e umanitarie, che sembrano sommergerci e inghiottirci.<br><br>
      In tutti e due i casi spesso capiamo di non fare abbastanza, di non essere all'altezza e di perderci dei pezzi
      importanti del puzzle.<br><br>
      <o>Pezzi che condizionano profondamente la qualit&agrave; dell’attivit&agrave; imprenditoriale.</o><br><br>
      <g>Clicca sui pulsanti per continuare a leggere</g><br><br>
      <input id="bv1" type="button" value="ANALISI" onclick="showOrHide('v1', 'ANALISI')">
      <span id="v1">
        <g>ANALISI<br><br></g>
        Certo &egrave; che in pochi avrebbero immaginato solo 15 anni fa, di <o>avere la sensazione
        di tornare indietro</o>, di perdere le conquiste raggiunte con sacrificio dalle generazioni precedenti e soprattutto
        di perdere la fiducia nel futuro.<br><br> La globalizzazione, insieme alle tecnologie digitali hanno cancellato un
        sistema e ne hanno creato uno nuovo, le cui parole chiave sono velocit&agrave;, distanze corte, concorrenza globale,
        spread, urgenza, grandi rischi, usa e getta, tutto e subito, etc.<br><br>
        Dominano paura e stress.<br><br>
        <o>Molti imprenditori si sentono inadeguati, soli e senza il controllo della propria azienda. Come dei
        leoni arrabbiati, o peggio, rassegnati</o>.<br><br>
        Non per tutti per&ograve;. Per fortuna per qualcuno si tratta di un periodo di grandi
        opportunit&agrave; e affari milionari.<br><br>
        Altri ancora hanno semplicemente migliorato i propri risultati aziendali lavorando meno, meglio e
        con pi&ugrave; soddisfazione. Si tratta ancora di una minoranza "illuminata".<br><br>
      </span>
      <input id="bv2" type="button" value="COME AGIRE" onclick="showOrHide('v2', 'COME AGIRE')">
      <span id="v2">
        <g>COME AGIRE<br><br></g>
        &Egrave; tutto perso allora? Non c'&egrave; niente da fare, da cambiare, da creare?<br><br>
        No, tutt'altro. Nella nuova era che si sta rivelando, i cambiamenti non sono solo negativi. Nascono nuovi valori
        globali, nuovi modi di sviluppare relazioni, un nuovo rapporto dell'uomo con il suo pianeta, nuovi business e
        nuovi nodi di gestire i business tradizionali.<br><br>
        Il fatto &egrave; che i cambiamenti positivi richiedono di essere riconosciuti e scelti.<br><br>
        E il primo cambiamento parte da dentro l'imprenditore.<br><br>
        Tornare all'origine e riscoprire il motivo per cui si &egrave; fondata e si conduce l'azienda di famiglia.
        Riscoprire ci&ograve; che piace fare e che si &egrave; capaci di fare. Dare voce alla propria <o>vocazione</o>, alle proprie visioni e
        prendere le decisioni in linea con ci&ograve; che si sente intimamente giusto, per realizzare ci&ograve; che &egrave; naturale
        realizzare. <br><br>
        Lavorare con collaboratori, clienti e fornitori che apprezzano e <o>condividono</o> la visione e le cose
        che contano nel <o>lavoro</o> e nella <o>vita</o>.<br><br>
        La verit&agrave; &egrave; che, piaccia o meno, nella nuova era ci sar&agrave; spazio solo per questo modo di fare business.
        <br><br><o>Attrarre</o> di pi&ugrave;, spingere di meno.<br><br>
        La verit&agrave; &egrave; che, piaccia o meno, nella nuova era ci sar&agrave; spazio solo per questo modo di fare business.
        Il vecchio stile, fatto di compromessi al ribasso, mancanza di piacere e incoerenza tra pensiero e azione,
        verr&agrave; spazzato via.<br><br>
        In fondo si tratta come sempre, di fare delle scelte.<br><br>
        E tu cosa hai lasciato indietro? Quali relazioni hai sacrificato, a quali passioni non hai dato spazio,
        quali valori non hanno le priorit&agrave; che meriterebbero.<br><br>
        Oggi, che controllo hai e quali risultati produce la tua azienda. Che controllo hai e quali risultati produce
        la tua vita.
    </span>
    </div>
  </div>


  <div class="section" style="background: url('images/imm3.jpeg') no-repeat fixed; background-size: cover;">
    <p class="liltitle">AREE DI INTERVENTO</p>
    <p class="titd">L'impresa &egrave; un<br>complesso organizzato<br><br></p>
    <div>
      I reparti dell'azienda sono come musicisti di un'orchestra. Il nostro compito &egrave; quello di riaccordare gli
      strumenti e fare in modo che il direttore d'orchestra sia di nuovo in sintonia coi suoi musicisti. L'obiettivo &egrave;
      suonare una musica armoniosa, carica di nuove melodie e significati, apprezzata sia da chi la suona sia da chi
      l'ascolta.
      <br><br>Interveniamo per ideare e concretizzare:
      <ul>
        <li>Piani di sviluppo strategico</li>
        <li>Piani commerciali</li>
        <li>Piani di marketing</li>
        <li>Piani di rilancio della struttura organizzativa</li>
        <li>Strumenti di comunicazione interna e gestione del tempo</li>
        <li>Ripristino della redditivit&agrave; aziendale</li>
      </ul>
    </div>
  </div>


  <div class="section"  style="background: url('images/imm4.jpeg') no-repeat fixed; background-size: cover;">
    <p class="liltitle">METODO</p>
    <p class="titd">Capire il presente,<br>disegnare il futuro,<br>lavorare insieme per ottenerlo</p>
    <div>
      Tre semplici passi:<br>
      <ul>
        <li>Check up aziendale</li>
        <li>Progetto di consulenza</li>
        <li>Affiancamento</li>
      </ul>
      <g>Clicca sui pulsanti</g><br><br>
      <input id="bs1" type="button" value="1&deg; STEP - CHECK UP AZIENDALE" onclick="showOrHide('s1', '1&deg; STEP - CHECK UP AZIENDALE')">
      <span id="s1">
        <g>1&deg; STEP - CHECK UP AZIENDALE<br><br></g>
        Quasi mai l'imprenditore ha la possibilit&agrave; di vedere il
        quadro generale della sua azienda, analizzato sotto l'aspetto commerciale, finanziario, produttivo,
        organizzativo, raccontato in maniera semplice e diretta.<br><br>3-4 giorni in azienda per analizzare in dettaglio i
        numeri, il modello di business e la struttura organizzativa. L'occhio e l'esperienza di un analista esterno per
        chiarire i veri punti di forza e di debolezza, senza condizionamenti o giudizi personali. Si tratta di
        rappresentare l'attuale stato di salute dell'azienda e le dinamiche che lo hanno determinato.<br><br><br>
      </span>
      <input id="bs2" type="button" value="2&deg; STEP - PROGETTO DI CONSULENZA" onclick="showOrHide('s2', '2&deg; STEP - PROGETTO DI CONSULENZA')">
      <span id="s2">
        <g>2&deg; STEP - PROGETTO DI CONSULENZA<br><br></g>
        Portare soluzioni, questo &egrave; l'obiettivo.
        <br><br>4-5 settimane in azienda per ideare, condividere e applicare nuove metodologie per dare vita a un
        progetto che conduca a migliori risultati economici, insieme a una crescita delle relazioni e del benessere
        dell'intera struttura organizzativa.<br><br>Il vero obiettivo &egrave; far s&igrave; che l'imprenditore
        torni padrone del proprio tempo e della qualit&agrave; della sua vita, attraverso una corretta strategia,
        del personale affidabile e in linea con gli obiettivi aziendali e un sistema di controllo semplice ed efficace.
        Tutto questo in un tempo concordato e definito.<br><br><br>
      </span>
      <input id="bs3" type="button" value="3&deg; STEP - AFFIANCAMENTO" onclick="showOrHide('s3', '3&deg; STEP - AFFIANCAMENTO')">
      <span id="s3">
        <g>3&deg; STEP - AFFIANCAMENTO<br><br></g>
        Nei successivi sei mesi l'imprenditore
        viene affiancato nel dare continuit&agrave; ai progetti avviati. Scambi di informazioni e visite in azienda
        garantiscono l'applicazione di quanto impostato, per giungere con efficacia agli obiettivi prefissati. <br><br>
        Il cambiamento e le metodologie introdotte diventano parte integrante delle capacit&agrave; e conoscenze di dipendenti e titolari.<br><br><br>
      </span>
    </div>
  </div>


  <div class="logoFooter">
    <img src="images/logoL.png" class="logo">
  </div>

  <div id="footer">
    <div>
      <b>COLLEGAMENTI</b>
      <a href="">Homepage</a>
      <a href="contatti.php">Contattaci</a>
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
