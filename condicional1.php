<?php
//condicional if
$var1 = 12;
$var2 = 20;
if($var1==$var2){
    echo "Ambos valores son iguales";
}else if($var1>$var2){
    echo "Variable 1 es mayor";
}else{
    echo "Variable 2 es mayor";
}
echo "<br>";
//condicional while
$var3 = 2;
while($var3<10){
    echo "El valor es: ".$var3."<br>";

    $var3++;
}
echo "------------"."<br>";
//do-while
$var4 = 1;
do{
    
    echo "El valor es: ".$var4."<br>";
    $var4++;
}while($var4<10);

//for

for($i=0;$i<10;$i++){
    echo "Valor: ".$i."<br>";
}

//array simple

$carrerasincos = array("Sistemas Informaticos","Mercadotecnia","Secretariado","Contaduria");
//echo "Valores del arreglo: ".$carrerasincos[0];

for($j=0;$j<count($carrerasincos);$j++){
    echo "Carrera: ".$carrerasincos[$j]."<br>";
}

//array asociativo

$estudiantes = array("Jose"=>20,"Pedro"=>18,"Lucia"=>19,"Maria"=>25);

?>