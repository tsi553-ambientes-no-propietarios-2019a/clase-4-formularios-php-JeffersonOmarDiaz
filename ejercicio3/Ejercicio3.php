    
<?php
/**
 * Crear un arreglo asociativo que almacene las claves de acceso de 5 
 * usuarios de un sistema. Acceder a cada componente por su nombre.
 El arreglo debe tener el formato
 [
    'juan' => 'contrasena_segura'
 ]
 Crear un formulario que permita ingresar el nombre de usuario y la contraseña. 
 Al enviar el formulario se debe validar que la combinación de nombre de usuario 
 y contraseña existan en el arreglo.
 Si los datos no son correctos imprimir un mensaje de error.
 Si los datos son correctos debe redirigir a otra página bienvenido.php que debe 
 imprimir el mensaje "Bienvendo JUAN". (con el nombre de usuario en mayúsculas)
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ejercicio 3</title>
</head>
<body>

<?php
$usuarios = array('Omar'=>'6194', 'Juan'=>'contrasena_segura', 'Carla'=>'media', 'Johanna'=>'1234');
 ?>   


<form name="formulario" method="post" action="ejemploPost.php">
<div>
<label>Nombre: </label>
<input type="text" id = "userId"name="nombre" required="required">
</div>
<div>
<label>Pasword: </label>
<input type= "password" name="pass" required="required">
</div>
<div>
<button name="guardar" >Guardar</button>
</div>
</form>

<?php
$nombre='';
$clave='';
     include('ejemploPost.php');
     if(!empty($nombre)&&!empty($clave)){
         exit(0);
     }

     
$nombre = $_POST['nombre'];
$clave = $_POST['pass'];
     ?>
</body>
</html>
