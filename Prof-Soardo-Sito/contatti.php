<?php


// $formPopup = "false";

//sending mail though php on localserver will test laster for pub


if (isset($_POST['email'])) {
  $to = "prof.giorgiosoardo@gmail.com"; // this is your Email address
  $from = $_POST['email']; // this is the sender's Email address
  $nome = $_POST['nome'];
  $cognome = $_POST['cognome'];
  $email = $_POST['email'];
  $description = $_POST['description'];
  $telefono = $_POST["telefono"];
  $subject = "form da Prof. Soardo";
  $message = $nome . " - " . $cognome . " " .  $description . " " . $from . " " . $telefono .  " " . $email;
  //headers
  $headers = "From:www.professorsoardo.it";
  mail($to, $subject, $message, $headers);

  // $formPopup = "true";
}




?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contatti</title>
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

<body class="">
  <!-- header start -->
  <?php
  include('./header/header.php');
  ?>
  <!-- header ends -->
  <main class="">
    <!-- start container -->
    <div class="container-fluid">
      <div class="row co">
        <div class="col-lg-12 ">
          <h1>Contatti</h1>
        </div>

      </div>
      <div class="row">
        <div class=" col-lg-8 col-md-12 mt-5">
          <h4 class="conh4">Il Prof. Giorgio Soardo riceve su appuntamento:</h4>
        </div>
      </div>
      <div class="row recont">
        <div class="col-lg-6 col-md-6">
          <ul>
            <!-- <strong>Studio Prof. Soardo</strong> -->

            <li>Da Lunedi a Venerdi dalle 15:30 alle 19:00 </li>
            <li>Sabato : dalle 8:30 alle 12:30 </li>

            <h4 class="pt-3">Presso il suo studio situato in </h4>
            <li>Via dei Calzolai 4</li>
            <li>33100 (Udine)</li>



          </ul>

          <h2 style="padding-top: 37px;">Contatti :</h2>
          <ul>
            <li>Tel : 0039-335-5371446</li>
            <li>Email : prof.giorgiosoardo@gmail.com</li>
            <li>www.gruppodatamedica.net</li>
          </ul>


        </div>

        <div class=" col-lg-6 col-md-12">
          <div class="m-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2768.479899761749!2d13.234600015057953!3d46.06147140141228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477a4aa9265b7717%3A0x149f4daff74f412c!2sVia%20dei%20Calzolai%2C%204%2C%2033100%20Udine%20UD!5e0!3m2!1sen!2sit!4v1645383933041!5m2!1sen!2sit" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>

        </div>



        

      </div>
      <div class="row container">
      <div class="container-fluid">
    

      <form method="post" action="" id="contactform" class="container">
        <h2 class="text-center" style="">Vuoi saperne di più ? Scrivimi</h2>
        <div class="col-md-4 mt-4">
          <label for="" class="form-label">Nome :</label>
          <input type="text" required class="form-control" id="name" name="nome">
        </div>
        <div class="col-md-4">
          <label for="" class="form-label">Cognome :</label>
          <input type="text" required class="form-control" id="surname" name="cognome">
        </div>
        <div class="col-md-4">
          <label for="" class="form-label">Email :</label>
          <input type="text" required class="form-control" id="email" name="email">
        </div>

        <div class="col-md-4">
          <label for="" class="form-label">Numero di Telefono :</label>
          <input type="text" required class="form-control" id="phone" name="telefono">
        </div>

        <div class="col-md-4">
          <label for="" class="form-label">Descrizione :</label>

          <textarea class="form-control" aria-live="rtrim" name="description" id="description" cols="30" rows="5"></textarea>
        </div>


        <button type="submit" class="btn-lg btn-primary m-2">Invia</button>
      </form>






    </div>
      </div>
    </div>
    <!-- end container -->


  </main>
  <footer>
    <?php
    include('./footer/footer.php');
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