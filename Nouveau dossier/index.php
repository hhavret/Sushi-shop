<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link href="style.css" rel="stylesheet" type="text/css">
    
    <title>Document</title>
</head>
<body>
	

    
</body>
</html>

	<?php
	/* Inclure des fonctions et se connecter à la base de données en utilisant PDO MySQL*/

	
	
	/* Si aucune autre page n'est ren voyée dans les parametres http, la Page (home.php) est définie par défaut comme page d'accueil , de sorte que lorsque le visiteur se rend sur le site, c'est la page qui lui sera affichée.*/
	$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
	// Inclure et afficher la page demandée
	include $page.'.php';?>
	

