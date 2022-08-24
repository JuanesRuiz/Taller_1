<?php 

	/*6)	Implemente un script que dada una lista de palabras y un numero de entero harcodeadas, devuelva las palabras que tengan más de n caracteres.
	*/
	
	$palabras = array("li","Paraiso", "boulevar", "bicicleta", "Madrina","feo","mandarina", "papaya");
	
	$numero = 5;
	foreach ($palabras as $valor) {
		if (strlen($valor) > $numero) {
			echo $valor."<br>";
		}
	}
?>