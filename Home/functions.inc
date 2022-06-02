<?php 
function stampafile($indice,$i){
     if($indice==1)
	 {
			$path = "upload/modulistica";
			$files = scandir($path);
			echo '<div id="files" class="files"><p>'.$files[$i].'</p>';

					echo "<a href='".$path."/".$files[$i]."' download><button class='link btn btn-primary btn-sm'>SCARICA</button></a>";
					echo '<a href="index.php?path='.$path."/".$files[$i].'"><button class="link btn btn-primary btn-sm">CANCELLA FILE</button></a>'; // usa unlink(path) per eliminare un file
			echo "</div>";
	
	 }
	 if($indice==2)
	 {
			$path2 = "upload/avvisi";
			$files2 = scandir($path2);
			echo '<div id="files" class="files"><p>'.$files2[$i].'</p>';
					echo "<a href='".$path2."/".$files2[$i]."' download><button class='link btn btn-primary btn-sm'>scarica</button></a>";
					echo '<a href="index.php?path='.$path2."/".$files2[$i].'"><button class="link btn btn-primary btn-sm">CANCELLA FILE</button></a>'; // usa unlink(path) per eliminare un file
			echo "</div>";
	 }
	 if($indice==3)
	 {
			$path3 = "upload/regolamenti";
			$files3 = scandir($path3);
			echo '<div id="files" class="files"><p>'.$files3[$i].'</p>';
					echo "<a href='".$path3."/".$files3[$i]."' download><button class='link btn btn-primary btn-sm'>scarica</button></a>";
					echo '<a href="index.php?path='.$path3."/".$files3[$i].'"><button class="link btn btn-primary btn-sm">CANCELLA FILE</button></a>'; // usa unlink(path) per eliminare un file
			echo "</div>";
	}
}
?>