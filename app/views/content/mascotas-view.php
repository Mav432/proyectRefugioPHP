<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/styless.css"/>

<?php
require_once "./app/views/inc/head.php";
require_once "./config/server.php";
use app\controllers\petsController;

$petsController = new petsController();
$petscontroller = $petsController->seleccionarmascotas();
?>


<div class="container">
    <div class="row">
        <?php foreach ($petscontroller as $pets): ?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="<?php echo $pets['url_img']?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $pets['nombre']; ?></h5>
                    <p class="card-text"><?php echo $pets['descripcion']; ?></p>
                    <a href="#" class="btn btn-warning">¡Adóptame!</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
