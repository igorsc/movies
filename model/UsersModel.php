<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MoviesModel
 *
 * @author Igor
 */
require './model/BancoDados.php';
class UsersModel extends BancoDados{
    //put your code here
   
    
    
    public function GetData() {
        try {
              $conn = new BancoDados();
               $conectar =$conn->Conectar();
              
              if ( $conectar==null) {
                   
                throw new Exception("Não foi possivel conectar ao banco de dados");
                
              }else {
        
                 $list=$conectar->query("Select * from users");
                 return $list; 
               
              }
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }

     
    }
    
    
      public function GetById($id) {
        
          try {
                $conn = new BancoDados();
                $conectar =$conn->Conectar();
              
              if ($conectar==null) {
                   
                throw new Exception("Não foi possivel conectar ao banco de dados");
                
              }else  {
                     
                  $query_id=$conectar->query("Select name,email From users Where id =$id ;");
                  return $query_id;
              }
              
          } catch (PDOException $exc) {
              echo $exc->getMessage();
          }

        
    }
    
    
     public function Insert($name,$email){
        try {
            
                 
              $conn = new BancoDados();
             $conectar =$conn->Conectar();
              
               if ($conectar ==null) {
                   
                throw new Exception("Não foi possivel conectar ao banco de dados");
                
               }else {
                                      
                      $conectar->query("Insert Into users (name,email) values('$name','$email');"); 
               } 
            
            
              
                    
                      
           
        } catch (PDOException $ex) {
            echo "Error:".$ex->getMessage();
        }
        
        
    }
    
    
    
    
     public function Update($id,$name,$email ){
       try { 
            
        
            $conn = new BancoDados();
            $conectar =$conn->Conectar();
            
            if ($conectar==null) {
                throw new Exception("Não foi possivel conectar ao banco de dados");
            }else {
                                
                $conectar->query("Update users Set name='$name', email='$email' Where id= '$id';");

            }
         
          
           
       } catch (PDOException $exc) {
           echo "Error:".$exc->getMessage();
        }

      
       
   }
   
   
     public function Delete($id) {
        
        try {
               $conn = new BancoDados();
               $conectar =$conn->Conectar();
              
              if ($conectar==null) {
                   
                throw new Exception("Não foi possivel conectar ao banco de dados");
                
              }else if ($id>0){
        
               
                 $conectar->query("Delete from users where Id='$id' ;");
                 echo "<div class='text-center'><label class='alert alert-success alert-dismissible fade in' role='alert'><h3>Deletado com sucesso!</h3></label></div>"; 
              
              }else {
                 echo "<div class='text-center'><label class='alert alert-danger alert-dismissible fade in' role='alert'><h3>Não foi possivel deletar!</h3></label></div>"; 
              }
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
        }
        
    }
    
    
//    public function GetSearch($title){
//         
//        try {
//               $conn = new BancoDados();
//               $conectar =$conn->Conectar();
//              
//              if ($conectar==null) {
//                   
//                throw new Exception("Não foi possivel conectar ao banco de dados");
//                
//              }else if ($title!=null){
//        
//               
//                 $conectar->query("Select * from movies where like '%$title%' ;");
//                 echo "<div class='text-center'><label class='alert alert-success alert-dismissible fade in' role='alert'><h3>Deletado com sucesso!</h3></label></div>"; 
//              
//              }else {
//                 echo "<div class='text-center'><label class='alert alert-danger alert-dismissible fade in' role='alert'><h3>Não foi possivel deletar!</h3></label></div>"; 
//              }
//        } catch (PDOException $exc) {
//            echo $exc->getTraceAsString();
//        }
//    }
    
  
    
}



