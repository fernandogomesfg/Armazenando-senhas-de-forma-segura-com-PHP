<?php
	//Armazenando senhas de forma segura

	$senha = '123';

	$senhasegura = password_hash($senha, PASSWORD_DEFAULT);

	var_dump($senhasegura);
	echo "<br>";

	//Verificar se a senha esta correcta ou nao
	$senhaCorrecta = password_verify('123', $senhasegura)? "Entrando no sistema" : "Usuario e/ou Senhas invalido(s)";

	var_dump($senhaCorrecta);


?>