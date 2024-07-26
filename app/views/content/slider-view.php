<?php
require_once "./app/views/inc/head.php";
require_once "./config/server.php";
use app\controllers\slidercontroller;

$sliderController = new slidercontroller();
$imagenesSlider = $sliderController->seleccionarImgSlider();
?>
<section class="middle">
            
        <div class="slider-frame">
            <ul>
            <?php foreach ($imagenesSlider as $imagen): {?>
            <li> <img width="380px" height="380px" src="<?php echo $imagen['slider_url']?>"> </li>
            <?php } endforeach; ?>
            <!--
            <li><img src="<?php echo APP_URL?>app/views/img/slide1.png" alt="Slide 1"></li>
            <li><img src="<?php echo APP_URL?>app/views/img/slide2.jpg" alt="Slide 2"></li>
            <li><img src="<?php echo APP_URL?>app/views/img/perro.webp" alt="Slide 3"></li>
            <li><img src="<?php echo APP_URL?>/app/views/img/slide4.jpg" alt="Slide 4"></li>
            </ul> -->
        </div>
</section>