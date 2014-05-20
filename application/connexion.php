    <?php

    session_start();

  
    // On met les variables utilisés du script PHP à FALSE.
    $error = FALSE;
    $connexionOK = FALSE;
    // On regarde si l'utilisateur a bien utilisé le module de connexion pour traiter les données.
    if(isset($_POST["connexion"])){
      
       // On regarde si tout les champs sont remplis. Sinon on lui affiche un message d'erreur.   
       if($_POST["login"] == NULL OR $_POST["pass"] == NULL){
  
          $error = TRUE;
          
          $errorMSG = "Vous devez remplir tout les champs !";
          
       }
       
       // Sinon si tout les champs sont remplis alors on regarde si le nom de compte rentré existe bien dans la base de données.
       else{
          
          $sql = "SELECT login FROM restaurant WHERE login = '".$_POST["login"]."' ";
          
          $req = mysql_query($sql);
          
          // Si oui, on continue le script...      
          if($sql){
             
             // On sélectionne toute les données de l'utilisateur dans la base de données.   
             $sql = "SELECT * FROM restaurant WHERE login = '".$_POST["login"]."' ";
          
             $req = mysql_query($sql);
             
             // Si la requête SQL c'est bien passé...      
             if($sql){
             
                // On récupère toute les données de l'utilisateur dans la base de données.
                $donnees = mysql_fetch_assoc($req);
                
                // Si le mot de passe entré à la même valeur que celui de la base de données, on l'autorise a se connecter...         
                if($_POST["pass"] == $donnees["pass"]){
                
                   $connexionOK = TRUE;
                   
                   $connexionMSG = "Connexion au site réussie. Vous êtes désormais connecté !";
                   
                   $_SESSION["login"] = $_POST["login"];
                   
                   $_SESSION["pass"] = $_POST["pass"];
                
                }
                
                // Sinon on lui affiche un message d'erreur.
                else{
                
                   $error = TRUE;
                
                   $errorMSG = "Nom de compte ou mot de passe incorrect !";
                
                }
             
             }
             
             // Sinon on lui affiche un message d'erreur.      
             else{
             
                $error = TRUE;
             
                $errorMSG = "Nom de compte ou mot de passe incorrect !";
             
             }
          
          }
          
          // Sinon on lui affiche un message d'erreur.      
          else{
             
             $error = TRUE;
             
             $errorMSG = "Nom de compte ou mot de passe incorrect !";
             
          }
       
       }
       
    }

    mysql_close($BDD);

    ?>

    <?php if(isset($_SESSION["login"]) AND isset($_SESSION["pass"])){
       
       echo "<p style="color:green">Bienvenue <strong>".$_SESSION["login"]."</strong></p>";
       
    } ?>

    <?php if($error == TRUE){ echo "<p align="center" style="color:red"><strong>".$errorMSG."</strong></p>"; } ?>

    <?php if($connexionOK == TRUE){ echo "<p align="center" style="color:green"><strong>".$connexionMSG."</strong></p>"; } ?>


Maintenant voici un récapitulatif de ce que vous devriez avoir en tout :

Code:

    <?php

    session_start();

    $BDD = mysql_connect("localhost","root","");  // Connexion à la base de données.
                mysql_select_db("database");       // Sélection de la base de données utilisée.

    // On met les variables utilisés du script PHP à FALSE.
    $error = FALSE;

    $connexionOK = FALSE;

    // On regarde si l'utilisateur a bien utilisé le module de connexion pour traiter les données.
    if(isset($_POST["connexion"])){
       
       // On regarde si tout les champs sont remplis. Sinon on lui affiche un message d'erreur.   
       if($_POST["login"] == NULL OR $_POST["pass"] == NULL){
          
          $error = TRUE;
          
          $errorMSG = "Vous devez remplir tout les champs !";
          
       }
       
       // Sinon si tout les champs sont remplis alors on regarde si le nom de compte rentré existe bien dans la base de données.
       else{
          
          $sql = "SELECT login FROM users WHERE login = '".$_POST["login"]."' ";
          
          $req = mysql_query($sql);
          
          // Si oui, on continue le script...      
          if($sql){
             
             // On sélectionne toute les données de l'utilisateur dans la base de données.   
             $sql = "SELECT * FROM users WHERE login = '".$_POST["login"]."' ";
          
             $req = mysql_query($sql);
             
             // Si la requête SQL c'est bien passé...      
             if($sql){
             
                // On récupère toute les données de l'utilisateur dans la base de données.
                $donnees = mysql_fetch_assoc($req);
                
                // Si le mot de passe entré à la même valeur que celui de la base de données, on l'autorise a se connecter...         
                if($_POST["pass"] == $donnees["pass"]){
                
                   $connexionOK = TRUE;
                   
                   $connexionMSG = "Connexion au site réussie. Vous êtes désormais connecté !";
                   
                   $_SESSION["login"] = $_POST["login"];
                   
                   $_SESSION["pass"] = $_POST["pass"];
                
                }
                
                // Sinon on lui affiche un message d'erreur.
                else{
                
                   $error = TRUE;
                
                   $errorMSG = "Nom de compte ou mot de passe incorrect !";
                
                }
             
             }
             
             // Sinon on lui affiche un message d'erreur.      
             else{
             
                $error = TRUE;
             
                $errorMSG = "Nom de compte ou mot de passe incorrect !";
             
             }
          
          }
          
          // Sinon on lui affiche un message d'erreur.      
          else{
             
             $error = TRUE;
             
             $errorMSG = "Nom de compte ou mot de passe incorrect !";
             
          }
       
       }
       
    }

    mysql_close($BDD);

    ?>

    <?php if(isset($_SESSION["login"]) AND isset($_SESSION["pass"])){
       
       echo "<p style="color:green">Bienvenue <strong>".$_SESSION["login"]."</strong></p>";
       
    } ?>

    <?php if($error == TRUE){ echo "<p align="center" style="color:red"><strong>".$errorMSG."</strong></p>"; } ?>

    <?php if($connexionOK == TRUE){ echo "<p align="center" style="color:green"><strong>".$connexionMSG."</strong></p>"; } ?>

    <html>

       <head>
       
          <title>Création d'un formulaire de connexion en HTML</title>
          
       </head>
       
       <body>
          
          <h2>Connexion au site</h2>
       
          <form action="connexion.php" method="post">
             
             <table>
                
                <tr>
                   
                   <td><label for="login"><strong>Nom de compte</strong></label></td>
                   <td><input type="text" name="login" id="login"/></td>
                   
                </tr>
                
                <tr>
                   
                   <td><label for="pass"><strong>Mot de passe</strong></label></td>
                   <td><input type="password" name="pass" id="pass"/></td>
                   
                </tr>
                
             </table>
             
             <input type="submit" name="connexion" value="Se connecter"/>
          
          </form>
       
       </body>
       
    </html>

    Revenir en haut

CrazyGui


CrazyGui

    Messages: 1
    Date d'inscription: 04/08/2012

    Message n°2

Re: [PHP] Créer un formulaire de connexion

Message par CrazyGui le Sam 4 Aoû - 23:38
Bonsoir,

pour le formulaire d'inscription c'était parfait , cela a fonctionné, par contre au niveau du formulaire de connexion et surtout au niveau du php je ne comprends pas trop ce qu'il se passe. Le site ne peut plus accéder à la page lorsque je met ton code php, mais le code html fonctionne très bien (sans le code php bien sur). J'aimerais savoir si chez d'autres personnes ce code fonctionne ou non, merci.


Cordialement, CrazyGui.

Edit: j'ai remarqué qu'il y avait 3 fois ce code :
// Sinon on lui affiche un message d'erreur.
else{
$error = TRUE;
$errorMSG = "Nom d'utilisateur ou mot de passe incorrect !";

}

Mais je ne pense pas que c'est à cause de cela. De plus ma page "connexion.php" ne veut plus s'ouvrir lorsque je met le code php au-dessus : j'ai bien fais comme dans le formulaire d'inscription :
<form action="inscription.php" method="post" name="reg" id="reg">
sauf que pour la connexion j'ai mis :
<form action="connexion.php" method="post" name="co" id="co">

    Revenir en haut

« Voir le sujet précédent · Voir le sujet suivant »

Sujets similaires
-
» { Créer } Page Phishing
» (Tutoriel) / Créer un groupe résidentiel d'ordinateurs
» Formulaire de pub
» Formulaire de pub
» ☼ Petit formulaire ☼

	
La date/heure actuelle est Ven 21 Fév - 21:53

    Forum gratuit | Invision | Forum gratuit d'entraide | Contact | Signaler un abus | Créer un forum

