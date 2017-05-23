<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ratings
 *
 * @author Igor
 */
class Ratings{
    //put your code here
    public $Id;
    public $MovieId;
    public $Score;
    public $TimeStamp;
    public $UserId;
    public $Ip;
    
    
    function getMovieId() {
        return $this->MovieId;
    }

    function getScore() {
        return $this->Score;
    }

    function getTimeStamp() {
        return $this->TimeStamp;
    }

    function getUserId() {
        return $this->UserId;
    }

    function getIp() {
        return $this->Ip;
    }

    function setMovieId($MovieId) {
        $this->MovieId = $MovieId;
    }

    function setScore($Score) {
        $this->Score = $Score;
    }

    function setTimeStamp($TimeStamp) {
        $this->TimeStamp = $TimeStamp;
    }

    function setUserId($UserId) {
        $this->UserId = $UserId;
    }

    function setIp($Ip) {
        $this->Ip = $Ip;
    }


    
    
   


    
}
