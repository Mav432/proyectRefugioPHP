
<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/styless.css"/>

<?php
require_once "./app/views/inc/head.php";
require_once "./config/server.php";
use app\controllers\aboutcontroller;

$aboutController = new aboutcontroller();
$infoController = $aboutController->seleccionarinfoempresa();
?>


<div class="">
    <div class="conttendiv container">
            <div class="row justify-content-center">
                <div class="col-md">
                    <?php foreach ($infoController as $about): ?>
                        <div>
                            <div>
                                <h2>Mision</h2>
                                <p><?php echo $about['mision']; ?></p>
                                <h2>vision</h2>
                                <p><?php echo $about['vision']; ?></p>
                            </div> 
                        </div>
                        
                    <?php endforeach; ?>
                </div>
            </div>
    </div>
</div>
