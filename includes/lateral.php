<!-- BARRA LATERAL -->
<aside id="sidebar">
	<div id="buscador" class="bloque">
		<h3>Search</h3>

		<form action="buscar.php" method="POST"> 
			<input type="text" name="busqueda" />
			<input type="submit" value="Search" />
		</form>
	</div>
	
	<?php if(isset($_SESSION['usuario'])): ?>
		<div id="usuario-logueado" class="bloque">
			<h3>Welcome, <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'];?></h3>
			
			<!-- BOTONES -->
			<a href="crear-entradas.php" class="boton boton-verde">Create post</a>
			<a href="crear-categoria.php" class="boton">Create category</a>
			<a href="mis-datos.php" class="boton boton-naranja">My data</a>
			<a href="cerrar.php" class="boton boton-rojo">Log Out</a>
		</div>
	<?php endif; ?>
	
	<?php if(!isset($_SESSION['usuario'])): ?>
		<div id="login" class="bloque">
			<h3>Sign In</h3>
			
			<?php if(isset($_SESSION['error_login'])): ?>
				<div class="alerta alerta-error">
					<?=$_SESSION['error_login'];?>
				</div>
			<?php endif; ?>
			
			<form action="login.php" method="POST"> 
				<label for="email">E-mail</label>
				<input type="email" name="email" />

				<label for="password">Password</label>
				<input type="password" name="password" />

				<input type="submit" value="Sign In" />
			</form>
		</div>

		<div id="register" class="bloque">
			<h3>Sign Up</h3>
			
			<!-- MOSTRAR ERRORES -->
			<?php if(isset($_SESSION['completado'])): ?>
				<div class="alerta alerta-exito">
					<?=$_SESSION['completado']?>
				</div>
			<?php elseif(isset($_SESSION['errores']['general'])): ?>
				<div class="alerta alerta-error">
					<?=$_SESSION['errores']['general']?>
				</div>
			<?php endif; ?>
			
			<form action="registro.php" method="POST"> 
				<label for="nombre">Name</label>
				<input type="text" name="nombre" />
				<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

				<label for="apellidos">Surname</label>
				<input type="text" name="apellidos" />
				<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

				<label for="email">E-mail</label>
				<input type="email" name="email" />
				<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

				<label for="password">Password</label>
				<input type="password" name="password" />
				<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>

				<input type="submit" name="submit" value="Sign Up" />
			</form>

			<?php borrarErrores(); ?>
			
		</div>
	<?php endif; ?>

</aside>