<?php
    class Category
    {
        public $id;
        public $name;
        public function __construct($id, $name)
        {
            $this->id = $id;
            $this->name = $name;
        }
        
        public function getId() {
            return $this->id;
        }
    
        // Setter cho $id
        public function setId($id) {
            $this->id = $id;
        }
    
        // Getter cho $name
        public function getName() {
            return $this->name;
        }
    
        // Setter cho $name
        public function setName($name) {
            $this->name = $name;
        }
    }
    
    
    