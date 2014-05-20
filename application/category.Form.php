<?php
	include_once "../persist/SqlManager.class.php";	
//	include_once "buscar.leftCol.php";	
	$conn = new SqlManager("connect");		
	
	$id_carte=$_SESSION['idc'];
	$query = "SELECT * 
	FROM category c
	WHERE id_carte =$id_carte
	ORDER BY c.id_category";	
	//ORDER BY c.id_menu_type";	
	$reslit = $conn->ExecuteRead($query);	
	echo "<div class='mws-panel grid_8'>
                	<div class='mws-panel-header'>
                    	<span><i class='icon-table'>Category:</i></span>
                    </div>
                    <div class='mws-panel-body no-padding'>
                        <table class='mws-table'>";
							echo "<thead>";
								echo"<tr>		
										<th>Name:</th>
										<th>Description:</th>
										<th>Type:</th>
										<th>Modifier:</th>
										<th>Supprimer:</th>
										</tr>";	
							echo "</thead>";
	foreach ( $reslit as $row )
	{echo "<tr>";
		$id_category = $row["id_category"];
		$id_menu_type=$row["id_menu_type"];
		$name_category=$row["name_category"];		
		$description_category=$row["description_category"];
	
		
			if($id_menu_type==1){
			$name_menu_type="Entrees";
			}else if($id_menu_type==2){	
			$name_menu_type="Plats";
			}else if($id_menu_type==3){	
			$name_menu_type="Menus";
			}else if($id_menu_type==4){	
			$name_menu_type="Desserts";}
			else if($id_menu_type==5){	
			$name_menu_type="Boissons";
			}
		echo "<td>" . $name_category . "</td>";	
		echo "<td>" . $description_category . "</td>";			
		echo "<td>" . $name_menu_type . "</td>";	
		echo "<td>	<a href='modifierCategory.Form.php?id_category=" . $id_category . "&id_menu_type=" . $id_menu_type . "&name_category=" . urlencode($name_category). "&description_category=" . urlencode($description_category) . "' ><input id='submitTable' type='submit' value='modifier'></a> </td>";
		echo "<form  value='effacer' action='effacerCategory.php?id_category=" . $id_category ."' method='Post' onsubmit='return test()'>";
		echo "<td> <input id='submitTable' type='submit'  value='effacer'></td>";
		echo "</tr>";
		echo "</form>";
	}
							echo "</table>";
					echo "</div>";
	echo "</div>";
        $reslit = $conn->ExecuteRead($query);		
	$conn->closeConnection();
?>
<script language="Javascript">
function test(){
  return window.confirm("Voulez vous supprimer cette categorie?" );
}
</script>

