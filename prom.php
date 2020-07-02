<?php

extract($_POST);
$matricula= $_POST['matricula'];
$semestre= $_POST['semestre'];
$promedio= $_POST['promedio'];

if($semestre >=6 and $promedio >=8.8 ){
    echo "<br>Felicidades puedes entrar a: Economia <br> Tu matricula es: ".$matricula."<br>";
}
if($semestre >6 and $promedio >8.5 ){
    echo "<br><br>Felicidades puedes entrar a: Computacion <br> Tu matricula es: ".$matricula."<br> ";
}
if($semestre >5 and $promedio >8.5 ){
    echo "<br><br>Felicidades puedes entrar a: Administracion  <br> Tu matricula es: ".$matricula."<br>";
}
if($semestre >5 and $promedio >8.5 ){
    echo "<br><br>Felicidades puedes entrar a: Contabilidad  <br> Tu matricula es: ".$matricula."<br>";
}
else{
    echo "NO haz sido aceptado porque tu promedio es: ".$promedio;
}
return;

?>