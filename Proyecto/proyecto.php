<?php
 #fopen funcion para trabajar con ficheros
 # Se puede leer y escribir
 # tiene 2 parmetros la ruta del fichero (Si es W es \)
 # segundo es la forma de abrirlo r--> leer w--> escribir
 # $fichero es una variable que en programación se denomina handler
 # es una varianle donde apunta/almacena/guarda al fichero abierto
 # Exclamacion ! sigfnifica NOT
 # feof Final de fichero

/*$fichero = fopen("C:\\xampp\\apache\\logs\\error.log", "r");
while (!feof($fichero)){
    $linea = fgets($fichero);
    echo $linea;
    echo "<br>";
}
#Cerar el fichero
fclose($fichero);
*/

/*#Ejecuta un comando en PHP
$salida = shell_exec('dir');
echo "<pre>$salida</pre>";
*/


$mystring = 'abc';
$findme = 'c';
$pos = strpos($mystring, $findme);

if($pos == true ){
    echo "La  cadena $findme no fue encontrada en la cadena $mystring";
    echo " y existe en la $pos";
}
?>