<?php

    $cuadro = $_POST["cuadro"];

    for($i=0; $i<count($cuadro); $i++){
        echo $cuadro[$i].",";
        if($cuadro[$i] != "X" && $cuadro[$i] != "O"){
            echo "<h2> Solo se permiten X y/o O </h2>";
            return;
        }
    }
/*
    [0][1][2]
    [3][4][5]
    [6][7][8]
*/

    if($cuadro[0] == "X" && $cuadro[1] == "X" && $cuadro[2] == "X"){
        echo "<h1> Ganador X </h1>";
        return;
    } else if($cuadro[0] == "o" && $cuadro[1] == "o" && $cuadro[2] == "o"){
        echo "<h1> Ganador O </h1>";
        return;
    }
    if($cuadro[3] == "X" && $cuadro[4] == "X" && $cuadro[5] == "X"){
        echo "<h1> Ganador X </h1>";
        return;
    } else if($cuadro[3] == "o" && $cuadro[4] == "o" && $cuadro[5] == "o"){
        echo "<h1> Ganador O </h1>";
        return;
    }
    if($cuadro[6] == "X" && $cuadro[7] == "X" && $cuadro[8] == "X"){
        echo "<h1> Ganador X </h1>";
        return;
    } else if($cuadro[6] == "o" && $cuadro[7] == "o" && $cuadro[8] == "o"){
        echo "<h1> Ganador O </h1>";
        return;
    }

?>