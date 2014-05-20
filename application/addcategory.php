<?php
	session_start();
	include_once "../persist/SqlManager.class.php";
	$conn = new SqlManager("connect");
	$name_category = addslashes($_POST["name_category"]);	
	$description_category = addslashes($_POST["description_category"]);
	$id_menu_type = $_POST["id_menu_type"];	
	echo $id_menu_type;
	$add=true;
	$id_carte=$_SESSION['idc'];	
	if($id_menu_type==0){
		$add=false;
		}		
	if (empty($name_category)) {	
		$add=false;
	}
	if($add){	
	$query="INSERT INTO category (name_category,description_category, id_menu_type,id_carte) VALUES ('$name_category','$description_category',$id_menu_type,$id_carte)";		
	$numLinhas = $conn->executeCommand($query);		
	$conn->closeConnection();	
	include "addCategorySucces.php";
  ?> 

<?php
	}else {	
	include "addCategoryError.php";
	}
?>
