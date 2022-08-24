<?php 

	/*5)	Implemente un script que dada una lista de palabras harcodeadas. Muestre la más larga y la más corta.
	*/
	
	$lista= array("ul", "Arbol", "aracataca", "Correo", "Tio", "ola");

	function palabrasMasCorta($lista){	
		$palabraLarga = $lista[0];
		for ($i=1; $i < count($lista); $i++) { 
			if (strlen($lista[$i]) < strlen($palabraLarga)) {
				$palabraLarga = $lista[$i];
			}
		}
		return $palabraLarga;
	}

	function palabrasMasLarga($lista){
		$palabraLarga = $lista[0];
		for ($i=1; $i < count($lista); $i++) { 
			if (strlen($lista[$i]) > strlen($palabraLarga)) {
				$palabraLarga = $lista[$i];
			}
		}
		return $palabraLarga;
	}

	echo "La palabra mas corta es: ". palabrasMasCorta($lista) . "<br>";
	echo "La palabra mas larga es: " . palabrasMasLarga($lista);
	
	
?>