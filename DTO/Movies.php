<?php

class Movies{
    public $Id;
    public $Title;
    public $Genres;
    
    
    function getId() {
        return $this->Id;
    }

    function getTitle() {
        return $this->Title;
    }

    function getGenres() {
        return $this->Genres;
    }

    function setId($Id) {
        $this->Id = $Id;
    }

    function setTitle($Title) {
        $this->Title = $Title;
    }

    function setGenres($Genres) {
        $this->Genres = $Genres;
    }


    
    

}
