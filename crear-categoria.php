<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>	
<?php require_once 'includes/lateral.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Create category</h1>
	<p>Add new categories to the blog so users can use them when creating their posts.</p>
	<br/>
	<form action="guardar-categoria.php" method="POST">
		<label for="nombre">Category name:</label>
		<input type="text" name="nombre" />
		<input type="submit" value="Save" />
	</form>
</div>
			
<?php require_once 'includes/pie.php'; ?>