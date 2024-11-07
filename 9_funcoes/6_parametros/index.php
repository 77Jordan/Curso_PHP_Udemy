<?php 

echo "FUNÇÃO COM PARÂMETRO <br>";
    function velmax($vel) {

        echo "O carro atinge a velocidade máxima de $vel Km/h <br>";

    }

    velmax(200);
    velmax(300);
    velmax(400);

    echo "<br><br><br>";

    echo "FUNÇÃO SEM PARÂMETRO <br>";
    function velmais() {

        $velo = 200;
        $velo2 = 300;
        $velo3 = 400;

        echo "O carro atinge a velocidade máxima de $velo Km/h <br>";
        echo "O carro atinge a velocidade máxima de $velo2 Km/h <br>";
        echo "O carro atinge a velocidade máxima de $velo3 Km/h <br>";

    }

    velmais();

    echo "<br><br>";

    echo "Velocidade com variável local declarada<br>";

    $velocidade = 150;

    velmax($velocidade);

    echo "<br><br>";

    echo "FUNÇÃO COM DOIS PARÂMETROS <br>";
    function pet($nome, $raca) {

        if (is_string($nome) && is_string($raca)) {

            echo "O $nome é da raça $raca <br>";
        } 
        else {

            echo "Digite nome ou raça válido";

        }
    }
    pet("Jordinho", "Pitbull");

?>