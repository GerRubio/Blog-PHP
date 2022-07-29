<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>My Blog</title>
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
	</head>
	<body>
		
		<!-- CABECERA -->
		<header id="cabecera">
			
			<!-- LOGO -->
			<div id="logo">
				<a href="index.php">My Blog</a>
			</div>
			
			<!-- MENÚ -->
			<nav id="menu">
				<ul>
					<li>
						<a href="index.php">Front Page</a>
					</li>

					<?php 
						$categorias = conseguirCategorias($db);

						if(!empty($categorias)):
							while($categoria = mysqli_fetch_assoc($categorias)): 
					?>
								<li>
									<a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
								</li>
					<?php
							endwhile;
						endif;
					?>
				
				</ul>
			</nav>
			<div class="clearfix"></div>
		</header>
		<div id="contenedor">