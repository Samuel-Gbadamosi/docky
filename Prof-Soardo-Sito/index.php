<?php
  
  // header("Content-Type: application/octet-stream");
  
  // $file = $_GET["file"]  . ".pdf";
    
  // header("Content-Disposition: attachment; filename=" . urlencode($file));   
  // header("Content-Type: application/download");
  // header("Content-Description: File Transfer");            
  // header("Content-Length: " . filesize($file));
    
  // flush(); // This doesn't really matter.
    
  // $fp = fopen($file, "r");
  // while (!feof($fp)) {
  //     echo fread($fp, 65536);
  //     flush(); // This is essential for large downloads
  // } 
    
  // fclose($fp);
  


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prof Soardos</title>
  <!-- link css -->
  <link rel="stylesheet"  href="./css/styles.css">
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
  <!-- main starts -->
  <main class="">
  <!-- first slider part done -->
    <div class="sec1">
      <!-- <img style="height: 500px; width:100%;" src="https://www.drvolpe.it/wp-content/uploads/2020/04/bg-slider-hp.jpg" alt=""> -->
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <!-- <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="./img/slider2.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption  d-md-block">
              <p class="p-slid-text" style="font-size:4vw;">Ricerca ed esperienza clinica al servizio di pazienti affetti da malattie dell'apparato digerente</p>
            
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
          <img src="./img/trt.png" class="d-block w-100" alt="...">
            <div class="carousel-caption  d-md-block">
              <p style="color:aliceblue;" class="p-slid-text" style="font-size:4vw;">Un approccio mirato alla diagnosi e alla terapia delle malattie del fegato </p>
            </div>
          </div>
         
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button> 
      </div>
    </div>
      <!-- first slider end here SEC1 done -->
      <!-- start sec 2 -->
 <section class="container-fluid sec2">
   <div class="row">
     <!-- start here -->
     <div class="col-lg-6  col-md-12 picsn ">
     
   

     <div class=" col-md-12 biotest" >
         <h5 class="soardo text-center">Prof. Giorgio Soardo</h5>
         <p class="mobii text-center ">Specialista in Gastroenterologia ed Endoscopia Digestiva ed in Medicina Interna.</p>


         </div>

     </div>
    
     <div class="col-lg-6 col-md-12 ">      
         <div class="row rtcolor mt-5 pt-4">
           <div class="col-xl-2 col-lg-3 col-md-2 col-3">
             
           <img class="myicon" src="https://cdn.pixabay.com/photo/2017/05/15/23/47/stethoscope-icon-2316460__340.png" alt="">
           </div>
           <div class="col-xl-10 col-lg-8 col-md-10 col-sm-9 col-9">
           <h4>Esperienza medica </h4>
            <p class="iconsection">Le patologie dell’apparato digerente sono affrontate dal prof. Soardo sia a livello di organo, fegato e pancreas in particolare, sia nelle loro conseguenze sistemiche</p>
           
           </div>

         </div>
         <div class="row rtcolor">
           <div class="col-xl-2 col-lg-3 col-md-2 col-3">
           <!-- <i><i class="myicon fa-solid fa-stethoscope"></i></i> -->
           <img class="myicon" src="https://cdn.pixabay.com/photo/2015/10/31/12/34/teacher-1015630__340.jpg" alt="">



           </div>
           <div class="col-xl-10 col-lg-8 col-md-10 col-9">
           <h4>Attività di insegnamento</h4>
              <p class="iconsection">Vanta una carriera di insegnamento trentennale presso l'Universita' degli Studi di Udine nelle facolta' di Medicina e Chirurgia e Scienze Infermieristiche  ed e' docente in diverse Scuole di Specializzazione.</p>

          
           </div>

         </div>

         <div class="row rtcolor">
           <div class="col-xl-2 col-lg-3 col-md-2 col-3">
             <img class="myicon" src="https://cdn.pixabay.com/photo/2018/01/23/13/01/microscope-3101403__340.png" alt="">
           </div>
           <div class="col-xl-10 col-lg-8 col-md-10 col-9">
              <h4>Attività scientifica e di ricerca</h4>
              <p class="iconsection">E' responsabile scientifico di studi clinici nazionali e internazionali e ha al suo attivo oltre 250 pubblicazioni su riviste italiane e straniere.

         </div>
         <div class="row mt-4">
           <div class="col-xl-2 col-lg-3 col-md-2 col-sm-3 ml-4 col-3">
           <img style="margin-left:18px;" class="myicon" src="https://cdn.pixabay.com/photo/2017/01/31/22/32/boy-2027772__340.png" alt="">

             <!-- <img class="myicon" src="https://cdn.pixabay.com/photo/2018/01/23/13/01/microscope-3101403__340.png" alt=""> -->
           </div>
           <div class="col-xl-10 col-lg-8 col-md-10 col-9">
           <h4>Attività congressuale</h4>
             <p class="iconsection">Il Prof. Giorgio Soardo ha una lunga esperienza sia come organizzatore che relatore nei maggiori congressi nazionali ed internazionali in tema di Patologie del Fegato.</p>
             <button style=" background-color:darkblue;" class=" btn btn-primary text-center "><a style="color:white;" href="./curriculum.php">LEGGI IL CURRICULUM</a></button>


            </div>     
     </div>
    </div>
   

   
 </section>

       <!-- end section 2 -->
       <!-- start section  3 slider icons -->
 <section class="pt-5 pb-5 mt-5 ">
 
  <div class="container-fluid mt-5">
    <div class="row" >

        <div class="col-12 mt-4" >
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-3 col-md-6  mb-3">
                            
                                <div class="card choi">
                                  <img style="height: 93px; " class="mx-auto d-block p-2" alt="" src="img/fegatopicture.jpeg">

                                    <div class="card-body ">
                                        <!-- <h5 class="card-title text-center"> <a id="patt" name="patt" href="pattologie.php">Malattie del Fegato</a></h5> -->
                                        <!-- <p class="card-text text-center "></p> -->
                                        <p style="font-size:small; " class="text-center"> <a id="pattr" name="pattr" href="pattologie.php">Malattie del Fegato</a></p>
                                        
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card">
                                <img style="height: 93px; " class="mx-auto d-block p-2" alt="" src="img/pancreas.jpeg">
                                    <div class="card-body ">
                                        <p style="font-size:small; "class=" text-center"><a id="patt_pancreas" name="patt_pancreas" href="pattologie.php">Malattie del Pancreas</a></p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 ">
                                <div class="card">
                                <img style="height: 93px; " class="mx-auto d-block p-2" alt="" src="img/digest.jpeg">
                                    <div class="card-body ">
                                        <!-- <h5 class="card-title text-center"><a id="patt" href="">Malattie del'apparato digerente</a></h5> -->
                                        <p style="font-size:small;" class="text-center"><a id="apparato" name="apparato" href="pattologie.php">Malattie del'apparato digerente</a></p>
                                        <!-- <p class="card-text text-center ">testi bla bla </p> -->

                                    </div>
                                </div>
                            </div>
                            <!-- this is the last one added -->
                            <div class="col-lg-3 col-md-6 ">
                                <div class="card choi">
                                <img style="height: 103px; " class="mx-auto  p-2 max-width" alt="" src="img/waffles.jpeg">
                                    <div class="card-body ">
                                  <p style="font-size:small; " class="card-title text-center"> <a href="pattologie.php">Malattie dismetaboliche e da accumulo</a> </p>
                                        <!-- <p class="card-text text-center ">testi bla bla </p> -->



                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  

 </section>

       <!-- end section 3  -->
  <div class="sec5 container-fluid">
    <div class="row">
      <div class="col-lg-9 col-md-9 mt-4 col-7">
        <h2 class="pt-3 space" >Prenota subito la tua visita specialistica</h2>
      
      </div>
      <div class="col-3 col-md-3 mt-3 col-4">
      <div class="mt-4">
      <a style="background-color: darkblue;"  class="btn btn-primary btn-lg" href="./contatti.php">Contatti</a>
      </div>

      </div>

    </div>

  </div>
  </main>
  <!-- main ends -->
  <!-- footer -->
  <footer class="" >
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
