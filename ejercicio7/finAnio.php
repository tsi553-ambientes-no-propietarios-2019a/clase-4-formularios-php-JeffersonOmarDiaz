<?php 
$diasFaltantesFinY=0;
$diasAnio=365;

$numero=rand(1,$diasAnio);

if($numero>=1 && $numero<=31){
$diasFaltantesFinY=$diasAnio-$numero;
echo 'El día '.$numero."pertenece al mes de Enero, faltan ".$diasFaltantesFinY." dias para que acabe el año".'<br>';
}elseif($numero>=32 && $numero<=59){
$diasFaltantesFinY=$diasAnio-$numero;
echo 'El día '.$numero." pertenece al mes Febrero, faltan ".$diasFaltantesFinY." dias para que acabe el año".'<br>';
}elseif($numero>=60 && $numero<=90){
$diasFaltantesFinY=$diasAnio-$numero;
echo 'El día '.$numero." pertenece al mes de Marzo, faltan ".$diasFaltantesFinY." dias para que acabe el año".'<br>';
}elseif($numero>=91 && $numero<=120){
$diasFaltantesFinY=$diasAnio-$numero;
echo 'El día '.$numero." pertenece al mes de Abril, faltan ".$diasFaltantesFinY." dias para que acabe el año".'<br>';
}elseif($numero>=121 && $numero<=151){
$diasFaltantesFinY=$diasAnio-$numero;
echo 'El día '.$numero." pertenece al mes de Mayo, faltan ".$diasFaltantesFinY." dias para que acabe el año".'<br>';
}elseif($numero>=151 && $numero<=181){
$diasFaltantesFinY=$diasAnio-$numero;
echo 'El día '.$numero." pertenece al mes de Junio, faltan ".$diasFaltantesFinY." dias para que acabe el año".'<br>';
}elseif($numero>=182 && $numero<=212){
$diasFaltantesFinY=$diasAnio-$numero;
echo 'El día '.$numero." pertenece al mes de Julio, faltan ".$diasFaltantesFinY." dias para que acabe el año".'<br>';
}elseif($numero>=213 && $numero<=243){
$diasFaltantesFinY=$diasAnio-$numero;
echo 'El día '.$numero." pertenece al mes de Agosto, faltan ".$diasFaltantesFinY." dias para que acabe el año".'<br>';
}elseif($numero>=244 && $numero<=273){
$diasFaltantesFinY=$diasAnio-$numero;
echo 'El día '.$numero." pertenece al mes de Septiembre, faltan ".$diasFaltantesFinY." dias para que acabe el año".'<br>';
}elseif($numero>=274 && $numero<=304){
$diasFaltantesFinY=$diasAnio-$numero;
echo 'El día '.$numero." pertenece al mes de Octubre, faltan ".$diasFaltantesFinY." dias para que acabe el año".'<br>';
}elseif($numero>=305 && $numero<=334){
$diasFaltantesFinY=$diasAnio-$numero;
echo 'El día '.$numero." pertenece al mes de Noviembre, faltan ".$diasFaltantesFinY." dias para que acabe el año".'<br>';
}elseif($numero>=335 && $numero<=365){
$diasFaltantesFinY=$diasAnio-$numero;
echo 'El día '.$numero." pertenece al mes de Diciembre, faltan ".$diasFaltantesFinY." dias para que acabe el año".'<br>';
if($diasFaltantesFinY<5){
	echo 'Falta poco para el año nuevo'.'<br>';
}
}
?>  