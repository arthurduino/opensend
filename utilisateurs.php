<?php
    session_start();

    if($_SESSION['isadmin'] != 1) {
        echo 'Vous devez posséder le droits d\'administration pour accéder à cette page';
    } 

?>
<!DOCTYPE html>
<html lang=fr>
	<head>
		<title>
			Utilisateurs
		</title>
		<link type="text/css" rel="stylesheet" href="style.css">
	</head>
	<body>
		
		<div id=menudiv>
			<br>
			<ul id=Menu>
				<li class="menuli"><a href="admin.php" class="menulink">&#x2B05; Admin</a></li>
				<li class="menuli"><a href="utilisateurs/liste.php" class="menulink">Liste</a></li>
				<li class="menuli"><a href="utilisateurs/add.php" class="menulink">Ajouter</a></li>
				<li class="menuli"><a href="utilisateurs/delete.php" class="menulink">Supprimer</a></li>
			</ul>
		</div>
						
	</body>
</html>