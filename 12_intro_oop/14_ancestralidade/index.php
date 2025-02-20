<?php 

    class Humano {


    }

    class Animal {


    }

    class Professor extends Humano {

    }

    $Jordinho = new Humano;

    $cachorro = new Animal;

    $tenalmeida = new Professor;

    if($Jordinho instanceof Humano) {
        echo "Jordinho É um humano <br>";
    } else {
        echo "Jordinho NÃO É UM HUMANO! <br>";
    }

    if($cachorro instanceof Humano) {
        echo "cachorro É um humano <br>";
    } else {
        echo "cachorro NÃO É UM HUMANO! <br>";
    }

    if($tenalmeida instanceof Professor) {
        echo "TenAlmeida É um professor <br>";
    } else {
        echo "TenAlmeida NÃO É UM professor! <br>";
    }

    if($tenalmeida instanceof Humano) {
        echo "TenAlmeida É um humano <br>";
    } else {
        echo "TenAlmeida NÃO É UM HUMANO! <br>";
    }

    if($cachorro instanceof Professor) {
        echo "cachorro É um professor <br>";
    } else {
        echo "cachorro NÃO É UM professor! <br>";
    }
?>