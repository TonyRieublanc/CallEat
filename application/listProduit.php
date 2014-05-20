<?php

	include_once "../persist/SqlManager.class.php";
	
	$nomeCerva = utf8_encode($_POST["nomeCerva"]);
	$nomePessoa = utf8_encode($_POST["nomePessoa"]);
	
	if ( strlen($nomeCerva) == 0 || strlen($nomeCerva) > 15 )
	{
		header('Location: index.php?flag=2&page=pref');
		exit();
	}
	elseif ( strlen($nomePessoa) == 0 || strlen($nomePessoa) > 25 )
	{
		header('Location: index.php?flag=3&page=pref');
		exit();
	}
	
	$conn = new SqlManager("connect");
	
	$query = "INSERT INTO gostam VALUES ('" . $nomePessoa . "', '" . $nomeCerva . "')";
	
	$numLinhas = $conn->executeCommand($query);
	
	$conn->closeConnection();
	
	if ( $numLinhas == 1 )
		header('Location: index.php?flag=1&page=pref');
	else
		header('Location: index.php?flag=0&page=pref');
	
?>
