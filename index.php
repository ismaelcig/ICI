<?php 
/**
 * Esta é a clase que se executa
 * 
 * Incluese o ficheiro clase.php, que contén MyClass
 * e chamará aos métodos que esta contén
 * 
 * @package ICI
 * @author Ismael Conde Iglesias <ismaelci@outlook.es>
 * @version 1.0
 * 
 * 
 * 
 */
	include ("clase.php");
	$clase = new MyClass('parametro');
	
	echo '-----Vou chamar aos getters-----<br/>';
	echo $clase->getCONSTANTE().'<br/>';
	echo $clase->getPublicVar().'<br/>';
	echo $clase->getEj().'<br/>';
	echo $clase->getPrivateVar().'<br/>';
	echo '-----FIN getters-----<br/><br/>';
	
	echo '-----Emprego os setters para modificar as variables-----<br/><br/>';
	$clase->setPublicVar('Nova variable pública');
	$clase->setEj('Nova variable ej');
	$clase->setPrivateVar('Nova variable pública');
	
	echo '-----Volvo chamar aos getters-----<br/>';
	echo $clase->getCONSTANTE().'<br/>';
	echo $clase->getPublicVar().'<br/>';
	echo $clase->getEj().'<br/>';
	echo $clase->getPrivateVar().'<br/>';
	echo '-----FIN getters-----<br/><br/>';
	
	echo '-----Vou chamar ás funcións-----<br/>';
	//Función 1
	if($clase->isPalindromo('Aviva'))
		echo '"Aviva" é palindromo.<br/>';
	else echo '"Aviva" non é palindromo.<br/>';
	
	if($clase->isPalindromo('Avivó'))
		echo '"Avivó" é palindromo.<br/>';
	else echo '"Avivó" non é palindromo.<br/>';
	//Función 2
	if($clase->isPrimo(13))
		echo '13 é primo.<br/>';
	else echo '13 non é primo.<br/>';
	
	if($clase->isPrimo(14))
		echo '14 é primo.<br/>';
	else echo '14 non é primo.<br/>';
	//Función 3
	echo 'Maior entre 6 e 3? -> '.$clase->getMax(6,3).'<br/>';
	//Función 4
	echo 'Despejar x: 2x - 4 = 0<br/>';
	echo 'x='.$clase->findX(2,-4).'<br/>';
	//Función 5
	if($clase->isBisiesto(2018))
		echo '2018 é palindromo.<br/>';
	else echo '2018 non é palindromo.<br/>';
	echo '-----FIN funcións-----<br/><br/>';
	
	
?>