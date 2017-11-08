<?php

    class Movie
    {
        private $title = null;
        private $director = null;
        private $description = 'une description';
        private $duration = 120;
        
        public function __construct($title,$director,$description,$duration)
        {
            $this->title = $title;
            $this->director = $director;
            $this->description = $description;
            $this->duration = $duration;
        }
       
        public function getTitle()
        {
            return $this->title;
        }
        
        public function setTitle($title) 
        {
            $this->title = $name;                 
        }
        
        public function getDirector()
        {
            return $this->director;
        }
        
        public function setDirector($director) 
        {
            $this->director = $director;            
        }
        
        public function getDescription()
        {
            return $this->description;
        }
        
        public function setDescription($description) 
        {
            $this->description = $description;
        }
        
        public function getDuration()
        {
            return $this->duration;
        }
        
        public function setDuration($duration) 
        {
            $this->duration = $duration;
        }
       
        function display()
        {
            print 'Title : ' . $this->title . ' | Director: ' . $this->director . ' | Description: ' . $this->description . ' | Duration: ' . $this->duration;
        }
    }
    
    $movie = new Movie('La Guerre des Mondes','Steven Spielberg','Super film',120);
    
    $movie->display();
?>
