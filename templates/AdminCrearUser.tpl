<div class="row justify-content-md-center">
	<div class="col ">
		<br><h1>CrearUsuario</h1><br>
		<form method="post" action="">
			<div class="form-group">
				<label for="usuario">Usuarios</label>
				<input type="tex" class="form-control" id="usuario" name"usuario" aria-describedby="emailHelp">
			</div><br>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name"password" id="password" >
			</div><br>
			<div class="form-group">
				<label for="tipo">Tipo Trabajador</label>
				<select class="form-control" name="tipo" id="tipo">
					<option value="Trabajador">Trabajador</option>
					<option value="Administrador">Administrador</option>
				</select>
			</div><br>
			<button type="submit" class="btn btn-primary">Ingresar</button>
		</form>
	</div>
</div>