<!--
<div class="container is-fluid mb-6">
	<h1 class="title">Usuarios</h1>
	<h2 class="subtitle">Nuevo usuario</h2>
</div>

<div class="container pb-6 pt-6">

	<form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/usuarioAjax.php" method="POST" autocomplete="off" enctype="multipart/form-data" >

		<input type="hidden" name="modulo_usuario" value="registrar">

		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Nombres</label>
				  	<input class="input" type="text" name="usuario_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Apellidos</label>
				  	<input class="input" type="text" name="usuario_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required >
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Usuario</label>
				  	<input class="input" type="text" name="usuario_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Email</label>
				  	<input class="input" type="email" name="usuario_email" maxlength="70" >
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Clave</label>
				  	<input class="input" type="password" name="usuario_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Repetir clave</label>
				  	<input class="input" type="password" name="usuario_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
				<div class="file has-name is-boxed">
					<label class="file-label">
						<input class="file-input" type="file" name="usuario_foto" accept=".jpg, .png, .jpeg" >
						<span class="file-cta">
							<span class="file-label">
								Seleccione una foto
							</span>
						</span>
						<span class="file-name">JPG, JPEG, PNG. (MAX 5MB)</span>
					</label>
				</div>
		  	</div>
		</div>
		<p class="has-text-centered">
			<button type="reset" class="button is-link is-light is-rounded">Limpiar</button>
			<button type="submit" class="button is-info is-rounded">Guardar</button>
		</p>
	</form>
</div>

-->

<div class="container">

	<div class="main-container">
	
        <form class="conttent form-horizontal" class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/usuarioAjax.php" method="POST" autocomplete="off" enctype="multipart/form-data">
			<h2 class="title is-5 has-text-centered is-uppercase">Unete a la familia peluda!!</h2>
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="usuario_nombre" placeholder="Ingresa tu nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required >
                </div>
            </div>
			<div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Apellidos</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="usuario_apellido" placeholder="Ingresa apellidos" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required >
                </div>
            </div>
			<div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Usuario</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="usuario_usuario" placeholder="Ingresa apellidos" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
                </div>
            </div>
			<div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Correo</label>
                <div class="col-sm-10">
					<input class="form-control" type="email" name="usuario_email" maxlength="70" >
                </div>
            </div>
			<div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Clave</label>
                <div class="col-sm-10">
					<input class="form-control" type="password" name="usuario_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
                </div>
            </div>
			<div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Repita Clave</label>
                <div class="col-sm-10">
					<input class="form-control" type="password" name="usuario_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
                </div>
            </div>

            <!-- Agrega más campos aquí si es necesario -->
            <!-- Por ejemplo: apellidos, correo electrónico, contraseña, etc. -->
            <div class="form-group">
                <label for="foto" class="col-sm-2 control-label">Foto de perfil</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="foto" name="foto" accept=".jpg, .jpeg, .png">
                </div>
				<span class="file-name">JPG, JPEG, PNG. (MAX 5MB)</span>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-info btn-warning btn-block">Registrarse</button>
                </div>
            </div>
        </form>
    </div>
</div>