<?php
session_start();
$connexion=false;
	if (isset($_SESSION['idc'])){
		$connexion=true;
		}	
?>
<?php if ($connexion==false) { 
include "login.htm";
}else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
	<head>
		<title>Call & Eat</title>
		<!-- Viewport Metatag -->
	<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/themer.css" media="screen">
		<?php /*
		<link href="../css/stylesheet.css" type="text/css" rel="stylesheet" />		*/ ?>
	</head>
	<body>	
			
			
		<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
			<div id="mws-logo-container">
			
				<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
				<div id="mws-logo-wrap">
					<img src="images/mws-logo.png" alt="mws admin">
				</div>
			</div>
			
			<!-- User Tools (notifications, logout, profile, change password) -->
			<div id="mws-user-tools" class="clearfix">
			
			
				
				<!-- Messages -->
				
				
				<!-- User Information and functions section -->
				<div id="mws-user-info" class="mws-inset">
				
					<!-- User Photo -->
					<div id="mws-user-photo">
						<img src="example/profile.jpg" alt="User Photo">
					</div>
					
					<!-- Username and Functions -->
					<div id="mws-user-functions">
						<div id="mws-username">
							Welcome User
						</div>
						<ul>
							<li><a href="deconnexion.php">Logout</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>			
			
		
		<div id="mws-wrapper">
    
			<!-- Necessary markup, do not remove -->
					<div id="mws-sidebar-stitch"></div>
					<div id="mws-sidebar-bg"></div>
					
					<!-- Sidebar Wrapper -->
					<div id="mws-sidebar">
					
						<!-- Hidden Nav Collapse Button -->
						<div id="mws-nav-collapse">
							<span></span>
							<span></span>
							<span></span>
						</div>        
        <!-- Sidebar Wrapper -->
			<div id="mws-sidebar">      
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
				
				<li>
                        <a href="index.php?page=display"><i class="icon-list"></i> La Carte</a>
                        <ul>
                            <li><a href='index.php?page=category'>Category</a></li>
                            <li><a href="form_layouts.html">Entrees</a></li>
                            <li><a href="form_elements.html">Plats</a></li>
                            <li><a href="form_wizard.html">Menus</a></li>
							<li><a href="form_wizard.html">Desserts</a></li>
							<li><a href="form_wizard.html">Boissons</a></li>
                        </ul>
                 </li> 
                </ul>
            </div>  
			
        </div>	
		<!-- End Menu Gauche -->
		 <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">
		
			
		<?php
					if ( isset($_GET["page"]) )
					{	$page = $_GET["page"];
						if ( strcmp($page, "add") == 0 )
							include "leftCol.php";							
						if ( strcmp($page, "restau") == 0 )
							include "Restau.php";							
						elseif ( strcmp($page, "login") == 0 )
							include "login.htm";
						elseif ( strcmp($page, "consultas") == 0 )
							include "buscar.Form.php";
						elseif ( strcmp($page, "entrees") == 0 )
							include "buscar.Form.php";
						elseif ( strcmp($page, "category") == 0 ){							
							include "category.Form.php";}
						elseif ( strcmp($page, "plats") == 0 )
							include "buscar.Form.php";
						elseif ( strcmp($page, "menus") == 0 )
							include "buscar.Form.php";
						elseif ( strcmp($page, "desserts") == 0 )
							include "buscar.Form.php";
						elseif ( strcmp($page, "boissons") == 0 )
							include "buscar.Form.php";
						elseif ( strcmp($page, "addcategory") == 0 ){
							$boolAdd=false;
							include "addcategory.Form.php";	}	
						elseif ( strcmp($page, "addcategory.php") == 0 ){
							$boolAdd=false;
						//	include "addcategory.php";
						}	
						elseif ( strcmp($page, "addentree") == 0 ){
							$boolAdd=false;
							include "addProduct.Form.php";}
						elseif ( strcmp($page, "addplat") == 0 ){
							$boolAdd=false;
							include "addProduct.Form.php";}
						elseif ( strcmp($page, "addmenu") == 0 ){
							$boolAdd=false;
							include "addProduct.Form.php";}
						elseif ( strcmp($page, "adddessert") == 0 ){
							$boolAdd=false;
							include "addProduct.Form.php";}
						elseif ( strcmp($page, "addboisson") == 0 ){
							$boolAdd=false;
							include "addProduct.Form.php";}		
						elseif ( strcmp($page, "display") == 0 )
							include "buscar.leftCol.php";	
						elseif ( strcmp($page, "deconnexion") == 0 )
							include "deconnexion.php";	
						/* Adicione aqui uma entrada para novas abas */
					}
				?>
		
		
		
		
		
		
		
		
		
			</div>	
		</div>
		
		
		
			<div id="footer">
			</div>
		</div>
    <!-- JavaScript Plugins -->
    <script src="js/libs/jquery-1.8.3.min.js"></script>
    <script src="js/libs/jquery.mousewheel.min.js"></script>
    <script src="js/libs/jquery.placeholder.min.js"></script>
    <script src="custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="jui/jquery-ui.custom.min.js"></script>
    <script src="jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="plugins/flot/jquery.flot.min.js"></script>
    <script src="plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="plugins/colorpicker/colorpicker-min.js"></script>
    <script src="plugins/validate/jquery.validate-min.js"></script>
    <script src="custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="js/demo/demo.dashboard.js"></script>

</body>
</html>
<?php }?>
