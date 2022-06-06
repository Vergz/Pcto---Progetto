<?php 
    $cont = 2;
    function controllo($path,$dir,$cont){
        echo '<div class="box">
				<button type="button" class="deposito" onclick="btndeposito('.$cont.')"><h3  class="tdp" id="tdp'.$cont.'"><span style="float:left;margin-left:35px;">'.$dir.'</span> <span style="float:right;margin-right:30px;">▽</span></h3></button> 
				<div class="boxdeposito" id="boxd'.$cont.'">
				<div id="carouselExampleCaptions'.$cont.'" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false" style="width:100%;">
				<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				</div>
				<div class="carousel-inner">
				<div class="carousel-item active"  id="slide'.$cont.'">
				  <div class="album py-5 w-100 d-flex justify-content-center">
				 <div class="container" style="margin-left: 100px;margin-right: 100px;text-align:center;">
				   <div class="row row-cols-5 row-cols-sm-5 row-cols-md-5 g-3">';
        $ar = array();
        $j = 0;
        $files = scandir($path."/".$dir);
        for($i=0;$i<count($files);$i++){
            if($files[$i]!="."&&$files[$i]!=".."){
                if(!is_dir($path."/".$dir."/".$files[$i])){
                   echo '<div class="col">
								<div class="card shadow-sm">
								<img src="images/iconafile.png" class="iconafile">';
								echo '<div id="files" class="files"><p>'.$files[$i].'</p>';
								echo "<a href='".$path."/".$files[$i]."' download><button class='link btn btn-primary btn-sm'>SCARICA</button></a>";
								echo '<a href="index.php?path='.$path."/".$files[$i].'"><button class="link btn btn-primary btn-sm">CANCELLA FILE</button></a>'; // usa unlink(path) per eliminare un file
								echo "</div>";
								echo '</div></div>';
                }else{
                   $ar[$j] = $files[$i];
                   $j++;
                }
            }
		}
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
        for($i=0;$i<$j;$i++){
            $cont++;
            $cont = controllo($path."/".$dir, $ar[$i],$cont);
        }
        return $cont;
    }
?>