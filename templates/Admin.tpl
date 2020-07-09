<div class="row justify-content-md-center">
	<div class="col-12 ">
		<ul class="nav alert-primary">
			<li class="nav-item">
				<h4>Usuario: {$usuario} </h4>
			</li>
			<li class="nav-item">
			------------------------------
			</li>
			<li class="nav-item">
				<h4>Tipo: {$tipo} </h4>
			</li>
		</ul>
	</div>
</div>

<div class="row justify-content-md-center">

	<div class="col-3">
		<ul class="nav flex-column alert-danger">
			<br><br><br>
			<li class="nav-item">
				<a class="nav-link active" href="?controller=Operaciones&action=VentanaCrearUsuario">Crear Usuario</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="?controller=Operaciones&action=VentanaHDUser">Habilitar/Deshabilitar Usuario</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="?controller=Operaciones&action=VentanaVerInventario">Ver Inventario</a>
			</li><br><br><br>
		</ul>
	</div>

	<div class="col-9">
		{if isset($ventana)}
			{if $ventana=="vcu"}
				{include file='AdminCrearUser.tpl'}
			{else if $ventana=="vhdu"}
				{include file='AdminHDUser.tpl'}
			{else if $ventana=="vvi"}
				<p>ventana ver inventario</p>
			{else}

			{/if}
		{else}
			<p>info de la empresa</p>
		{/if}
	</div>
</div>

