 <title>Cadastrar Movies</title>
         <link rel="stylesheet" type="text/css" href="Content/bootstrap.css">
         <link rel="stylesheet" type="text/css" href="Content/bootstrap.min.css">

         
          <table border="1" class="table-responsive" style="border:solid;width: 100%; border-style:inset; background-color:#3071a9;height: 120px;direction:initial" >
            <thead>    
                <tr  style="font-size:50px">
                    <th class="text-center">Cadastrar Movies</th>
                </tr>
            </thead>

        </table>
         


<?php

require './DTO/Movies.php';
require './controller/MoviesController.php' ;

//$pessoa = new Pessoa();
$controlemovies= new MoviesController();


$movies = new Movies();
    
    
   
    $movies->Title=$_POST['title'];
    $movies->Genres=$_POST['genres'];
    
    
    try {
     
         
          
          if($movies->Title!='' && $movies->Genres!='' ){        
                       
                   $controlemovies->Salvar(isset($_GET['id']),$movies->Title,$movies->Genres);
                   
                   
                   echo" <div class='text-center'><label class='alert alert-success alert-dismissible fade in' role='alert'><h3>Salvo com sucesso!</h3></lable></div>";
                  
                   echo "<div class='text-center'> <a href='CadastroMovies.php?id=$movies->Id&title=$movies->Title&genres=$movies->Genres'><input type='submit' value='Voltar' class='btn-primary btn-lg'/></a></div>" ;
                    
                    
              
          }
          else
          {
             echo "<div class='text-center'><label class='alert alert-danger alert-dismissible fade in' role='alert'><h3>Nao foi possivel salvar.</h3></a></div>";
             echo "<div class='text-center'><a href='CadastroMovies.php'><input type='submit' value='Voltar' class='btn-primary btn-lg'/></a></div>" ;
          } 
          
       } catch (Exception $ex) {
          echo 'Error:'.$ex->getMessage();
       }       
 





 
 
   
    
    
   
    
     

