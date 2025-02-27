<?php 

    class Task {

        private $title;
        private $description;
        private $completed;
        
        public function __construct($title, $description, $completed = false) {
            $this->title = $title;
            $this->description = $description;
            $this->completed = $completed; 
        }

        public function markAsCompleted() {
            $this->completed = true;
        }

        public function markAsIncomplete() {
             $this->completed = false;
         }
         public function getTitle() {
            return $this->title;
         }

         public function getDescription() {
            return $this->description;
         }

         public function isCompleted() {
            return $this->completed;
         }
         
    }

    $tarefa = new Task("teste", "descrição", false);

    echo $tarefa->getTitle();
    echo "<br>";
    echo $tarefa->getDescription();
    echo "<br>";
    echo "Está concluida? " . ($tarefa->isCompleted() ? "Sim" : "Não");
    $tarefa->markAsIncomplete();
    echo "Está concluida? " . ($tarefa->isCompleted() ? "Sim" : "Não");
    echo "<br>";
    $tarefa->markAsCompleted();
    echo "Está concluida? " . ($tarefa->isCompleted() ? "Sim" : "Não");
?>