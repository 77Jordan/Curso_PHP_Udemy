<?php 
    function pessoa($nome, $idade, $genero) {

        if (is_string($nome) && is_int($idade) && is_string($genero)) {

            echo "Olá, sou $genero $nome e tenho $idade anos <br>";

        } else {

            echo "Digite nome ou idade válido";

        }

    } 
    pessoa("Jordinho", 23, "o");


?>