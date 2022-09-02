<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattologie</title>
  <!-- link css -->
  <link rel="stylesheet" href="./css/styles.css">
  <!-- link css -->
  <!-- link bootsrap -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- link bootsrap -->
  <!-- link fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <header>

    <?php
    include('./header/header.php');

    ?>

  </header>
  <main>
    <div class="container-fluid">
      <div class="row co">
        <div class="col-lg-12 ">
          <h1>Patologie Trattate</h1>
        </div>

      </div>

      <div class="row patt " >
        <div class="col-lg-5 col-md-5 pt-3">
          <img class="fegpic" src="img/fegatopicture.jpeg" alt="">
        </div>
        <div class="col-lg-7 col-md-7 col-12 pt-3 " id="#patt">

          <h3 style="color: #333364;">Malattie del Fegato</h3>
          <ul>
            <li><a href="./documents/malattie del fegato pdf/cos'e il fegato.pdf">Cos'è il fegato?</a></li>
            <li><a href="./documents/malattie del fegato pdf/epatiti.pdf">Epatiti</a></li>
            <li><a href="./documents/malattie del fegato pdf/Epatopatia alcolica.pdf">Epatopatia alcolica</a></li>
            <li><a href="./documents/malattie del fegato pdf/cirrosi.pdf">Cirrosi</a></li>
            <li><a href="./documents/malattie del fegato pdf/Gestione Medica del Paziente con Cirrosi Epatica.pdf">Gestione medica del paziente con cirrosi epatica</a></li>
            <li><a href="./documents/malattie del fegato pdf/Tumori del fegato.pdf">Tumori del fegato</a></li>
            <li><a href="./documents/malattie del fegato pdf/sclerosi epato portale.pdf">Sclerosi epato portale</a></li>
          <li><a href="./documents/malattie del fegato pdf/malattie delle vie biliari.pdf">Malattie delle vie biliari</a></li>
          </ul>
        </div>
      </div>

      <div class="row patt">
        <div class="col-lg-5 col-md-5 pt-3">
          <img  class="feg2" src="img/pancreas.jpeg" alt="">
        </div>
        <div class="col-lg-7 col-md-7 col-12 pt-3" id="patt_pancreas">

          <h3 style="color: #333364;">Malattie del Pancreas</h3>
          <ul>
            <li><a href="./documents/PDF sito/malattie del pancrea/cos'è il pancreas gius.pdf">Cos'è il pancreas?</a></li>
            <li><a href="./documents/PDF sito/malattie del pancrea/pancreatiti acute e croniche gius.pdf">Pancreatiti acute e croniche</a></li>
            <li><a href="./documents/PDF sito/malattie del pancrea/tumori del pancreas gius.pdf">Tumori del pancreas</a></li>
            <li><a href="./documents/PDF sito/malattie del pancrea/Cisti pancreatiche gius.pdf">Cisti pancreatiche</a></li>

          </ul>
        </div>
      </div>

      <div class="row patt">
        <div class="col-lg-5 col-md-5 pt-3 pt-3">
          <img class="dig1" src="img/digest.jpeg" alt="">
        </div>
        <div class="col-lg-7 col-md-7 col-12 pt-3" id="apparato">

          <h3 style="color: #333364;">Malattie dell'apparato digerente</h3>
          <ul>
            <li><a href="./documents/PDF sito/malattie app digerente giustificato/app dig gius.pdf">Cos'è l'apparato digerente? </a></li>
            <li><a href="./documents/PDF sito/malattie app digerente giustificato/reflusso gastroesofageo gius.pdf">Reflusso gastroesofageo</a></li>
            <li><a href="./documents/PDF sito/malattie app digerente giustificato/gastriti gius.pdf">Gastriti</a></li>
            <li><a href="./documents/PDF sito/malattie app digerente giustificato/Diverticolosi g .pdf">Diverticolosi</a></li>
            <li><a href="./documents/PDF sito/malattie app digerente giustificato/Morbo celiaco dell'adulto gius.pdf">Morbo celiao dell'adulto</a></li>
            <li><a href="./documents/PDF sito/malattie app digerente giustificato/disordini funzionali gastrointestinali gius.pdf">Disordini funzionali gastrointestinali</a></li>
            <li><a href="./documents/PDF sito/malattie app digerente giustificato/Malattie infiammatorie croniche gius.pdf">Malattie infiammatorie croniche</a></li>
          </ul>
        </div>
      </div>

      <div class="row patt">
        <div class="col-lg-5 col-md-5 pt-3 pt-3">
          <img class="dig1" src="img/waffles.jpeg" alt="">
        </div>
        <div class="col-lg-7 col-md-7 col-12 pt-3" id="accumulo" name="">

          <h3 style="color: #333364; font-size:23px;">Malattie dismetaboliche e da accumulo</h3>
         <ul>
           <li><a href="./documents/PDF sito/malattie dismetaboliche e da accumulo /Deficit di α1 antitripsina giust.pdf">Deficit di α1 antitripsina</a></li>
           <li><a href="./documents/PDF sito/malattie dismetaboliche e da accumulo /Emocromatosi gius.pdf">Emocromatosi</a></li>
           <li><a href="./documents/PDF sito/malattie dismetaboliche e da accumulo /Morbo di Willson gius.pdf">Morbo di Willson</a></li>
           <li><a href="./documents/PDF sito/malattie dismetaboliche e da accumulo /Steatosi epatica NAFLD e NASH giust.pdf">Steatosi epatica NAFLD e NASH</a></li>
          </ul>
        </div>
      </div>



    </div>


  </main>

  <footer class="">
    <?php

    include("./footer/footer.php");
    ?>

  </footer>
  <!-- footer ends -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- bootsrap  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- bootsrap ends -->

</body>

</html>