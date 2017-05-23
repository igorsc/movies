<title>Cadastro de Movies</title>
         <link rel='stylesheet' type='text/css' href='Content/bootstrap.css'>
         <link rel='stylesheet' type='text/css' href='Content/bootstrap.min.css'>
         
          <table border='1' class='table-responsive' style='border:solid;width: 100%; border-style:inset; background-color:#3071a9;height: 120px;direction:initial' >
            <thead>    
                <tr  style='font-size:50px'>
                    <th class='text-center'>Cadastro de Movies</th>
                </tr>
            </thead>
           
        </table>
        
        <br/>


<?php

require './DTO/Movies.php';
require './controller/MoviesController.php' ;

$movie = new Movies();
$controlemovies= new MoviesController();

$movie->Id=$_GET['id'];
$movie->Title=$_POST['title'];
$movie->Genres=$_POST['genres'];



    
    try {
     
    
          
          if($movie->Id && $movie->Title!='' && $movie->Genres!='' ){        
                       
                   $controlemovies->Salvar($movie->Id,$movie->Title,$movie->Genres);
                   
                   echo" <div class='text-center'><label class='alert alert-success alert-dismissible fade in' role='alert'><h3>Atualizado com sucesso.Voltar para cadastro!</h3></lable></div>";
                  
                   echo "<div class='text-center'><a href='CadastroMovies.php?id=$movie->Id&title=$movie->Title&genres=$movie->Genres'><input type='submit' value='Voltar' class='btn-primary btn-lg'/></a></div>" ;
                    
                    
              
          }else{
             echo "<div class='text-center'><label class='alert alert-danger alert-dismissible fade in' role='alert'><h3>Nao foi possivel salvar.</h3></a></div>";
             echo "<div class='text-center'><a href='CadastroMovies.php?id=$movie->Id&title=$movie->Title&genres=$movie->Genres'><input type='submit' value='Voltar' class='btn-primary btn-lg'/></a></div>" ;
          } 
          
       } catch (Exception $ex) {
          echo 'Error:'.$ex->getMessage();
         }       
     

