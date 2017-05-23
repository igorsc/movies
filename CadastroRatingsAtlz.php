<title>Cadastro de Ratings</title>
         <link rel='stylesheet' type='text/css' href='Content/bootstrap.css'>
         <link rel='stylesheet' type='text/css' href='Content/bootstrap.min.css'>
         
          <table border='1' class='table-responsive' style='border:solid;width: 100%; border-style:inset; background-color:#3071a9;height: 120px;direction:initial' >
            <thead>    
                <tr  style='font-size:50px'>
                    <th class='text-center'>Cadastro de Ratings</th>
                </tr>
            </thead>
           
        </table>
        
        <br/>


<?php

require './DTO/Ratings.php';
require './controller/RatingsController.php' ;

$ratings = new Ratings();
$controleratings= new RatingsController();

$ratings->Id=$_GET['id'];
$ratings->MovieId=$_POST['movieId'];
$ratings->Score=$_POST['score'];
$ratings->TimeStamp=$_POST['timestamp'];
$ratings->UserId=$_POST['userId'];
$ratings->Ip=$_POST['ip'];
$movie=$_GET['movie'];
$user=$_GET['user'];

    
    try {
        
            
        
         $listRatings  = $controleratings->GetData();
           
        foreach ($listRatings as $value) {
            if ($value['id'] != $ratings->Id) {
                if ($value['ip'] == $ratings->Ip) {
                    throw  new Exception("IP já existe.Obtenha outro");
                }
            }
          
        }
        
    
    
          
          if($ratings->Id && $ratings->MovieId!='' && $ratings->Score!=''&& $ratings->TimeStamp!='' && $ratings->UserId!='' && $ratings->Ip!=''  ){        
                       
                   $controleratings->Salvar($ratings->Id ,$ratings->MovieId, $ratings->Score,$ratings->TimeStamp,$ratings->UserId, $ratings->Ip);
                   
                   echo" <div class='text-center'><label class='alert alert-success alert-dismissible fade in' role='alert'><h3>Atualizado com sucesso.Voltar para cadastro!</h3></lable></div>";
                  
                   echo "<div class='text-center'><a href='CadastroRatings.php?id=$ratings->Id&movieId=$ratings->MovieId&score=$ratings->Score&timestamp=$ratings->TimeStamp&userId=$ratings->UserId&ip=$ratings->Ip&movie=$movie&user=$user'><input type='submit' value='Voltar' class='btn-primary btn-lg'/></a></div>" ;
                    
                    
              
          }else{
//             echo "<div class='text-center'><label class='alert alert-danger alert-dismissible fade in' role='alert'><h3>Nao foi possivel salvar.</h3></a></div>";
//             echo "<div class='text-center'><a href='CadastroRatings.php?id=$ratings->Id&movieId=$ratings->MovieId&score=$ratings->Score&timestamp=$ratings->TimeStamp&userId=$ratings->UserId&ip=$ratings->Ip'><input type='submit' value='Voltar' class='btn-primary btn-lg'/></a></div>" ;
              throw  new Exception("Nao foi possivel salvar.");
          } 
          
       } catch (Exception $ex) {
            echo "<div class='text-center'><label class='alert alert-danger alert-dismissible fade in' role='alert'><h3>Error: ".$ex->getMessage()."</h3></a></div>";
             echo "<div class='text-center'><a href='CadastroRatings.php?id=$ratings->Id&movieId=$ratings->MovieId&score=$ratings->Score&timestamp=$ratings->TimeStamp&userId=$ratings->UserId&ip=$ratings->Ip&movie=$movie&user=$user'><input type='submit' value='Voltar' class='btn-primary btn-lg'/></a></div>" ; 
          
         }       
     

