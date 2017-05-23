<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of users
 *
 * @author Igor
 */
class Users {
    //put your code here
    public $Id;
    public $Name;
    public $Email;
    
    
    function getId() {
        return $this->Id;
    }

    function getName() {
        return $this->Name;
    }

    function getEmail() {
        return $this->Email;
    }

    function setId($Id) {
        $this->Id = $Id;
    }

    function setName($Name) {
        $this->Name = $Name;
    }

    function setEmail($Email) {
        $this->Email = $Email;
    }


}
