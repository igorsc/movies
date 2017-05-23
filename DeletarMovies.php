   <title>Deletar Movies</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Content/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="Content/bootstrap.min.css">
    
    
        
         <table border="1" class="table-responsive" style="border:solid;width: 100%; border-style:inset; background-color:#3071a9;height: 120px;direction:initial" >
            <thead>    
                <tr  style="font-size:50px">
                    <th class="text-center">Deletar Movies</th>
                </tr>
            </thead>
           
        </table>
        
        <br/>




<?php
     include './controller/MoviesController.php';
     
     
  
       $controlemovie = new MoviesController();
     
       $id=$_GET['id'];
     
     
       $controlemovie->Delete($id);
    
    
       echo "<div class='text-center'><a href='ListarMovies.php'><input type='submit' value='Voltar' class='btn-primary btn-lg'/></a></div>" ;
     
?>


