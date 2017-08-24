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
class RatingsModel extends BancoDados{
    //put your code here
   
    
    
    public function GetData() {
        try {
              $conn = new BancoDados();
               $conectar =$conn->Conectar();
              
              if ( $conectar==null) {
                   
                throw new Exception("Não foi possivel conectar ao banco de dados");
                
              }else {
        
                 $list=$conectar->query("select * from ratings r 
                                            inner join movies  m on r.movie=m.id 
                                            inner join users  u on r.user=u.id
                                            order by  m.title asc;");
                 return $list; 
               
              }
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }

     
    }
    
    
    
     public function GetDataMovies() {
        try {
              $conn = new BancoDados();
               $conectar =$conn->Conectar();
              
              if ( $conectar==null) {
                   
                throw new Exception("Não foi possivel conectar ao banco de dados");
                
              }else {
        
                 //$list=$conectar->query("select m.id, m.title from ratings r 
                   //                         inner join movies m on r.movie = m.id;");
                 
                 
                 
                   $list=$conectar->query("select * from movies");
                  
                  return $list; 
               
              }
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }

     
    }
    
    
    
     public function GetDataUsers() {
        try {
              $conn = new BancoDados();
               $conectar =$conn->Conectar();
              
              if ( $conectar==null) {
                   
                throw new Exception("Não foi possivel conectar ao banco de dados");
                
              }else {
        
                 //$list=$conectar->query( "select u.id, u.name  from ratings r 
                                            //inner join users u on r.user = u.id;");
                  
                   $list=$conectar->query( "select * from users;");
                 return $list; 
               
              }
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }

     
    }
    
   
    
    
    
    
    
    
    
    
    
    
      public function Update($id,$movieId,$score,$timestamp,$userId,$ip ){
       try { 
            
        
            $conn = new BancoDados();
            $conectar =$conn->Conectar();
            
            if ($conectar==null) {
                throw new Exception("Não foi possivel conectar ao banco de dados");
            }else {
                                
                $conectar->query("Update ratings Set movie='$movieId',score='$score',timestamp='$timestamp',user='$userId',ip='$ip'
                        Where id= '$id';");

            }
         
          
           
       } catch (PDOException $exc) {
           echo "Error:".$exc->getMessage();
        }

      
       
   }
   
    public function Insert($movieId,$score,$timestamp,$userId,$ip ){
        try {
            
                 
              $conn = new BancoDados();
             $conectar =$conn->Conectar();
              
               if ($conectar ==null) {
                   
                throw new Exception("Não foi possivel conectar ao banco de dados");
                
               }else {
                                      
                      $conectar->query("Insert Into ratings (movie,score,timestamp,user,ip)  values('$movieId','$score','$timestamp','$userId','$ip');"); 
               } 
            
            
              
                    
                      
           
        } catch (PDOException $ex) {
            echo "Error:".$ex->getMessage();
        }
        
        
    }
    
    
     public function Delete($id) {
        
        try {
               $conn = new BancoDados();
               $conectar =$conn->Conectar();
              
              if ($conectar==null) {
                   
                throw new Exception("Não foi possivel conectar ao banco de dados");
                
              }else if ($id>0){
        
               
                 $conectar->query("Delete from ratings where Id='$id' ;");
                 echo "<div class='text-center'><label class='alert alert-success alert-dismissible fade in' role='alert'><h3>Deletado com sucesso!</h3></label></div>"; 
              
              }else {
                 echo "<div class='text-center'><label class='alert alert-danger alert-dismissible fade in' role='alert'><h3>Não foi possivel deletar!</h3></label></div>"; 
              }
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
        }
        
    }
    
    
     
    
    
    
    public function getByMovie($ratingsId){
	   try {
				$conn = new BancoDados();
				 $conectar =$conn->Conectar();
				
				if ( $conectar==null) {
					 
				  throw new Exception("Não foi possivel conectar ao banco de dados");
				  
				}else {
		  
				   $list=$conectar->query( "select m.title  from ratings r 
											  inner join movies m on r.movie = m.id
											  where r.id=$ratingsId;");
					
					 
				   return $list; 
				 
				}
		  } catch (PDOException $exc) {
			  echo $exc->getMessage();
		  }
	}
	
	   
   
   
     
     public function getByUser($ratingsId){
	   try {
				$conn = new BancoDados();
				 $conectar =$conn->Conectar();
				
				if ( $conectar==null) {
					 
				  throw new Exception("Não foi possivel conectar ao banco de dados");
				  
				}else {
		  
				   $list=$conectar->query( "select u.name  from ratings r 
											  inner join users u on r.user = u.id
											  where r.id=$ratingsId;");
					
					 
				   return $list; 
				 
				}
		  } catch (PDOException $exc) {
			  echo $exc->getMessage();
		  }
	}
	
	   
    

    
  
    
}



