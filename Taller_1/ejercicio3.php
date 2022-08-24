<?php 

	/*3)	Implemente un script que dado una lista hardcodeada de números enteros imprima un histograma en la pantalla. Ejemplo: [4, 9, 7] debería imprimir lo siguiente:

		****
		*********
		*******
	*/

	$arreglo = array("4", "9", "7");

	function histograma ($arreglo){
		foreach ($arreglo as $valor) {
			$caracter = "";
			$numero = $valor;
			while ($numero > 0) {
				$caracter = $caracter . "*";
				$numero = $numero - 1;
			}
			echo $caracter . "<br>";
		}
	}

	histograma($arreglo);
	

?>