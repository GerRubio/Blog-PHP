<?php require_once 'includes/cabecera.php'; ?>		
<?php require_once 'includes/lateral.php'; ?>
		
<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Last posts</h1>
	
	<?php 
		$entradas = conseguirEntradas($db, true);
		
		if(!empty($entradas)):
			while($entrada = mysqli_fetch_assoc($entradas)):
	?>
				<article class="entrada">
					<a href="entrada.php?id=<?=$entrada['id']?>">
						<h2><?=$entrada['titulo']?></h2>
						</br>
						<span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
						</br>
						<p><?=substr($entrada['descripcion'], 0, 180)."..."?></p>
					</a>
				</article>
	<?php
			endwhile;
		endif;
	?>

	<div id="ver-todas">
		<a href="entradas.php">See all posts</a>
	</div>
</div>
			
<?php require_once 'includes/pie.php'; ?>