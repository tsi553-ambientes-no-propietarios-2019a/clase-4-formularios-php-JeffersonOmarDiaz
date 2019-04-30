<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$clave2=$_POST['clave2'];

if($clave==$clave2){
    header('Location: RegistroCorrecto.php');
}else{
    echo"<script type=\"text/javascript\">alert('Usted esta siendo redireccionado a la pagina principal'); 
    window.location='index.php';</script>";
}

?>