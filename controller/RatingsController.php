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


require './model/RatingsModel.php';

class RatingsController extends RatingsModel {
    //put your code here
   
    public function GetData(){
        $model = new RatingsModel();
        return $model->GetData();
    }
    
     public function GetDataMovies() {
      
          $model = new RatingsModel();
         return $model->GetDataMovies();
     
    } 
    
    public function GetDataUsers() {
      
          $model = new RatingsModel();
         return $model->GetDataUsers();
     
    } 
    
    
    
      public function Salvar($id,$movieId,$score,$timestamp,$userId,$ip ){
         $model = new RatingsModel();
   
         if ($id>0){
            
		     return $model->Update($id, $movieId, $score, $timestamp, $userId, $ip);
          
         }else {

             return $model->Insert($movieId, $score, $timestamp, $userId, $ip);
         }   
   
      }
   
  
    
    
     public function Delete($id) {
        
         $model = new RatingsModel();
        return $model->Delete($id);
        
    }
	
	
	 public function getByMovie($ratingsId){
	   
					 
		$model= new RatingsModel();
		return $model->getByMovie($ratingsId);
	}
	
	 public function getByUser($ratingsId){
	   
					 
		$model= new RatingsModel();
		return $model->getByUser($ratingsId);
	}
	
    
    
     
    
    
    
    
   
   
   
     
    
  

}
