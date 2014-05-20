<?php
	if ( isset($_GET["flag"]) )
	{
		if ( $_GET["flag"] == 1 )
			$msg = "Inserido com sucesso";
		elseif ( $_GET["flag"] == 0 )
			$msg = "Falha ao inserir dados";
		elseif ( $_GET["flag"] == 3 )
			$msg = "Preencha corretamente o campo Nome Pessoa!";
		elseif ( $_GET["flag"] == 2 )
			$msg = "Preencha corretamente o campo Nome Cerveja!";
		print ( "<script language='javascript'>window.alert('" . $msg . "');</script>" );
	}
	echo "<form action='cadastroPreferencia.php' name='inserePreferencias' method='post'>";
	echo "<table align='center' cellpadding='0' cellspacing='5px'>";
	echo "<tr>";
	echo "<td align='right'><label>Nome Pessoa:</label></td>";
	echo "<td align='left'><input type='text' name='nomePessoa'/></td>";
	echo "</tr>";
	echo "<td align='right'><label>Nome Cerveja:</label></td>";
	echo "<td align='left'><input type='text' name='nomeCerva'/></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td colspan='2' align='center'><input type='submit' value='Cadastrar'/></td>";
	echo "</tr>";
	echo "</table>";
	echo "</form>";
?>