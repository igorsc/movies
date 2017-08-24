 <title>Cadastrar Ratings</title>
         <link rel="stylesheet" type="text/css" href="Content/bootstrap.css">
         <link rel="stylesheet" type="text/css" href="Content/bootstrap.min.css">

          <table border="1" class="table-responsive" style="border:solid;width: 100%; border-style:inset; background-color:#3071a9;height: 120px;direction:initial" >
            <thead>    
                <tr  style="font-size:50px">
                    <th class="text-center">Cadastrar Ratings</th>
                </tr>
            </thead>

        </table>
         


<?php

require './DTO/Ratings.php';
require './controller/RatingsController.php' ;


$controleratings= new RatingsController();


$ratings = new Ratings();
    
    
   
    $ratings->MovieId=$_POST['movieId'];
    $ratings->Score=$_POST['score'];
    $ratings->TimeStamp=$_POST['timestamp'];
    $ratings->UserId=$_POST['userId'];
    $ratings->Ip=$_POST['ip'];
    
    
    try {
     
         
          
          if($ratings->MovieId!='' && $ratings->Score!='' && $ratings->TimeStamp && $ratings->UserId !='' && $ratings->Ip!=''){        
                       
                   $controleratings->Salvar($ratings->Id ,$ratings->MovieId ,$ratings->Score , $ratings->TimeStamp , $ratings->UserId ,$ratings->Ip);
                   
                   
                   echo" <div class='text-center'><label class='alert alert-success alert-dismissible fade in' role='alert'><h3>Salvo com sucesso!</h3></lable></div>";
                  
                   echo "<div class='text-center'> <a href='CadastroRatings.php?id=$ratings->Id&movieId=$ratings->MovieId&score=$ratings->Score&timestamp=$ratings->TimeStamp&userId=$ratings->UserId&ip=$ratings->Ip'><input type='submit' value='Voltar' class='btn-primary btn-lg'/></a></div>" ;
                    
                    
              
          }
          else
          {
             echo "<div class='text-center'><label class='alert alert-danger alert-dismissible fade in' role='alert'><h3>Nao foi possivel salvar.</h3></a></div>";
             echo "<div class='text-center'><a href='CadastroRatings.php'><input type='submit' value='Voltar' class='btn-primary btn-lg'/></a></div>" ;
          } 
          
       } catch (Exception $ex) {
          echo 'Error:'.$ex->getMessage();
       }       
 





 
 
   
    
    
   
    
     

