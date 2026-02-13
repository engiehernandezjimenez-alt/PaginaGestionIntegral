<?php

function convertir_estatus($p=null){
    if($p=="1"){
        $respuesta="activo";
    }else{
        $respuesta="desactivo";
    }
    return $respuesta;

    }
    
?>
