<?php
	include_once "../persist/SqlManager.class.php";		
	if(isset($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) 
	{	  extract($_POST);
		  // on recupère le password de la table qui correspond au login du visiteur		 
		  $login=$_POST['username'];		  
		  $pass=$_POST['password'];
		  $conn = new SqlManager("connect");	
		  $query = "select * from RESTAURANT where login='".$login."'";
		  $req =  $conn->ExecuteRead($query);
		  $password=null;
		foreach ( $req as $row ){
			$password=$row['password'];
			$id_carte=$row['id_carte'];
		} 
		if ($password == $pass)  
		{	session_start();
			$_SESSION['pseudo'] = $login;
			$_SESSION['idc'] = $id_carte;		
			include('home.php');
		}else 
		{
				echo '<p>Mauvais login / password. Merci de recommencer</p>';	
				include('login.htm'); // On inclut le formulaire d'identification
				exit;
		}  
	}else 
	{
		echo '<p>Vous avez oublié de remplir un champ.</p>';
	   include('login.htm'); // On inclut le formulaire d'identification
	   exit;
	}
	$conn	->closeConnection();
?>