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


require './model/MoviesModel.php';

class MoviesController extends MoviesModel {
    //put your code here
   
    public function GetData(){
        $model = new MoviesModel();
        return $model->GetData();
    }
    
    public function GetById($id){
        $model = new MoviesModel();
        return $model->GetById($id);
    }
    
    public function  Salvar($id,$title,$genres){
       $model = new MoviesModel();
       if ($id>0){
          return $model->Update($id, $title, $genres);
       }else {

         return $model->Insert($title,$genres);
       }
    }
    
    
    public function  Delete($id){
       $model = new MoviesModel();
       $model->Delete($id);
      
    }
    
    
//    public function GetSearch($title){
//        $model=new MoviesModel();
//        $model->GetSearch($title);
//    }

}
