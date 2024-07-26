

<div class="container">
        <div class=" main-container">
            <form class="conttent box login" action="" method="POST" autocomplete="off">
                <h2 class="title is-5 has-text-centered is-uppercase">Iniciar Sesión</h2>
                <div class="form-group">
                    <label for="login_usuario">Usuario</label>
                    <input type="text" class="form-control" id="login_usuario" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required>
                </div>
                <div class="form-group">
                    <label for="login_clave">Clave</label>
                    <input type="password" class="form-control" id="login_clave" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
                </div>
                <p class="has-text-centered mb-4 mt-3">
                    <button type="submit" class="btn btn-info btn-warning btn-block">Iniciar sesión</button>
                </p>
            </form>
        </div>
</div>