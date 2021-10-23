<?php


for ($counter= 0; $counter < 10; $counter++){

    echo $counter; 
}


 
for (;;){
    echo "infinito";
}





for ($counter= 0; $counter < 10; $counter= $counter +2){

    echo $counter; 
}


function suma ($num1, $num2){
    return $num1 + $num2 ;

}

$total = suma(1,2);
echo $total



function concatenar ($palabra1, $palabra2){
    return $palabra1.$palabra2; 
}
echo concatenar ("hola", " Julian");

?>