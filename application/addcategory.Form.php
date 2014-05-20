<script type="text/javascript">
window.onload=function(){
document.getElementById('id_menu_titre').focus();
}
</script>
<?php
	$id_carte=$_SESSION['idc'];
	include_once "../persist/SqlManager.class.php";	
	$conn = new SqlManager("connect");
	include "leftCol.php";
	echo "<form action='addcategory.php' name='addcategory' method='post'>";
	echo "<table align='center' cellpadding='0' cellspacing='5px'>";	
	echo "<tr>";
	echo "<td align='right'><label>Type:*</label></td>";
	echo "<td align='left'>";
	if($boolAdd){
	
		echo"<select id='id_menu_type' name='id_menu_type'>";			
		echo "<option value=\"$id_menu_type\">$name_menu_type</option>";			
		$query = "SELECT id_menu_type, name_menu_type
					FROM types											
					WHERE id_menu_type <> $id_menu_type					
					"					;
		$reslit = $conn->ExecuteRead($query);	
			foreach ( $reslit as $row )		    {	
			$id_menu_type=$row['id_menu_type'];
			$name_menu_type=$row['name_menu_type'];
			echo "<option value=\"$id_menu_type\" >$name_menu_type</option>";
			}		
		echo"</select>";
		
	}else if (!$boolAdd){	
		
		echo"
			<select id='id_menu_type' name='id_menu_type'>
			<option value='0'> ----- Choisir ----- </option>
			<option value='1'> Entr&eacute;e </option>
			<option value='2'> Plat </option>
			<option value='3'> Menu </option>	
			<option value='4'> Dessert </option>
			<option value='5'> Boisson </option>		
			</select>";
		}
		
		echo "</td>";
		echo "</tr>";
		
		echo "<tr>";	
		echo "<td align='right'><label>Nom de la cat&eacute;gorie:*</label></td>";
		echo "<td align='left'><input type='text' name='name_category'/></td>";
		echo "</tr>";	
		echo "<tr>";	
		echo "<td align='right'><label>Description de la cat&eacute;gorie:</label></td>";
		echo "<td align='left'><input type='text' name='description_category'/></td>";
		echo "</tr>";	
		echo "<tr>";
		echo "<td colspan='2' align='center'><input id='submitenregistrer' type='submit' value='Enregister'/></td>";
		echo "</tr>";
		echo "</table>";
		echo "</form>";
 ?>
