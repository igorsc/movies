<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MoviesController
 *
 * @author Igor
 */


require './model/UsersModel.php';

class UsersController extends UsersModel {
    //put your code here
   
    public function GetData(){
        $model = new UsersModel();
        return $model->GetData();
    }
    
    public function GetById($id){
        $model = new UsersModel();
        return $model->GetById($id);
    }
    
    public function  Salvar($id,$name,$email){
       $model = new UsersModel();
       if ($id>0){
          return $model->Update($id, $name, $email);
       }else {

         return $model->Insert($name,$email);
       }
    }
    
    
    public function  Delete($id){
       $model = new UsersModel();
       $model->Delete($id);
      
    }
    
    
//    public function GetSearch($title){
//        $model=new MoviesModel();
//        $model->GetSearch($title);
//    }

}
