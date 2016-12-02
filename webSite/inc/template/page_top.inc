<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Développement web</title>
		<link type="text/css" rel="stylesheet" href="styles/global.css">
	</head>

	<body>
	
		<!-- HEADER -->
		<div id="header-wrap">
			<div id="header">
				<div id="titre du site">Développement Web</div>
				<div id="slogan">Le web, c'est simple !!</div>
			</div>
			<div id="user">
				<?php 
				if (isset($_SESSION['pseudo'])){
					echo "Bonjour, ".$_SESSION['pseudo'];
echo " <a href=\"index.php?page=user_logout\"> déconnexion</a>";
				} else{
					echo " <a href=\"index.php?page=user_login\"> connexion</a>";
				}
				?>
			</div>
		</div>
		
		<!-- NAVIGATION -->
		<div id="nav">
			<ul>
				<?php include "inc/menus/menu_principal.inc";?>
			</ul>
		</div>
		