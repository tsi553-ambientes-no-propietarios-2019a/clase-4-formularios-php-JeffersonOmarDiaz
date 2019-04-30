<?php

/**
 * Problema Propuesto:
 * Desarrollar un formulario que simule el registro de un usuario (archivo index.php). 
 * El formulario debe solicitar el nombre de usuario y la clave en dos oportunidades. 
 * El formulario debe ser procesado por el archivo validarRegistro.php. Este archivo
 * debe implementar una función que permita validar si las dos contraseñas coinciden. 
 * Si las contraseñas coinciden, se debe redirigir al archivo "registroCorrecto.php"
 * Si las contraseñas no coinciden, se debe redirigir al index.php y mostrar el mensaje
 * "Las contrseñas no coinciden".
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejercicio 4</title>
</head>
<body>
<form name="formulario" method="post" action="validarRegistro.php">
<div>
<label>Nombre: </label>
<input type="text" name="usuario" required="required">
</div>
<div>
<label>Clave: </label>
<input type= "password" name ="clave" required="required">
</div>
<div>
<label>Confirmar clave: </label>
<input type ="password" name = "clave2" required = "required">
</div>
<div>
<button name="guardar" >Guardar</button>
</div>
</form>
    
</body>
</html>