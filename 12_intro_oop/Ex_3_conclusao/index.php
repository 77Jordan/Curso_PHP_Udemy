<?php 

    class Contact {
        public $name;
        public $email;
        public $phone;

        public function __construct($name, $email, $phone) {
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
        }

        public function getName() {
            return $this->name;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getPhone() {
            return $this->phone;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setPhone($phone) {
            $this->phone = $phone;
        }
     }

     $jordinho = new Contact("Jordinho", "jordangaldino@gmail.com", "21 987616643");

     echo $jordinho->name;
     echo "<br>";
     echo $jordinho->email;
     echo "<br>";
     echo $jordinho->phone;
     $jordinho->setEmail("jordangaldino159@gmail.com");
     echo "<br>";
     echo $jordinho->email
     
?>