<?php 
	
	/*2)	Implemente un script que dado un carácter y numero hardcodeado. Muestre el carácter n veces. Por ejemplo: (5, "x") debería devolver "xxxxx".  */
	

	function repetirCaracter($numero, $caracter){
		for ($i=0; $i < $numero; $i++) { 
			echo $caracter;
		}
	}

	$numero = 5;
	$caracter = "n";

	repetirCaracter($numero, $caracter);


?>