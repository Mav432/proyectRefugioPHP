<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">
            <img src="<?php echo APP_URL; ?>app/views/img/log.jpg" class="log" alt="Pet Shelter">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarExampleTransparentExample" aria-controls="navbarExampleTransparentExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarExampleTransparentExample">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo APP_URL; ?>/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo APP_URL; ?>login/">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo APP_URL; ?>/register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" href="<?php echo APP_URL; ?>/donate">Donate</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
