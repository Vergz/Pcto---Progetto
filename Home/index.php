<!DOCTYPE html>
<html lang="it">
<?php
require "checkFile.inc";
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/home.css" rel='stylesheet' type='text/css' title="menù orizzontale">
  <link href="bootstrap-5.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="js/js_code.js" type="text/javascript"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <title>Home</title>
</head>

<body style="text-align: center;">

  <?php
  session_start();
  if (!isset($_SESSION["CODutente"]) || isset($_POST["uscita"])) {
    session_destroy();
    header("location: login.php");
  }
  ?>
  <?php include 'functions.inc'; ?>
  <div class="header">
    <img src="images/logo.png" class="logo">
    <form method="POST" action="index.php">
      <input type="submit" class="btn btn-primary btn-lg" value="logout" id="uscita" name="uscita" />
    </form>
  </div>



  <div id="carouselExampleCaptions" class="carousel slide carousel1" data-bs-ride="carousel">
    <div class="carousel-indicators carousel-indicators1" style="right:55%;">
      <button type="button" style="width:20px;height:20px;border-radius:100%;" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" style="width:20px;height:20px;border-radius:100%;" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" style="width:20px;height:20px;border-radius:100%;" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" style="width:20px;height:20px;border-radius:100%;" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/fodder1.jpg" class="w-100 imgslide">
        <div class="carousel-caption d-none d-md-block carousel-caption1" style="left: 55%;margin-bottom:-20px;">
          <h3 class="titoloslide">Ultime notizie</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/fodder2.jpg" class="w-100 imgslide">
        <div class="carousel-caption d-none d-md-block carousel-caption1" style="left: 55%;margin-bottom:-20px;">
          <h3 class="titoloslide">Ultime notizie</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/fodder3.jpg" class="w-100 imgslide">
        <div class="carousel-caption d-none d-md-block carousel-caption1" style="left: 55%;margin-bottom:-20px;">
          <h3 class="titoloslide">Ultime notizie</h3>
        </div>
      </div>

      <div class="carousel-item">
        <img src="images/fodder2.jpg" class="w-100 imgslide">
        <div class="carousel-caption d-none d-md-block carousel-caption1" style="left: 55%;margin-bottom:-20px;">
          <h3>Ultime notizie</h3>
        </div>
      </div>
    </div>
  </div>

  <div style="width:1080px;height:500px;">
  </div>
  <p>-</p>

  <?php
  $ar = array();
  $j = 0;
  $k = 1;
  $path = "upload";
  $files = scandir($path);
  $isFile = false;
  echo '<br/><br/>';
  for ($i = 0; $i < count($files); $i++)
    if ($files[$i] != "." && $files[$i] != "..")
      if (!is_dir($path . "/" . $files[$i]) && !$isFile) {
        $isFile = true;
        echo '<div class="box">
        <form name="f1" class="aggiungiFile"><button type="button" class="deposito" onclick="btndeposito(' . $k . ')"><h3  class="tdp" id="tdp' . $k . '"><span style="float:left;margin-left:35px;">' . $path . '</span> <span style="float:right;margin-right:30px;">▽</span></h3></button> 
					<button type="submit" class="btn btn-primary btn-lg">+</button></form>
          <div class="boxdeposito" id="boxd' . $k . '">
					<div id="carouselExampleCaptions' . $k . '" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false" style="width:100%;">
					<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
					</div>
					<div class="carousel-inner">
					<div class="carousel-item active"  id="slide' . $k . '">
				
				<!---------------------------------------------------->
				
					<div class="album py-5 w-100 d-flex justify-content-center">
					<div class="container" style="margin-left: 100px;margin-right: 100px;text-align:center;">
			
				   <div class="row row-cols-5 row-cols-sm-5 row-cols-md-5 g-3">';
        $k++;
      }
  // Funzione ricorsiva per stampare i file
  for ($i = 0; $i < count($files); $i++) {
    if ($files[$i] != "." && $files[$i] != "..") {
      if (!is_dir($path . "/" . $files[$i])) {
        echo '<div class="col">
								<div class="card shadow-sm">
								<img src="images/iconafile.png" class="iconafile">';
        echo '<div id="files" class="files"><p>' . $files[$i] . '</p>';
        echo "<a href='" . $path . "/" . $files[$i] . "' download><button class='link btn btn-primary btn-sm'>SCARICA</button></a>";
        echo '<a href="index.php?path=' . $path . "/" . $files[$i] . '"><button class="link btn btn-primary btn-sm">CANCELLA FILE</button></a>'; // usa unlink(path) per eliminare un file
        echo "</div>";
        echo '</div>
							</div>';
      } else {
        $ar[$j] = $files[$i];
        $j++;
      }
    }
  }
  if ($isFile)
    echo '</div></div></div></div></div></div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" style="color:#A0A0A0;" data-bs-target="#carouselExampleCaptions1" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		  </button>
		</div>
		</div>
		</div>';
  for ($i = 0; $i < $j; $i++)
    $k = controllo($path, $ar[$i], $k) + 1;

  //Elimina FILE
  if (isset($_GET["path"])) {
    unlink($_GET["path"]);
    echo "<script>window.history.pushState('', '', 'index.php');</script>";
    echo "<script>window.location.reload();</script>";
  }
  ?>


  <div id="upload">
    <form class="form" id="myForm">
      <input type="file" id="inpFile"><br />
      <button type="submit" id="carica" onclick="ricarica()" class="btn btn-primary btn-lg">Carica file</button>
    </form>
  </div>

  <script>
    const myForm = document.getElementById('myForm');
    const inpFile = document.getElementById('inpFile');
    //console.log(myForm);
    //console.log(inpFile);

    myForm.addEventListener("submit", e => {
      e.preventDefault();
      <?php
      $_SESSION["path"] = "upload/";
      ?>
      const endpoint = "upload.php";
      const formData = new FormData();

      formData.append("inpFile", inpFile.files[0]);
      console.log(formData);

      fetch(endpoint, {
        method: "post",
        body: formData
      }).catch(console.error);
    });

    function ricarica() {
      setTimeout(() => {
        window.location.reload();
      }, 250);
    }

    /*aggiungiFile = document.getElementsByClassName("aggiungiFile");

    nome = document.getElementsByName("nome");
    c = document.getElementsByClassName("aggiungiFile").length;
    console.log(c);
    for (i = 0; i < c; i++)
      aggiungiFile[i].addEventListener("submit", e => {
        e.preventDefault();

        for (k = 1; k <= c; k++) {
          console.log(i+" "+k);
          if (aggiungiFile[i] === nome[k]) {
            //console.log(k);
            <?php
            $_SESSION["path"] = "upload/";
            ?>
            window.location.replace("carica.php");
          }
        }
      });*/
  </script>
</body>

</html>