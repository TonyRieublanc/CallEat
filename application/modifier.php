<?php
	session_start();
	$id_carte=$_SESSION['idc'];
	?>
<?php
	include_once "../persist/SqlManager.class.php";	
	$name = addslashes($_POST["name"]);	
	$id_category = $_POST["id_category"];
	$id_menu_type=$_GET['id_menu_type'];
	$description = nl2br(addslashes($_POST["description"]));
	$price = $_POST["price"];
	$add=true;/*
	if(is_numeric($price)){	
		$boolPrice=true;
}else{
$boolPrice=false; 
 $add=false;
}*/
	if (empty($name)) {
			$add=false;
	}
	if($add){	
	$conn = new SqlManager("connect");	
	$query ="UPDATE product SET name='$name',id_category=$id_category,description='$description',price='$price' WHERE id_product= '". $_GET['id_product']."'";
	$numLinhas = $conn->executeCommand($query);	
	$conn->closeConnection();
	include "modifierSuccess.php";		
	}else{
	include "modifierError.php";	
	}
?>
