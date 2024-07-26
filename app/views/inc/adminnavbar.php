<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/styless.css"/>

<nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand me-auto" href="<?php echo APP_URL; ?>dashboard/">
          <p> Refugio mascotas </p>
        </a>
        <div
          class="offcanvas offcanvas-end"
          tabindex="-1"
          id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
              
              </li>
              <!--
              <li class="nav-item">
                 
                <a class="nav-link mx-lg-2" href="<?php echo APP_URL."CerrarSesion/"; ?>" id="btn_exit" >SALIR</a>
              </li>
              -->
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="<?php echo APP_URL; ?>admindashboard/">Inicio</a>
              </li>
               <li class="nav-item">
                <a class="nav-link mx-lg-2" href="<?php echo APP_URL; ?>crudmascotas/">CRUDMascotas</a>
              </li>
               <li class="nav-item">
                <a class="nav-link mx-lg-2" href="<?php echo APP_URL; ?>crudslider/">CRUDslider</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="<?php echo APP_URL; ?>cruddonate/">CRUDdonacion</a>
              </li>
             
            </ul>
          </div>
        </div>
        <!--
        <p class="nav-link mb-0"><?php if(isset($_SESSION['usuario'])) echo $_SESSION['usuario']; ?></p>
        <a href="<?php echo APP_URL; ?>run/" class="login-button"><img src="<?php echo APP_URL; ?>app/views/img/Carrote.png" alt="carrito" class="carrito"
        /></a> -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>