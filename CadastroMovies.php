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
         
         
         
<!--         
          <form action="CadastroMovie.php"   method="post">
            <div class="row">
                <div class="col-md-6">    
                    <label id="lblTitle" class="text-left form-inline" style="color: blue" >Title</label>
                    <input name="title" id="txtTitle" type="text" class="form-control"/>
                </div>
                <div class="col-md-6">    
                    <label id="lblGeners" class="text-left form-inline" style="color: blue">Geners</label>
                    <input name="geners" id="txtGeners" type="text"  class="form-control" />
                </div>
            </div>
            <br/>
            <div class="text-center">
                <input   id="btnSalvar" type="submit" value="Salvar" class="btn-primary btn-lg"/>
            </div>
        </form>-->



<?php

require './DTO/Movies.php';
require './controller/MoviesController.php' ;

//$pessoa = new Pessoa();
$controlemovies= new MoviesController();


$movies = new Movies();
$movies->Id = $_REQUEST['id'];

if($movies->Id>0){
    
    
   
    $movies->Title=$_REQUEST['title'];
    $movies->Genres=$_REQUEST['genres'];
    
    
  
    
    echo " <form action='CadastroMoviesAtlz.php?id=$movies->Id&title=$movies->Title&genres=$movies->Genres' method='post'>
            <div class='row'>
                <div class='col-md-6'>    
                    <label id='lblTitle' class='text-left form-inline' style='color: blue'>Title</label>
                    <input name='title' id='txtTitle' type='text' class='form-control' value='$movies->Title'/>
                </div>
                <div class='col-md-6'>    
                    <label id='lblGenres' class='text-left form-inline' style='color: blue'>Genres</label>
                    <input name='genres' id='txtGenres' type='text' class='form-control' value='$movies->Genres' />
                </div>
            </div>
            <br/>
            <div class='text-center'>
                <input   id='btnSalvar' type='submit' value='Salvar' class='btn-primary btn-lg'/>
            </div>
        </form>
        <br/>";
    echo "<div class='text-center'>     
              <a href='ListarMovies.php'><input type='submit' value='Voltar' class='btn-primary btn-lg'/></a>
          </div>";   
    

    
    
     
} else if ($movies->Id==0) {
    
    
    
     echo " <form action='CadastroMoviesInsert.php' method='post'>
            <div class='row'>
                <div class='col-md-6'>    
                    <label id='lblTitle' class='text-left form-inline' style='color: blue'>Title</label>
                    <input name='title' id='txtTitle' type='text' class='form-control' />
                </div>
                <div class='col-md-6'>    
                    <label id='lblGeners' class='text-left form-inline' style='color: blue'>Genres</label>
                    <input name='genres' id='txtGenres' type='text' class='form-control'/>
                </div>
            </div>
            <br/>
            <div class='text-center'>
                <input   id='btnSalvar' type='submit' value='Salvar' class='btn-primary btn-lg'/>
            </div>
        </form>
        <br/>";
      echo "<div class='text-center'>     
              <a href='ListarMovies.php'><input type='submit' value='Voltar' class='btn-primary btn-lg'/></a>
          </div>";   
    
 
}  





 
 
   
    
    
   
    
     

