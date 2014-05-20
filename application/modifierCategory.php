<?php
	session_start();
	include_once "../persist/SqlManager.class.php";
	$id_menu_type = $_POST["id_menu_type"];
	$name_category =addslashes($_POST["name_category"]);
	$description_category = addslashes($_POST["description_category"]);	
	$add=true;
	if (empty($name_category)) {
		$add=false;
	}
		if($add){	
	$conn = new SqlManager("connect");	
	$query ="UPDATE category SET name_category='$name_category',description_category='$description_category',id_menu_type=$id_menu_type WHERE id_category= '". $_GET['id_category']."'";
	$numLinhas = $conn->executeCommand($query);	
	$conn->closeConnection();	
	include "modifierCategorySuccess.php";	
	}else{
	include "modifierCategoryError.php";	
	}
?>