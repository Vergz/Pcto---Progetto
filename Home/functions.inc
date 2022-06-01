<?php 
function stampafile($indice,$i){
     if($indice==1)
	 {
			$path = "upload/modulistica";
			$files = scandir($path);
			echo '<div id="files" class="files">';

					echo "<a href='".$path."/".$files[$i]."' download><button class='link'>".$files[$i]."</button></a>";
					echo '<button >CANCELLA FILE</button>'; // usa unlink(path) per eliminare un file
			echo "</div>";
	
	 }
	 if($indice==2)
	 {
			$path2 = "upload/avvisi";
			$files2 = scandir($path2);
			echo '<div id="files" class="files">';
					echo "<a href='".$path2."/".$files2[$i]."' download><button class='link'>".$files2[$i]."</button></a>";
					echo '<button >CANCELLA FILE</button>'; // usa unlink(path) per eliminare un file
			echo "</div>";
	 }
	 if($indice==3)
	 {
			$path3 = "upload/regolamenti";
			$files3 = scandir($path3);
			echo '<div id="files" class="files">';
					echo "<a href='".$path3."/".$files3[$i]."' download><button class='link'>".$files3[$i]."</button></a>";
					echo '<button >CANCELLA FILE</button>'; // usa unlink(path) per eliminare un file
			echo "</div>";
	}
}
?>