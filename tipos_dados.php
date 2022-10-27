<?php 

	$nome = null;

	var_dump($nome);

	echo "<br>";

	//valor por referencia

	$foo = "Bob";
	$bar = &$foo;
	$bar = "<br>Meu nome é $bar";
	echo $bar;
	echo $foo;



 ?>