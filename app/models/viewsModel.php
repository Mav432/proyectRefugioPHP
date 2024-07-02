<?php
    namespace app\models;
    
    class viewsModel{

        protected function obtenerVistasModelo($vista){

            $listaBLanca=["dashboard","mascotas","home","register","donate"];

            if(in_array($vista,$listaBLanca)){
                if(is_file("./app/views/content/".$vista."-view.php")){
                    $contenido="./app/views/content/".$vista."-view.php";
                }else{
                    $contenido="404";
                }
            }elseif($vista=="login" || $vista=="index"){
                $contenido="login";
            }else{
                $contenido="404";
            }
            return $contenido;
        }
        
    }