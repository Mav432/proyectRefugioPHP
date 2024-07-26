
<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/style.css"/>

<?php
require_once "./app/views/inc/head.php";
require_once "./config/server.php";
use app\controllers\slidercontroller;

$sliderController = new slidercontroller();
$imagenesSlider = $sliderController->seleccionarImgSlider();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bulma</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bulma.min.css">
    
    
    <style>    
       table.dataTable thead, table.dataTable tfoot {
           background-color: hsl(171, 100%, 41%);                  
       }
       .table thead th, .table tfoot th{ 
           color: hsl(0, 0%, 96%);
        }
        
        .navbar {
        background-color: #a17300;
        margin: 8px;
        border-radius: 20px;
        display: flex;
        font-size: 5px;
        }
    </style>
    
  </head>
  <body>
  
<div class="container is-fullhd">

<article class="tile is-child notification is-info">
   <p class="title">CRUD de slider</p>
</article>
<table id="example" class="table is-striped is-hoverable" style="width:100%">
    <thead>
    
        <tr >
            <th>Id</th>
            <th>Imagen</th>
            <th>Texto alternativo</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    
    </thead>
    <tbody>
    <?php foreach ($imagenesSlider as $imagen): {?>
        <tr>
            <td><?php echo $imagen['slider_id']?></td>
            <td><img width="380px" height="380px" src="<?php echo $imagen['slider_url']?>"></td>
            <td><?php echo $imagen['slider_alt']?></td>
            <td><?php echo $imagen['status']?></td>
            <td>Editar | Eliminar</td>
        </tr>
    <?php } endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <th>Id</th>
            <th>Imagen</th>
            <th>Texto alternativo</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </tfoot>
</table>


</div>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bulma.min.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable({
        lengthMenu: [[2,4,8,10],[2,4,8,10]],
        
    })
        
} );
</script>

  </body>
</html>