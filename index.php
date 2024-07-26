
<?php 
   //Configuración de la aplicación
   require_once "./config/app.php";
   require_once "./autoload.php";
   require_once "./app/views/inc/session_start.php";
   if (isset($_GET['views'])) {
      $url = explode("/",$_GET['views']);
   }
   else
   { $url = ['dashboard'];    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <?php 
    require_once "./app/views/inc/head.php"
   ?>
</head>
<body>
   <?php 
     // Se importa el namespace y las clases al ámbito actual (index) 
     use app\controllers\viewsController;
     //Se instancia la clase
     $viewsController = new viewsController();
     //Definir variable vista para identificar cual modelo se va a cargar, por default login
     $vista = $viewsController->obtenerVistasControlador($url[0]);
     
     if( $vista == "404") {
        require_once "./app/views/content/".$vista."-view.php";
     }
     else {
      if ($vista == "./app/views/content/admindashboard-view.php" || $vista == "./app/views/content/crudslider-view.php" || $vista == "./app/views/content/crudmascotas-view.php" || $vista == "./app/views/content/cruddonate-view.php")
              require_once "./app/views/inc/adminnavbar.php";
      else
               require_once "./app/views/inc/navbar.php";

      require_once $vista;

     }
     require_once "./app/views/inc/script.php";
   ?>  
</body>
</html>