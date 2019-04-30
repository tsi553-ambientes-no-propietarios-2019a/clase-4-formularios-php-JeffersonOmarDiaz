<?php
$nombre='';
$clave='';

$nombreIngresado="";
$claveIngresada='';

$usuarios = array('Omar'=>'6194', 'Juan'=>'contrasena_segura', 'Carla'=>'media', 'Johanna'=>'1234');


if(!empty($nombre)&&!empty($clave)){
    echo 'Llene todos los campos';
    exit;
}
$nombreIngresado = $_POST['nombre'];
$claveIngresada = $_POST['pass'];

foreach ($usuarios as $nombre => $clave) {
    if($nombreIngresado==$nombre && $claveIngresada==$clave){
        include('bienvenido.php');
        exit (0);
    }else{
        echo "La clave o la contraseña no coinciden";
        //exit (0);
    }
}


?>