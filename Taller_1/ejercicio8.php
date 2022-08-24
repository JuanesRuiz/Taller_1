<?php 

	/*8)	Definir una función que reciba dos listas y devuelva True si tienen al menos 1 miembro en común o devuelva False de lo contrario. */
	
	$listaUno = array("pera","banano","mango","papaya");
	$listaDos = array("papaya","manzana","patilla");

	function miembroComun($arregloUno, $arregloDos){
		$bool = false;
		foreach ($arregloUno as $valorUno) {
        	foreach ($arregloDos as $valorDos) {
            	if ($valorUno == $valorDos) {
                	$bool = true;
            	}
        	}
    	}
		return $bool;
    }
 
	echo var_export(miembroComun($listaUno, $listaDos));
	
?>