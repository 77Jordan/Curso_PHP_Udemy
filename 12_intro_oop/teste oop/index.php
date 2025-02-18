<?php 

class Human {

    public $eye;
    public $arm;
    public $leg;

    function setEye($pEye) {
        $this->eye = $pEye;    
    }
    function getEye() {
        return $this->eye;
    }

    function setArm($pArm) {
        $this->arm = $pArm;
    }
    function getArm() {
        return $this->arm;
    }

    function setLeg($pLeg) {
        $this->leg = $pLeg;
    }
    function getLeg() {
        return $this->leg;
    }
}

    $jordinho = new Human;

    $jordinho->setEye(1);
    $jordinho->setArm(1);
    $jordinho->setLeg(1);

    echo $jordinho->getEye() . "<br>";
    echo $jordinho->getArm() . "<br>";
    echo $jordinho->getLeg() . "<br>";

    class Gente {

        public $olho;
        public $braco;
        public $perna;

        function andar() {
            echo "Andando <br>";
        }
    }
        $jordan = new Gente;

        $jordan->olho = 2;
        $jordan->braco = 2;
        $jordan->perna = 2;

        echo "<br><br>";

        echo $jordan->olho ."<br>" . $jordan->braco ."<br>" . $jordan->perna;

        class Pessoa {

            public const OLHOS = 3;
            public  const BRACOS = 3;
            public  const PERNAS = 3;

            function mostrarConstante() {

                echo self::BRACOS . "<br>";

            }

        }

        $jordi = new Pessoa;

        echo "<br><br>";

        echo $jordi::OLHOS . "<br>";

        $jordi->mostrarConstante();
        
        echo $jordi::PERNAS . "<br>";
?>