<?php
    $Nombre = ["Pedro","Manuel","Julian","Alvaro"];
    
    echo "<table border = '2px'>";
    echo "<tr><th> Nombre </tr></th>";


    foreach ($Nombre as $N ){

        echo "<tr><th>" . $N . "</tr></th>";
    }


echo "</table>";

?>