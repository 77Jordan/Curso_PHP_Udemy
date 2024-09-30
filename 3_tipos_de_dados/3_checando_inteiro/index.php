<?php 
    if (is_int(5)){ // TRUE

        echo"é um inteiro<br>";
    }

    if (is_int("NÃO É UM INTEIRO<br>")){ // FALSE (NÃO VAI RODAR O IF PORQUE É FALSO)
        
        echo"é um inteiro";
    }


        $MEUOVO = 10;
    if (is_int($MEUOVO)){ // TRUE
        
        echo"é um inteiro<br>";
    }

?>