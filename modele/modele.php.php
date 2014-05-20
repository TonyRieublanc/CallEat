<?php
	include_once "../persist/SqlManager.class.php";
	
	function getNameMenuType(){
		if($id_menutype==1){
			return "Entr&eacute;e";
		}else if($id_menutype==2){
			return "Plat";
		}else if($id_menutype==3){
			return "Menu";
		}else if($id_menutype==4){
			return "Dessert";
		}else if($id_menutype==5){
			return "Boisson";
		}
	
	}
?>
