<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="bootstrap-5.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/stile_1.css" rel='stylesheet' type='text/css' title="menù orizzontale">	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="js/js_code.js" type="text/javascript"></script>  
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<title>Home</title>
</head>
<body style="text-align: center;">
<div class="header">
<img src="images/logo.png" class="logo">
</div>



<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" style="width:20px;height:20px;border-radius:100%;" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" style="width:20px;height:20px;border-radius:100%;" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" style="width:20px;height:20px;border-radius:100%;" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
	<button type="button" style="width:20px;height:20px;border-radius:100%;" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
	    <img src="images/fodder1.jpg" class="w-100 imgslide">	 		
      <div class="carousel-caption d-none d-md-block">
        <h5>Ultime notizie</h5>
        <p>A tense, enthralling hour of shifting identities, simmering grudges, and tying up loose ends.</p>
      </div>
	  </div>
    <div class="carousel-item">
	  	    <img src="images/fodder2.jpg" class="w-100 imgslide">			
      <div class="carousel-caption d-none d-md-block">
        <h5>Ultime notizie</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
	  	    <img src="images/fodder3.jpg" class="w-100 imgslide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Ultime notizie</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
	
	    <div class="carousel-item">
	    <img src="images/fodder2.jpg" class="w-100 imgslide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Ultime notizie</h5>
        <p>Some representative placeholder content for the third slide.</p>
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





<?php 
			$path = "upload";
			$files = scandir($path);
			echo '<div id="files" style="padding:20px">';
			for($i=0;$i<count($files);$i++){
				if($files[$i]!="."&&$files[$i]!=".."){
					echo "<li><a href='".$path."/".$files[$i]."' download><button class='link'>".$files[$i]."</button></a>";
					echo '<button >CANCELLA FILE</button></li>'; // usa unlink(path) per eliminare un file
				}
			}
			echo "</div>";
		?>
		
		<div id="upload">
			<form class="form" id="myForm">
				<input type="file" id="inpFile"><br/>
				<button type="submit" id="carica" onclick="ricarica()" class="btn btn-primary btn-lg">Carica file</button>
			</form>
		</div>

		<script>
			// Upoload file
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
		<style>
		#uscita{
			float:right;
		}
		header{
			background-color:#f1f3f4;
		}
		img{
			padding:40px;
			padding-left:80px;
		}
		#upload{
			width:400px;
			height:150px;
			border-style: solid;
			padding: 20px;
			margin: 20px;
      float:right;
		}
		#carica{
			width:350px;
		}
    #files{
      float:right;
    }
		.link{
			width:200px;
		}
		a{
			text-decoration:none;
		}
		</style>
</body>
</html>