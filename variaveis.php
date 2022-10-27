<?php 

	

	echo("Testando o escape <br> dentro das aspas duplas <br> <br>");

	$array = array(
		"foo"=>"bar",
		"bar"=>"foo",
		100=>-100,
		-100=>100
	);

	var_dump($array);

	echo "<br>";

	$nomes = array(
		"João",
		"Pedro",
		"Paulo",
		"José",
		"Antônio"
	);

	var_dump($nomes);

	echo "<br>";

	var_dump($nomes[0]);

	echo "<br>";

	$salario = array(
		1500,
		2000,
		3000,
		"gerente"=>15000,
		5000,
		3715
	);

	var_dump($salario["gerente"]);

	echo "<br>";

	echo "<br>O salário do gerente é: " . $salario["gerente"];	
?>