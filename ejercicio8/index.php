<?php
/*
- Escribir código PHP que inicialice un arreglo con los números del 1 al 365. 
Determine a que mes pertenece cada día del año (suponiendo un año no bisiesto) 
y muestre por pantalla la lista con el mes como encabezado seguido de la 
lista de los días que pertenecen a ese mes. 
- Utilizar HTML y CSS para dar estilo a la lista. Cada mes debe mostrarse 
de diferente color junto con la lista de días. Los meses deben aparecer con 
negrita. Pista: se puede utilizar elementos ul y li para mostrar la lista.

*/?>

<!DOCTYPE html>
<html>

    <head>
        <link rel = "stylesheet" href="estilo.css">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    </head>
    
    <body>
        <h1>
        <form class="form-inline" action="diasAnioBisiesto.php" method ="post">
  <div class="form-group mb-2">
    <label for="staticEmail2" class="sr-only">Ingrese un número entre 1 y 366</label>
    <input type="text" class="entradasText" name ="numeroIng" required="required">
  </div>
  <div>
  <button type="submit" class="btn btn-primary mb-2">Aceptar</button>
  </div>
</form>
    </body>

</html>