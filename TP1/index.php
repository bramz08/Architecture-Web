<?php

echo "page d'accueil !";

if (isset($_GET['ref'])) {
	echo "<br />VALEUR DE REF : "    .     $_GET['ref']; 
	
}

echo "<HR /><a href='contact'>Cliquez ici !</a>" ;

?>