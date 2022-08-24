<?php 

	/*4)	Implemente un script que dada una cadena harcodeada muestre:
	a)	El número de vocales (Por cada una)
	b)	El número de mayúsculas
	c)	El número de minúscula
	d)	El número de consonantes
	*/
	
	$cadena = "Pepito quiere pepa ULA LA LA";
	$_nvocales = 0;
	$_nconsonantes = 0;
	$arregloCadena = str_split(strtolower($cadena)); 
	$vocales = array('a', 'e', 'i', 'o', 'u'); 

	$filtroVocales = array_filter($arregloCadena, function($val) use ($vocales) {
		return in_array($val, $vocales);
	});

	foreach (count_chars($cadena, 1) as $i => $val){
	if (preg_match('/[aeiouáéíóúü]/i',chr($i))){
	        $_nvocales = $_nvocales + $val;
	    }else if (preg_match('/[a-z]/i',chr($i))){
	        $_nconsonantes= $_nconsonantes + $val;
		}					
	}

	function mayusculas($cadena){
		$cadena = preg_match_all('/([A-Z]{1})/',$cadena);
		return $cadena;
	}

	function minusculas($cadena){
		$cadena = preg_match_all('/([a-z]{1})/',$cadena);
		return $cadena;
	}

	print_r(array_count_values($filtroVocales)); 
	echo "<br>" . "Numero de vocales en total: ". $_nvocales;
	echo "<br>" . "Numero de consonates en total: ". $_nconsonantes."<br>";
	echo "Numero de mayusculas en total: ".mayusculas($cadena)."<br>";
	echo "Numero de minusculas en total: ".minusculas($cadena)."<br>";
?>