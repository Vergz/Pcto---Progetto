<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="bootstrap-5.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/home.css" rel='stylesheet' type='text/css' title="menù orizzontale">	
		<script src="js/js_code.js" type="text/javascript"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<title>Home</title>
</head>
<body style="text-align: center;">

<?php
  session_start();
  if(!isset($_SESSION["CODutente"]) || isset($_POST["uscita"])){
    session_destroy();
    header("location: login.php");
  }
?>
<?php include 'functions.inc';?>
<div class="header">
<img src="images/logo.png" class="logo">
  <form method="POST" action="index.php">	
	  <input type="submit" class="btn btn-primary btn-lg" value="logout" id="uscita" name="uscita"/>
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



 <div class="box">
 <button type="button" class="deposito" onclick="btndeposito(1)"><h3  class="tdp" id="tdp1"><span style="float:left;margin-left:35px;">Modulistica</span> <span style="float:right;margin-right:30px;">▽</span></h3></button> 
 <div class="boxdeposito" id="boxd1">
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false" style="width:100%;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active"  id="slide1">
	
	<!---------------------------------------------------->
	
	   <div class="album py-5 w-100 d-flex justify-content-center">
    <div class="container" style="margin-left: 100px;margin-right: 100px;text-align:center;">

      <div class="row row-cols-5 row-cols-sm-5 row-cols-md-5 g-3">
        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$indice=1;
$i=2;
stampafile($indice,$i);
?>
            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
		        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i++;
stampafile($indice,$i);
?>

            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
		        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i++;
stampafile($indice,$i);
?>
            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
				        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i++;
stampafile($indice,$i);
?>
            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
				        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i++;
stampafile($indice,$i);
?>

            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		

		
    </div>
    </div>
    </div>
	

	  </div>
	  
		<!---------------------------------------------------->	  
	  
	  
	  
	  
    <div class="carousel-item" id="slide2">
	  	  
		  
	   <div class="album py-5 w-100 d-flex justify-content-center">
    <div class="container" style="margin-left: 100px;margin-right: 100px;text-align:center;">

      <div class="row row-cols-5 row-cols-sm-5 row-cols-md-5 g-3">
        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i++;
stampafile($indice,$i);
?>

            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
		        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i++;
stampafile($indice,$i);
?>

            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
		        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i++;
stampafile($indice,$i);
?>

            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
				        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i++;
stampafile($indice,$i);
?>

            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
				        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i++;
stampafile($indice,$i);
?>

            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		

		
    </div>
    </div>
    </div>
	
		  
		 
    </div>

		
    </div>
    </div>

	
	
	
	

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>
 
 
 
  <div class="box">
 <button type="button" class="deposito" onclick="btndeposito(2)"><h3 class="tdp" id="tdp2"><span style="float:left;margin-left:35px;">Avvisi</span> <span style="float:right;margin-right:30px;">▽</span></h3></button> 
 
 
 
  <div class="boxdeposito" id="boxd2">
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false" style="width:100%;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active"  id="slide1">
	
	<!---------------------------------------------------->
	
	   <div class="album py-5 w-100 d-flex justify-content-center">
    <div class="container" style="margin-left: 100px;margin-right: 100px;text-align:center;">

      <div class="row row-cols-5 row-cols-sm-5 row-cols-md-5 g-3">
        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$indice2=2;
$i2=2;
stampafile($indice2,$i2);
?>
            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
		        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i2++;
stampafile($indice2,$i2);
?>


            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
		        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i2++;
stampafile($indice2,$i2);
?>
            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
				        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i2++;
stampafile($indice2,$i2);
?>
            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
				        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i2++;
stampafile($indice2,$i2);
?>

            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		

		
    </div>
    </div>
    </div>
	

	  </div>
	  
		<!---------------------------------------------------->	  
	  
	  
	  
	  
    <div class="carousel-item" id="slide2">
	  	  
		  
	   <div class="album py-5 w-100 d-flex justify-content-center">
    <div class="container" style="margin-left: 100px;margin-right: 100px;text-align:center;">

      <div class="row row-cols-5 row-cols-sm-5 row-cols-md-5 g-3">
        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i2++;
stampafile($indice2,$i2);
?>

            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
		        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i2++;
stampafile($indice2,$i2);
?>

            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
		        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i2++;
stampafile($indice2,$i2);
?>

            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
				        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i2++;
stampafile($indice2,$i2);
?>

            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
				        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i2++;
stampafile($indice2,$i2);
?>

            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		

		
    </div>
    </div>
    </div>
	
		  
		 
    </div>

		
    </div>
    </div>

	
	
	
	

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>
 
 
 
 <div class="box">
 <button type="button" class="deposito" onclick="btndeposito(3)"><h3 class="tdp" id="tdp3"><span style="float:left;margin-left:35px;">Regolamenti</span> <span style="float:right;margin-right:30px;">▽</span></h3></button> 
 
  <div class="boxdeposito" id="boxd3">
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false" style="width:100%;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active"  id="slide1">
	
	<!---------------------------------------------------->
	
	   <div class="album py-5 w-100 d-flex justify-content-center">
    <div class="container" style="margin-left: 100px;margin-right: 100px;text-align:center;">

      <div class="row row-cols-5 row-cols-sm-5 row-cols-md-5 g-3">
        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$indice3=3;
$i3=2;
stampafile($indice3,$i3);
?>
            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
		        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i3++;
stampafile($indice3,$i3);
?>

            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
		        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i3++;
stampafile($indice3,$i3);
?>

            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
				        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i3++;
stampafile($indice3,$i3);
?>

            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
				        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i3++;
stampafile($indice3,$i3);
?>


            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		

		
    </div>
    </div>
    </div>
	

	  </div>
	  
		<!---------------------------------------------------->	  
	  
	  
	  
	  
    <div class="carousel-item" id="slide2">
	  	  
		  
	   <div class="album py-5 w-100 d-flex justify-content-center">
    <div class="container" style="margin-left: 100px;margin-right: 100px;text-align:center;">

      <div class="row row-cols-5 row-cols-sm-5 row-cols-md-5 g-3">
        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i3++;
stampafile($indice3,$i3);
?>


            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
		        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i3++;
stampafile($indice3,$i3);
?>


            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
		        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i3++;
stampafile($indice3,$i3);
?>


            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
				        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i3++;
stampafile($indice3,$i3);
?>


            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		
				        <div class="col">
          <div class="card shadow-sm">
<img src="images/iconafile.png" class="iconafile">
<?php 
$i3++;
stampafile($indice3,$i3);
?>


            <div class="card-body">
              <p class="card-text">File</p>
            </div>
          </div>
        </div>
		

		
    </div>
    </div>
    </div>
	
		  
		 
    </div>

		
    </div>
    </div>

	
	
	
	

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>



 
<?php 
  if(isset($_GET["path"])){
    unlink($_GET["path"]);
    echo "<script>window.history.pushState('', '', 'index.php');</script>";
    echo "<script>window.location.reload();</script>";
  }
?>

		
		<div id="upload">
			<form class="form" id="myForm">
				<input type="file" id="inpFile"><br/>
				<button type="submit" id="carica" onclick="ricarica()" class="btn btn-primary btn-lg">Carica file</button>
			</form>
		</div>

<script>
	const myForm = document.getElementById('myForm');
	const inpFile = document.getElementById('inpFile');
	console.log(myForm);
	console.log(inpFile);

	myForm.addEventListener("submit", e => {
	e.preventDefault();

	const endpoint = "upload.php";
	const formData = new FormData();

	formData.append("inpFile", inpFile.files[0]);

	fetch(endpoint , {
		method: "post",
		body: formData
	}).catch(console.error);
	});

			function ricarica(){
				setTimeout(() => {
					window.location.reload();
				}, 250);
			}
</script>
</body>
</html>